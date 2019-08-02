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

/*admin*/

Route::get('admin','AdminController@index')->name('admin')->middleware('admin');

/*category*/

Route::get('admin/category','CategoryController@index')->name('category.index')->middleware('admin');
Route::get('admin/category/create','CategoryController@create')->name('category.create')->middleware('admin');
Route::post('admin/category/create','CategoryController@store')->name('category.store')->middleware('admin');
Route::get('admin/category/{id}/edit','CategoryController@edit')->name('category.edit')->middleware('admin');
Route::patch('admin/category/{id}','CategoryController@update')->name('category.update')->middleware('admin');
Route::delete('admin/category/{id}','CategoryController@destroy')->name('category.destroy')->middleware('admin');
Route::get('/category/{id}','CategoryController@show')->name('category.show');

/*product*/

Route::get('admin/product','ProductController@index')->name('product.index')->middleware('admin');
Route::get('admin/product/create','ProductController@create')->name('product.create')->middleware('admin');
Route::post('admin/product/create','ProductController@store')->name('product.store')->middleware('admin');
Route::get('admin/product/{id}/edit','ProductController@edit')->name('product.edit')->middleware('admin');
Route::patch('admin/product/{id}','ProductController@update')->name('product.update')->middleware('admin');
Route::delete('admin/product/{id}','ProductController@destroy')->name('product.destroy')->middleware('admin');
Route::get('/product/{id}','ProductController@show')->name('product.show');


Route::get('myorder/','OrderController@index')->name('order.index')->middleware('auth');
Route::post('order/','OrderController@store')->name('order.store')->middleware('auth');


//email
Route::get('/email', function () {
	
    return view('send_email');
});
Route::post('/sendEmail', 'ProductController@sendEmail');
Route::get('/eek/{$id}', 'ProductController@test');