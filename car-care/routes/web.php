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


Route::get('/','HomeController@home');

Route::resource('autos','AutoController');
Route::get('delete/{id}', 'AutoController@destroy');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


