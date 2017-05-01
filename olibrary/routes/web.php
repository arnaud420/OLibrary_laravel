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

Route::resource('/', 'ArtworkController', ['only' => 'index']);

Auth::routes();
Route::get('/logout', 'LoginController@logout');
Route::get('/user/{id}', 'UserController@index');
Route::get('/user/{id}/edit', ['uses' => 'UserController@edit', 'as' => 'user.edit']);
Route::post('/user/{id}/edit', ['uses' => 'UserController@update', 'as' => 'user.update']);
