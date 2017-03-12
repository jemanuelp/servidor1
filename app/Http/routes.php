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
// Rutas de de autentificaci�n
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Rutas para registrar Usuario
Route::get('auth/register', function() {
    return view('auth/register');
});
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', function () {
    return view('/layouts/main');
});
Route::get('/contenido/index', 'PeliculasController@index');
