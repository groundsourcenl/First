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
//Home
Route::get('/', 'PagesController@getwelcome');

//Contact
Route::get('contact', 'PagesController@getcontact');
Route::post('contact', 'PagesController@postcontact');
Route::get('all_contact', 'PagesController@getall_contact');

//About
Route::get('about', 'PagesController@getabout');

//Create
Route::get('create', 'PostController@getcreate');
Route::post('create', 'PostController@postcreate');

Route::get('index', 'PostController@getindex');

//Created multiple Routes for TestController
Route::resource('test', 'TestController');
