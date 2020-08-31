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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', 'HomeController@top');
Route::get('/hello/{id}', 'HomeController@show')->where('id', '[0-9]+');
Route::get('/hello/new', 'HomeController@new');
Route::post('/hello/create', 'HomeController@create');
Route::get('/hello/edit/{id}', 'HomeController@edit')->where('id', '[0-9]+');
Route::post('/hello/update/{id}', 'HomeController@update')->where('id', '[0-9]+');
Route::get('/hello/delete/{id}', 'HomeController@destroy')->where('id', '[0-9]+');