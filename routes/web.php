<?php

use Illuminate\Support\Facades\Route;

use App\Models\Product;

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

Route::get('/','App\Http\Controllers\ProductsController@index');
Route::get('cart','App\Http\Controllers\ProductsController@cart');
Route::get('add-to-cart/{id}','App\Http\Controllers\ProductsController@addToCart');
Route::patch('update-cart','App\Http\Controllers\ProductsController@update');
Route::delete('remove-from-cart','App\Http\Controllers\ProductsController@remove');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'],function(){
	Route::get('/admin','App\Http\Controllers\ProductController@index');
	Route::resource('products','App\Http\Controllers\ProductController');
});
