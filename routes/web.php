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
    return view('login');
});

//Auth::routes();
Route::post('login', 'LoginController@login');


Route::get('users/register', 'RegisterController@registerForm');
Route::get('users/index', 'UserController@index');
Route::get('users/{id}', 'UserController@show');

Route::resource('configurations', 'PriceConfiguration');
Route::resource('payments', 'PaymentController');
Route::resource('roles', 'RoleController');

Route::get('/home', 'HomeController@index')->name('home');
