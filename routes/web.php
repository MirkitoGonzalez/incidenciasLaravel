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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Routes en homecontroller
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reportar', 'HomeController@report')->name('reportar');



Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function () {
// routes en controller (evitar que entren sin ser admin)

/* usuarios */
Route::get('/usuarios', 'UserController@index');
Route::get('/config', 'UserController@config')-> name('config');
Route::post('/update', 'UserController@update')-> name('update');
/* Incidencias */
Route::get('/create', 'incidenciasController@index')-> name('incidencias_create');

});
