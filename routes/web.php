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


Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
Route::get('/', "StudentController@index");
Route::get('/edit/{id}', "StudentController@edit");
Route::get('/show/{id}', "StudentController@show");
Route::get('/create', "StudentController@create");
Route::get('/store', "StudentController@store");
Route::get('/update/{id}', "StudentController@update");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');