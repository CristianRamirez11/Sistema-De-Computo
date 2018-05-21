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
Route::get('/dashboard','SiteController@dashboard')->name('dashboard');
//login
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@postLogin')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');
//Técnicos
/*Route::get('/tecnicos', 'TecnicosController@index')->name('tecnicos');
Route::get('/tecnicos/create', 'TecnicosController@create')->name('tecnicos.create');
Route::post('/tecnicos/store', 'TecnicosController@store')->name('tecnicos.store');
Route::get('/tecnicos/edit/{id}', 'TecnicosController@edit')->name('tecnicos.edit');
Route::put('/tecnicos/update/{id}', 'TecnicosController@update')->name('tecnicos.update');
Route::get('/tecnicos/{id}', 'TecnicosController@show')->name('tecnicos.show');*/
Route::resource('tecnicos', 'TecnicosController');
Route::get('/tecnicos/search/codigo', 'TecnicosController@search')->name('tecnicos.search');
Route::post('/tecnicos/search/codigo', 'TecnicosController@postSearch')->name('tecnicos.postSearch');
//Route::delete('/tecnicos/delete/{id}', 'TecnicosController@destroy')->name('tecnicos.delete');
//Clientes
/*Route::get('/clientes', 'ClientesController@index')->name('clientes');
Route::get('/clientes/create', 'ClientesController@create')->name('clientes.create');
Route::post('/clientes/store', 'ClientesController@store')->name('clientes.store');
Route::get('/clientes/edit/{id}', 'ClientesController@edit')->name('clientes.edit');
Route::put('/clientes/update/{id}', 'ClientesController@update')->name('clientes.update');
Route::get('/clientes/{id}', 'ClientesController@show')->name('clientes.show');*/
Route::resource('clientes', 'ClientesController');
Route::get('/clientes/search/codigo', 'ClientesController@search')->name('clientes.search');
Route::post('/clientes/search/codigo', 'ClientesController@postSearch')->name('clientes.postSearch');
//Route::delete('/clientes/delete/{id}', 'ClientesController@destroy')->name('clientes.delete');
//Equipos
/*Route::get('/equipos', 'EquiposController@index')->name('equipos');
Route::get('/equipos/create', 'EquiposController@create')->name('equipos.create');
Route::post('/equipos', 'EquiposController@store')->name('equipos.store');
Route::get('/equipos/edit/{id}', 'EquiposController@edit')->name('equipos.edit');
Route::put('/equipos/update/{id}', 'EquiposController@update')->name('equipos.update');
Route::get('/equipos/{id}', 'EquiposController@show')->name('equipos.show');*/
Route::resource('equipos', 'EquiposController');
Route::get('/equipos/mis/{id}','EquiposController@listMine')->name('equipos.listMine');
Route::get('/equipos/search/codigo', 'EquiposController@search')->name('equipos.search');
Route::post('/equipos/search/codigo', 'EquiposController@postSearch')->name('equipos.postSearch');
//Route::delete('/equipos/delete/{id}', 'EquiposController@destroy')->name('equipos.delete');
//Mantenimientos
Route::resource('mantenimientos','MantenimientoController');
Route::get('mantenimientos/mis/{id}', 'MantenimientoController@listMine')->name('mantenimientos.listMine');

//Solicitudes
Route::resource('solicitudes','SolicitudesController');
Route::get('solicitudes/mis/{id}', 'SolicitudesController@listMine')->name('solicitudes.listMine');

//Admin
Route::resource('admin','AdministradoresController');
/*
Route::get('admin/usuarios', 'AdministradoresController@listUsers')->name('admin.listUsers');
Route::get('admin/usuarios/{id}', 'AdministradoresController@showUser')->name('admin.showUser');
Route::get('admin/usuarios/{id}/edit', 'AdministradoresController@editUser')->name('admin.editUser');
Route::get('admin/usuarios/create', 'AdministradoresController@create')->name('admin.create');
Route::post('admin/usuarios', 'AdministradoresController@storeUser')->name('admin.storeUser');
Route::put('admin/usuarios/{id}', 'AdministradoresController@updateUser')->name('admin.updateUser');
Route::delete('admin/usuarios/{id}', 'AdministradoresController@destroyUser')->name('admin.destroyUser');
*/
