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

Route::get('/create', 'HomeController@informacionUsuarioview');

Route::post('/create','HomeController@registrarusuario');

Route::get('/', 'HomeController@index');

Route::get('/consulta', 'HomeController@consultarregistroview');
Route::post('/consulta', 'HomeController@consultarregistro');
Route::put('/consulta', 'HomeController@eliminarregistro');

Route::get('/usuarios', 'HomeController@consultarusuarios');






