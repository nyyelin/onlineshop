<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Admin')->only('index','show');
        $this->middleware('role:Customer')->only('store','order_history');


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id','DESC')->get();
        return view('backend.order.orderlist',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mycart = $request->mycart;
        $mycartArr = json_decode($mycart);
        $voucherno = uniqid();
        $total=0;

        foreach ($mycartArr as $row) {
            $total += $row->price * $row->qty;
        }

        $order = new Order;
        $order->voucherno=$voucherno;
        $order->orderdate = date('Y-m-d');
        $order->note = $request->note;
        $order->total=$total;
        $order->user_id = Auth::id();
        $order->save();

        foreach ($mycartArr as $row) {
            $order->items()->attach($row->id,['qty'=>$row->qty]);
        }
        
        return "Order Success!!";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $order = Order::find($id);
        return view('backend.order.orderdetail',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function order_history()
    {
        $user_id = Auth::id();
        $orders = Order::where('user_id',$user_id)->orderBy('id','DESC')->get();
        return view('frontend.order_history',compact('orders'));
    }

    public function order_search(Request $request)
    {
        $order_list = Order::whereBetween('orderdate',[$request->startdate,$request->enddate])->get();
        $order_pivot = array();
        $user = array();
        foreach ($order_list as $value) {
           $order_pivot = $value->items;
           $order_user = $value->user;
        }
        return $order_list;
       
    }
}
