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
Route::get('contact', 'PagesController@getcontact');
Route::post('contact', 'PagesController@postcontact');

Route::get('about', 'PagesController@getabout');

Route::get('/', 'PagesController@getindex');

Route::get('create', 'PostController@getcreate');
Route::post('create', 'PostController@postcreate');
