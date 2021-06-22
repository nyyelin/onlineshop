<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Subcategory;
use App\Category;

class PageController extends Controller
{
  public function home($value='')
  {
    $items = Item::all()->take(6);
    $brands = Brand::all();
    return view('frontend.home',compact('items','brands'));
  }

  public function itemdetail($id)
  {
    $itemdetail = Item::find($id);
    $brand_id = $itemdetail->brand_id;
    $subcategory_id = $itemdetail->subcategory_id;
    // relate item

    // where two ku mot lo array nat sis pay lo ya tal
    $relate_items = Item::where(['brand_id'=>$brand_id,'subcategory_id'=>$subcategory_id])->get();
    // dd($relate_item);
    return view('frontend.detail',compact('itemdetail','relate_items'));
  }

  public function promotions($value='')
  {
    $items = Item::where('discount' ,'>', 0)->get();
    
    return view('frontend.promotions',compact('items'));
  }

  public function filteritems($id)
  {
    $item_subcategories = Subcategory::find($id);
    $categories = Category::all();
    return view('frontend.filteritems',compact('item_subcategories','categories'));
  }


  public function filterwithcategory(Request $request)
  {
    $category = Category::find($request->id);
    // $category = DB::table('items')
    //           ->join('subcategories',)
    $items = array();
    foreach ($category->subcategories as $value) {
      $items = $value->items;
    }
    // dd($items)
    return $category;
  }



  public function shoppingcart($value='')
  {
    return view('frontend.shoppingcart');
  }

  public function itemsbybrand($id)
  {
    $brand = Brand::find($id);

    return view('frontend.itemsbybrand',compact('brand'));
  }

  public function login($value='')
  {
    return view('frontend.login');
  }

  public function register($value='')
  {
    return view('frontend.register');
  }
  
}
