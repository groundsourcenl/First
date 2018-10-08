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
Route::get('/', 'PagesController@getindex');

//Contact
Route::get('contact', 'PagesController@getcontact');
Route::post('contact', 'PagesController@postcontact');
Route::get('show_contact_inserted', 'PagesController@getshow_contact_inserted');

//About
Route::get('about', 'PagesController@getabout');

//Create
Route::get('create', 'PostController@getcreate');
Route::post('create', 'PostController@postcreate');

Route::get('index', 'PostController@getindex');

//Created multiple Routes for Blogpost
//Route::resource('blogposts', 'BlogController');

Route::get('create', 'TestController@getcreate');
