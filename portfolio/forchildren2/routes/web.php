<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\WellcomeController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\BasketController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(WellcomeController::class)->group(function () {
    Route::get('/', 'welcome')->name('welcome.welcome');
    Route::get('/catalog', 'catalog')->name('welcome.catalog');
    Route::get('/admin', 'admin')->name('admin');
    Route::get('/about', 'about')->name('about');
    Route::get('/journal', 'journal')->name('journal');
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/journal/{category}', 'category')->name('category');
    Route::get('/admin/orders/{status}', 'statusOrder')->name('statusOrder');
    Route::get('accept/{baskets}', 'accept')->name('accept');
    Route::get('reject/{baskets}', 'reject')->name('reject');
    Route::get('/list', 'list')->name('list');



    
});

Route::controller(BasketController::class)->group(function (){

    Route::get('/basket/{product}', 'addBasket')->name('addBasket');
    Route::get('/basket/{product}/removeBasket', 'removeBasket')->name('removeBasket');
    Route::get('/basket', 'basket')->name('basket');
    Route::get('/order', 'makeOrder')->name('makeOrder');
    // Route::post('/registra', 'registra')->name('registra');


});

Route::controller(AuthController::class)->name('auth.')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/signUp', 'signUp')->name('signUp');
    Route::post('/registr', 'registr')->name('registr');
    Route::post('/loginSession', 'loginSession')->name('loginSession');
    Route::post('/logout', 'logout')->name('logout');

});

Route::controller(CategoryController::class)->prefix('category')->name('category.')->group(function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    // // id
    Route::delete('/{category}', 'destroy')->name('destroy');
    Route::get('/{category}/edit', 'edit')->name('edit');
    Route::patch('/{category}', 'update')->name('update');
});

Route::controller(ProductController::class)->prefix('product')->name('product.')->group(function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::delete('/{product}', 'destroy')->name('destroy');
    Route::get('{product}/edit', 'edit')->name('edit');
    Route::get('{product}/show', 'show')->name('show');
    Route::patch('/{product}', 'update')->name('update');
});
