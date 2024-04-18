<?php

use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes ________--------
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pacientes', 'App\Http\Controllers\PacienteController@index');
Route::post('/pacientes', 'App\Http\Controllers\PacienteController@store');
Route::put('/pacientes/{id}', 'App\Http\Controllers\PacienteController@update');
Route::delete('/pacientes/{id}', 'App\Http\Controllers\PacienteController@destroy');


Route::get('/historias', 'App\Http\Controllers\HistoriaController@index');
Route::post('/historias', 'App\Http\Controllers\HistoriaController@store');
Route::put('/historias/{id}', 'App\Http\Controllers\HistoriaController@update');
Route::delete('/historias/{id}', 'App\Http\Controllers\HistoriaController@destroy');

Route::get('/rols', 'App\Http\Controllers\RoleController@index');
Route::post('/rols', 'App\Http\Controllers\RoleController@store');
Route::put('/rols/{id}', 'App\Http\Controllers\RoleController@update');
Route::delete('/rols/{id}','App\Http\Controllers\RoleController@destroy');

Route::get('/citas', 'App\Http\Controllers\CitaController@index');
Route::post('/citas', 'App\Http\Controllers\CitaController@store');
Route::put('/citas/{id}', 'App\Http\Controllers\CitaController@update');
Route::delete('/citas/{id}', 'App\Http\Controllers\CitaController@destroy');

Route::get('/usuarios', 'App\Http\Controllers\UsuariosController@index');
Route::post('/usuarios', 'App\Http\Controllers\UsuariosController@store');
Route::get('/usuarios/{id}', 'App\Http\Controllers\UsuariosController@update');
Route::delete('/usuarios/{id}', 'App\Http\Controllers\UsuariosController@destroy');

Route::get('/events', [EventController::class, 'index']);
Route::apiResource('events', EventController::class);