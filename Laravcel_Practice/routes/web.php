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


Route::get('/', 'pageController@welcome');
Route::get('contact', 'pageController@contact');
Route::get('about', 'pageController@about');
Route::get('join', 'pageController@join');
Route::resource('songs', 'songsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
