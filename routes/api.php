<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Solicitudes
Route::resource('solicitudes', 'api\SolicitudesController');

//Mantenimientos
Route::resource('mantenimientos', 'api\MantenimientosController');

//Clientes
Route::resource('clientes', 'api\ClientesController');

//Tecnicos
Route::resource('tecnicos', 'api\TecnicosController');

//Equipos
Route::resource('equipos', 'api\EquiposController');
