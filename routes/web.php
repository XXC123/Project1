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
    return view('managers.managerLogin');
});
Route::get('/managerRegister', function () {
    return view('managers.managerRegister');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/login', 'CustomerController@customerLogin');
Route::post('/register', 'CustomerController@customerRegister');
Route::post('/managerLogin', 'ManagerController@managerLogin');
Route::post('/managerRegister', 'ManagerController@managerRegister');

Route::group(['middleware' => ['web','login']], function () {
	Route::get('/', 'CustomerController@showHomePage');
	Route::get('/logout', 'CustomerController@customerLogout');
	Route::get('/wtb/list', 'WtbController@showWtbList');
	Route::get('/wtb/new', 'WtbController@showNewWtb');
	Route::post('/wtb/new', 'WtbController@createNewWtb');
	Route::get('/wtb/{wtbId}', 'WtbController@showWtbDetail');
});