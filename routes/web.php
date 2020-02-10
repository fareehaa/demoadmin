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
/* <!---user Routes---> */
Route::get('/', 'user\HomeController@index');
Route::get('/post', 'user\PostController@index');

/* admin Route */
Route::get('admin/home', 'Admin\AdminHomeController@index');

/* Post Route */
Route::resource('admin/post', 'Admin\PostController');

Route::resource('admin/tag', 'Admin\TagController');
Route::resource('admin/category', 'Admin\CategoryController');

