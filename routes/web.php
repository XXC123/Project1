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

Route::get('/login', function () {
    return view('login');
});
Route::get('/managerLogin', function () {
    return view('manager.managerLogin');
});
Route::get('/managerMenu', 'ManagerController@showHomePage');
Route::get('/register', function () {
    return view('register');
});
Route::post('/login', 'CustomerController@customerLogin');
Route::post('/register', 'CustomerController@customerRegister');
Route::post('/managerLogin', 'ManagerController@managerLogin');
Route::post('/managerRegister', 'ManagerController@managerRegister');
Route::get('/manager/managerList', 'WtbController@managerShowWtbList');
Route::any('mail/send','MailController@send');

Route::get('/manager/delete{id}', 'WtbController@deleteWtb');
Route::group(['middleware' => ['web','login']], function () {
	Route::get('/', 'CustomerController@showHomePage');
	Route::get('/logout', 'CustomerController@customerLogout');
	Route::get('/wtb/list', 'WtbController@showWtbList');
	Route::get('/wtb/new', 'WtbController@showNewWtb');
	Route::post('/wtb/new', 'WtbController@createNewWtb');
	Route::get('/wtb/{wtbId}', 'WtbController@showWtbDetail');
});


Route::get('product','ProductsController@create')->name('product');
Route::get('search','ProductsController@search')->name('search');
Route::resource('products', 'ProductsController');

//Route::get('/users/{user}', 'UsersController@show')->name('users.show');
//Route::post('/users', 'UsersController@store')->name('users.store');

Route::post('/users/searchproduct', 'ProductsController@searchproduct')->name('products.searchproduct');
Route::get('/users/{color}/{brandname}/{size}/{price}/{year}/{series}', 'ProductsController@getpost')->name('products.getpost');
