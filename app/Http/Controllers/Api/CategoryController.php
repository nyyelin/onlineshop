<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\CategoryResource;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $data = CategoryResource::collection($categories);
        return response()->json($data);
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
        $request->validate([
            'name' => 'required',
            'photo' => 'required'
        ]);

        if($request->hasFile('photo')){
            $name = time().$request->photo->getClientOriginalName();
            $filepath = $request->file('photo')->storeAs('category',$name,'public');
            $photo = '/storage/'.$filepath;
        } else {
            $photo = $request->photo;
        }
        $category = new Category;
        $category->name = $request->name;
        $category->photo = $photo;
        $category->save();
        $data = new CategoryResource($category);
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        $data = new CategoryResource($category);
        return response()->json($data);
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
        return response()->json($request);
        if($request->hasFile('photo')){
            $name = time().$request->photo->getClientOriginalName();
            $filepath = $request->file('photo')->storeAs('category',$name,'public');
            $photo = '/storage/'.$filepath;
        } else {
            $photo = $request->photo;
        }
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->photo = $photo;
        $category->save();
        $data = new CategoryResource($category);
        
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
}
