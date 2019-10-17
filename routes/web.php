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

Route::get('/search', 'khachhangController@search');
Route::resource('khachhang','khachhangController');

Route::resource('nhanvien','nhanvienController');
Route::get('/search', 'nhanvienController@search');

Route::resource('kho','khoController');
Route::get('/search', 'khoController@search');

Route::resource('thongtinxe','xeController');
Route::get('/search', 'xeController@search');

Route::resource('quatang','quatangController');
Route::get('/search', 'quatangController@search');

Route::resource('tragop','tragopController');
Route::get('/search', 'tragopController@search');

Route::resource('nhapxe','nhapxeController');
Route::get('/search', 'nhapxeController@search');
