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

Route::get('/', 'SportschoolController@index')->name('index');

Route::get('/app/show/{sportschool}', 'SportschoolController@show');

Route::get('/app/create', 'SportschoolController@create');

Route::post('/' , 'SportschoolController@store');

Route::get('/search', 'SportschoolController@search');

