<?php

namespace App\Http\Controllers;

use App\Item;
use App\Brand;
use App\Subcategory;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('backend.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $subcategories = Subcategory::all();

        return view('backend.items.create', compact('brands', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            "codeno" => 'required|min:4',
            "name" => 'required',
            "price" => 'required',
            "discount" => 'required',
            "description" => 'required',
            "photo" => 'required',
            "brand" => 'required',
            "subcategory" => 'required'
        ]);

        // If include file, upload file
        $imageName = time() . '.' . $request->photo->extension();

        $request->photo->move(public_path('backend/itemimg'), $imageName);

        $path = 'backend/itemimg/' . $imageName;
        // Data insert
        $item = new Item;
        // col name from database
        $item->codeno = $request->codeno;
        $item->name = $request->name;
        $item->photo = $path;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->brand_id = $request->brand;
        $item->subcategory_id = $request->subcategory;
        $item->save();

        // redirect
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $brands = Brand::all();
        $subcategories = Subcategory::all();
        return view('backend.items.edit', compact('brands', 'subcategories', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        // dd($request);

        // validation
        $request->validate([
            "codeno" => 'required|min:4',
            "name" => 'required',
            "price" => 'required',
            "discount" => 'required',
            "description" => 'required',
            "photo" => 'sometimes',
            "oldphoto" => 'required',
            "brand" => 'required',
            "subcategory" => 'required'
        ]);

        // file upload, if data
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();

            $request->photo->move(public_path('backend/itemimg'), $imageName);

            $path = 'backend/itemimg/' . $imageName;
        } else {
            $path = $request->oldphoto;
        }

        // data update
        $item->codeno = $request->codeno;
        $item->name = $request->name;
        $item->photo = $path;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->brand_id = $request->brand;
        $item->subcategory_id = $request->subcategory;
        $item->save();

        // redirect
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        // delete method
        $item->delete();
        return redirect()->route('items.index');
    }
}
