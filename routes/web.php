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
//Route::get('/posts/create', 'PagesController@getCreate');

//Route::resource('registration', 'RegistrationController');

Route::resource('messages', 'MessageController');



//Route::resource('pages', 'PostController');

Route::get('/creator', 'PagesController@getCreator');

//Route::get('/contact', 'PagesController@getContact');

Route::get('/about', 'PagesController@getAbout');

Route::get('/', 'PostController@index');



Route::get('/contact', 'MessageController@create');

//Route::view('/register','registration.register');

//Route::view('/signin','registration.signin');




Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::resource('posts', 'PostController');
Route::get('/create', 'PostController@create');