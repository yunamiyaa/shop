<?php

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

Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::get('/shop', 'ShopController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart', 'ShopController@cart')->middleware('auth');
Route::post('/items','ShopController@store');
Route::get('/items', 'ShopController@show')->middleware('auth');;
Route::post('/delete','ShopController@destroy')->name('delete');
Route::post('/preview','ShopController@cartPreview')->name('preview');

