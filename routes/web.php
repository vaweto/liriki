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
Route::name('lang.switch')->get('lang/{lang}', 'LanguageController@switchLang');


Route::name('homepage')->get('/', 'HomeController@index');

Route::name('event.index')->get('events', 'EventController@index');
Route::name('event.show')->get('events/{slug}', 'EventController@show');

Route::name('placemark.show')->get('placemarks/{slug}', 'PlacemarkController@show');

Route::name('blog.index')->get('blog', 'BlogController@index');
Route::name('blog.show')->get('blog/{slug}', 'BlogController@show');


Route::name('page.show')->get('/{slug}', 'PageController@show');
