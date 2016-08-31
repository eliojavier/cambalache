<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('books', 'BooksController');

Route::get('{user}/books', 'BooksController@userBooks');

Route::get('roles/attachrole', 'RolesController@attachRole');
Route::post('roles/attachrole','RolesController@storeAttachedRole');
Route::resource('roles', 'RolesController');


Route::get('permissions/attachpermission', 'PermissionsController@attachPermission');
Route::post('permissions/attachpermission','PermissionsController@storeAttachedPermission');
Route::resource('permissions', 'PermissionsController');

