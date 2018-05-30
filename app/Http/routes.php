<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'laravel-crud-image-gallery'], function () {
    Route::get('/', 'Crud4Controller@index');
    Route::match(['get', 'post'], 'create', 'Crud4Controller@create');
    Route::match(['get', 'put'], 'update/{id}', 'Crud4Controller@update');
    Route::delete('delete/{id}', 'Crud4Controller@delete');
});