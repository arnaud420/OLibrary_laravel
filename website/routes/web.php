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

// Public routes
Route::get('/', 'LoginController@index');
Auth::routes();

//Routes artwork
Route::group(['middleware' => 'isLogged'], function() {
    Route::resource('artworks', 'ArtworkController');
    Route::get('/artworks/{id}/exemplaires', 'ArtworkController@getExemplaires');
    Route::get('/artwork/borrow/{id}', 'ArtworkController@borrow');
    Route::get('/user/borrows', 'UserController@borrows');
    Route::post('/artworks/search', 'ArtworkController@searchAll');

    Route::get('/logout', 'LoginController@logout');

    //Routes user
    Route::get('/user/{id}', 'UserController@index');
    Route::get('/user/{id}/edit', ['uses' => 'UserController@edit', 'as' => 'user.edit']);
    Route::post('/user/{id}/edit', ['uses' => 'UserController@update', 'as' => 'user.update']);
    
    //Routes admin
    Route::group(['middleware' => 'isAdmin'], function() {
        Route::group(['as' => 'admin'], function() {
            Route::get('admin', 'Admin\AdminController@index');
            Route::resource('admin/users', 'Admin\AdminUsersController');
            Route::resource('admin/artworks', 'Admin\AdminArtworksController');
            Route::resource('admin/authorities', 'Admin\AdminAuthoritiesController');
            Route::get('admin/author/create', ['uses' => 'Admin\AdminAuthorsController@create', 'as' => 'author.create']);
            Route::post('admin/author/create', ['uses' => 'Admin\AdminAuthorsController@store', 'as' => 'author.store']);
            Route::get('admin/family-authoritie/create', ['uses' => 'Admin\AdminFamilyAuthoritiesController@create', 'as' => 'familyauthoritie.create']);
            Route::post('admin/family-authoritie/create', ['uses' => 'Admin\AdminFamilyAuthoritiesController@store', 'as' => 'familyauthoritie.store']);
            Route::get('admin/type/create', ['uses' => 'Admin\AdminTypesController@create', 'as' => 'type.create']);
            Route::post('admin/type/create', ['uses' => 'Admin\AdminTypesController@store', 'as' => 'type.store']);
            Route::resource('admin/artworks.exemplaires', 'Admin\AdminExemplairesController');
        });
    });
});