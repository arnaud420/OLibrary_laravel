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

Route::get('/', 'LoginController@index');
//Routes artwork
Route::resource('artworks', 'ArtworkController');

Auth::routes();
Route::get('/logout', 'LoginController@logout');

//Routes user
Route::get('/user/{id}', 'UserController@index');
Route::get('/user/{id}/edit', ['uses' => 'UserController@edit', 'as' => 'user.edit']);
Route::post('/user/{id}/edit', ['uses' => 'UserController@update', 'as' => 'user.update']);

//Routes admin
Route::group(['as' => 'admin'], function () {
    Route::get('admin', 'Admin\AdminController@index');
    Route::resource('admin/users', 'Admin\AdminUsersController');
    Route::resource('admin/artworks', 'Admin\AdminArtworksController');
    Route::get('admin/author/create', ['uses' => 'Admin\AdminAuthorsController@create', 'as' => 'author.create']);
    Route::post('admin/author/create', ['uses' => 'Admin\AdminAuthorsController@store', 'as' => 'author.store']);
});
