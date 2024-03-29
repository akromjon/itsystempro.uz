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

Route::get('/','HomeController@index')->name('index');
Route::get('/{local}',function($lang){
    App::setLocale($lang);
    return view('welcome');
});
Route::post('/send','HomeController@store')->name('message.store');
Route::post('/sendMessage','HomeController@storeMessage')->name('message.storeMessage');

