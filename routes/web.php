<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend

Route::get('/','PageController@home')->name('homepage');

Route::get('detail/{id}','PageController@itemdetail')->name('itemdetailpage');

Route::get('promotions','PageController@promotions')->name('promotionspage');

Route::get('itemsbybrand/{id}','PageController@itemsbybrand')->name('itemsbybrandpage');

Route::get('filteritems/{id}','PageController@filteritems')->name('filteritemspage');

Route::post('filterwithcategory','PageController@filterwithcategory')->name('filterwithcategory');


Route::get('shoppingcart','PageController@shoppingcart')->name('shoppingcartpage');

Route::get('loginpage','PageController@login')->name('loginpage');

Route::get('registerpage','PageController@register')->name('registerpage');

// Backend
Route::middleware('role:Admin')->group(function () {
	
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::resource('items','ItemController');
Route::resource('brands','BrandController');
Route::resource('categories','CategoryController');
Route::resource('subcategories','SubcategoryController');
Route::resource('subcategories','SubcategoryController');
});


Route::resource('orders','OrderController');
Route::get('order_detail','OrderController@order_history')->name('order_detail');
Route::post('order_search','OrderController@order_search')->name('order_search');



 // Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


