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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Admin/Login', 'AdminController@showLoginForm');
Route::post('/Admin/Login', 'AdminController@login');
Route::get('/Admin/index', 'AdminController@index');
Route::get('/Admin/add', 'AdminController@showAddForm');
Route::post('/Admin/add', 'AdminController@add');
Route::get('/Admin/{id}/update', 'AdminController@showUpdateForm');
Route::post('/Admin/{id}/update', 'AdminController@update');
Route::get('/Admin/{id}/delete', 'AdminController@delete');

Route::get('/user/index', 'UserController@index');
Route::get('/user/add', 'UserController@showAddForm');
Route::post('/user/add', 'UserController@add');
