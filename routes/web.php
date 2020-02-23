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
Route::get('/', 'UsuariosController@index')->name('inicio');

Route::post('/agregar', 'UsuariosController@store')->name('store');

Route::get('/editar/{id}', 'UsuariosController@edit')->name('editar');

Route::put('/update/{id}', 'UsuariosController@update')->name('update');

Route::delete('/eliminar/{id}', 'UsuariosController@destroy')->name('eliminar');

Route::get('/ver/{id}', 'VehiculoController@show')->name('ver');

Route::post('/agregarv', 'VehiculoController@store')->name('storev');

Route::get('/misv/{id}', 'VehiculoController@misVehiculos')->name('misv');