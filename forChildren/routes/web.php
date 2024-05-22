<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserActionController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ResponceController;
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

// вью с нашей формой и подключенным app.js


Route::controller(ChatController::class)->group(function(){
    Route::get('/chat/{idRoom}','showChat')->name('showChat');
    Route::post('/chat-message','store')->name('store');
});
// роут который принимает post запрос который мы будем слать через axios
// Route::post('/chat-message', function (\Illuminate\Http\Request $request){
//     event(new \App\Events\ChatMessageEvent($request->message));
// });

Route::controller(WelcomeController::class)->group(function () {
    Route::get('/','welcome')->name('welcome');
    Route::get('/sign-up','signUp')->name('signUp');
    Route::get('/sign-in','signIn')->name('signIn');
    Route::get('/my-task','myTask')->name('myTask');
    Route::get('/add-task','addTask')->name('addTask');
    Route::get('/task/{task}','taskItem')->name('taskItem');
    Route::get('/profile','profile')->name('profile');
    Route::get('/task-list','taskList')->name('taskList');
    Route::get('/responces','responces')->name('responces');

    
});

Route::controller(AuthController::class)->group(function (){
    Route::post('/signUpUser','signUpUser')->name('signUpUser');
    Route::post('/signInUser','signInUser')->name('signInUser');
    Route::get('/logout','logout')->name('logout');
});

Route::controller(TaskController::class)->name('tasks.')->prefix('tasks')->group(function (){
 Route::post('/addTask','addTask')->name('addTask');


});

Route::controller(UserActionController::class)->group(function (){

    Route::post('/addBalance','addBalance')->name('addBalance');

});

Route::controller(ResponceController::class)->group(function (){
    Route::post('/addRequest','addRequest')->name('addRequest');
});