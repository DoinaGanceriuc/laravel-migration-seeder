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
Route::get('/', 'TravelController@index');
Route::get('/flight', 'TravelController@travel')->name('flight');
Route::get('/trip', 'TravelController@trip')->name('package');
Route::get('trip/{single_package}', 'TravelController@show')->name('single');
Route::get('/news', 'PostController@index')->name('news');
