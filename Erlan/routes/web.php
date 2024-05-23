<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;

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

Route::group(['middleware' => 'checkStatus'], function () {
    // Все маршруты, к которым применяется Middleware
    Route::controller(WelcomeController::class)->group(function () {
        Route::get('/','welcome')->name('welcome');
        Route::get('/sign-up','signUp')->name('signUp');
        Route::get('/sign-in','signIn')->name('signIn');
        Route::get('/profile','profile')->name('profile');
        Route::get('/add-turist','addturist')->name('addturist');
        Route::get('/flight','flight')->name('flight');
        Route::get('/hotel','hotel')->name('hotel');



    });
    
    
    Route::controller(AuthController::class)->group(function (){
        Route::post('/signUpUser','signUpUser')->name('signUpUser');
        Route::post('/signInUser','signInUser')->name('signInUser');

        Route::post('/editProfile','editProfile')->name('editProfile');
    Route::get('/delete-profile','delProfile')->name('delProfile');
    Route::post('/ban/{user}','ban')->name('ban');
    Route::post('/unban/{user}','unban')->name('unban');
    Route::post('/changePass','changePass')->name('changePass');

    
    });
});
Route::get('/ban', function () {
    return view('pages.ban');
})->name('blocked-page');
    
Route::controller(AuthController::class)->group(function (){
Route::get('/logout','logout')->name('logout');
});