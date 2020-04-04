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

Route::get('/','HomeController@index');
Route::get('/test-search','HotelsPro\TestController@search');
Route::get('/test-hotelAvailability','HotelsPro\TestController@hotelAvailability');
Route::get('/test-provision','HotelsPro\TestController@provision');

Route::post('/login-post','Auth\LoginController@authenticate');
Route::post('/signup-post','Auth\RegisterController@register');
Route::get('/signout-post','Auth\LoginController@signout'); 


