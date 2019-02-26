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
Route::resource('/admin','back\adminController');
Route::resource('/post','back\postController');
Route::resource('/category','categoryController');
Route::resource('/tag','back\tagController');
Route::get('/blog','front\acceuilController@index');
Route::get('/blog/single/{id}','front\acceuilController@show');
Route::get('/blog/category/{id}','front\acceuilController@showw');
Route::get('/blog/contact','front\acceuilController@create');
Route::post('/blog/contact','front\acceuilController@store');


 