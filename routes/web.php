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

Route::get('/', 'Controller@index');

Route::get('/blog', 'PostsController@index')->name('home');
Route::get('/blog/create','PostsController@create');
Route::post('/blog','PostsController@store');
Route::get('/blog/{post}','PostsController@show');
Route::get('/contact', 'Controller@contact');

Route::post('/blog/{post}', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/sites', 'SitesController@index');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
