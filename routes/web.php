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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news/create', 'PostsController@create');
=======
Route::get('/', 'Controller@index');

Route::get('/blog', 'PostsController@index')->name('home');
Route::get('/blog/create','PostsController@create');
Route::post('/blog','PostsController@store');
Route::get('/blog/{post}','PostsController@show');
Route::post('/blog/{post}', 'CommentsController@store');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/work', 'WorkController@index');

Route::get('/hobbies', 'HobbiesController@index');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
>>>>>>> 2143ba06f1d493ead94ad48002ac6e5daf5a15b6
