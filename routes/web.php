<?php

use Illuminate\Support\Facades\Route;

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

Route::get('product', 'ProductController@index')->name('product');
Route::get('product/add', 'ProductController@add')->name('add');
// Route::get('product/edit', 'ProductController@edit')->name('edit');
Route::put('product/update/{_id}', 'ProductController@update')->name('update');
Route::delete('product/delete/{_id}','ProductController@destroy')->name('delete');
Route::post('product/add/create', 'ProductController@create')->name('create');
// Route::post('product', 'ProductController@create');
//62ccf2fbf46e0000f90064bc
    