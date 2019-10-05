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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('stocks', 'StockController');

// Web site
Route::get('/homepage', 'WebController@index')->name('homepage');
Route::get('/cart', 'WebController@cart')->name('cart');
Route::get('/shop', 'WebController@shop')->name('shop');
Route::get('/contact', 'WebController@contact')->name('contact');




