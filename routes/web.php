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
//Site
Route::get('/', 'SiteController@showInicio')->name('inicio');
Route::get('/contactanos', 'SiteController@showContactanos')->name('contactanos');
Route::get('/quienesSomos', 'SiteController@showQuienesSomos')->name('quienesSomos');
Route::get('/nuestrosServicios', 'SiteController@showNuestrosServicios')->name('nuestrosServicios');
//login
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@postLogin')->name('login');
//Técnicos
Route::get('/tecnicos', 'TecnicosController@index')->name('tecnicos');
Route::get('/tecnicos/create', 'TecnicosController@create')->name('tecnicos.create');
Route::post('/tecnicos/store', 'TecnicosController@store')->name('tecnicos.store');
Route::get('/tecnicos/edit/{id}', 'TecnicosController@edit')->name('tecnicos.edit');
Route::put('/tecnicos/update/{id}', 'TecnicosController@update')->name('tecnicos.update');
Route::get('/tecnicos/{id}', 'TecnicosController@show')->name('tecnicos.show');
Route::get('/tecnicos/search/codigo', 'TecnicosController@search')->name('tecnicos.search');
Route::post('/tecnicos/search/codigo', 'TecnicosController@postSearch')->name('tecnicos.postSearch');
Route::delete('/tecnicos/delete/{id}', 'TecnicosController@destroy')->name('tecnicos.delete');
//Clientes
Route::get('/clientes', 'ClientesController@index')->name('clientes');
Route::get('/clientes/create', 'ClientesController@create')->name('clientes.create');
Route::post('/clientes/store', 'ClientesController@store')->name('clientes.store');
Route::get('/clientes/edit/{id}', 'ClientesController@edit')->name('clientes.edit');
Route::put('/clientes/update/{id}', 'ClientesController@update')->name('clientes.update');
Route::get('/clientes/{id}', 'ClientesController@show')->name('clientes.show');
Route::get('/clientes/search/codigo', 'ClientesController@search')->name('clientes.search');
Route::post('/clientes/search/codigo', 'ClientesController@postSearch')->name('clientes.postSearch');
Route::delete('/clientes/delete/{id}', 'ClientesController@destroy')->name('clientes.delete');
//Equipos
Route::get('/equipos', 'EquiposController@index')->name('equipos');
Route::get('/equipos/create', 'EquiposController@create')->name('equipos.create');
Route::post('/equipos/store', 'EquiposController@store')->name('equipos.store');
Route::get('/equipos/edit/{id}', 'EquiposController@edit')->name('equipos.edit');
Route::put('/equipos/update/{id}', 'EquiposController@update')->name('equipos.update');
Route::get('/equipos/{id}', 'EquiposController@show')->name('equipos.show');
Route::get('/equipos/search/codigo', 'EquiposController@search')->name('equipos.search');
Route::post('/equipos/search/codigo', 'EquiposController@postSearch')->name('equipos.postSearch');
Route::delete('/equipos/delete/{id}', 'EquiposController@destroy')->name('equipos.delete');
