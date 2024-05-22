<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('products', 'App\Http\Controllers\ProductsController@index');
Route::get('products/{product}', 'App\Http\Controllers\ProductsController@show');
Route::post('products','App\Http\Controllers\ProductsController@store');
Route::put('products/{product}','App\Http\Controllers\ProductsController@update');
Route::delete('products/{product}', 'App\Http\Controllers\ProductsController@delete');
