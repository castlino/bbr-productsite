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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome_brighte');
// });

Route::get('/', 'ProductController@index');
Route::get('/products', 'ProductController@index');

Route::get('/product/add', 'ProductController@add');
Route::post('/product/add', 'ProductController@store');

Route::get('/product/edit/{product}', 'ProductController@edit');
Route::post('/product/edit/{product}', 'ProductController@update');

Route::get('/product/delete/{product}', 'ProductController@delete');

Route::get('/product/view/{product}', 'ProductController@view');