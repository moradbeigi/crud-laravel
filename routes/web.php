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

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

//use App\Http\Controllers\StudentController;




//front route
Route::get('/', 'BookController@index')->name('basic');
Route::get('/books/create','BookController@create')->name('create')->middleware('auth');
Route::post('/books/store', 'BookController@store')->name('store')->middleware('auth');
Route::get('/books/show','BookController@show')->name('show')->middleware('auth');
Route::get('/books/show/edit/{book}','BookController@edit')->name('edit');
route::put('/books/show/update/{book}','BookController@update')->name('update');
route::get('/books/show/delete/{book}','BookController@destroy')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//admin route 

route::get('/admin','AdminController@index')->name('admin')->middleware('auth');
route::get('/admin/users','UserController@index')->name('users');
Route::get('/admin/user/edit/{user}','UserController@edit')->name('adminedit');
Route::post('admin/user/update/{user}', 'UserController@update')->name('adminupdate');
Route::get('admin/user/delete/{user}','UserController@destroy')->name('deleteadmin');