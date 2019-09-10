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

Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');

Route::get('product','ProductsController@create')->name('product');
Route::get('search','ProductsController@search')->name('search');
Route::resource('products', 'ProductsController');

//Route::get('/users/{user}', 'UsersController@show')->name('users.show');
//Route::post('/users', 'UsersController@store')->name('users.store');

Route::post('/users/searchproduct', 'ProductsController@searchproduct')->name('products.searchproduct');
Route::get('/users/{color}/{brandname}/{size}', 'ProductsController@getpost')->name('products.getpost');
