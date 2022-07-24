<?php

use Illuminate\Support\Facades\Route;

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

//ruta index
Route::get('/', function () {return view('welcome');})->name('main_index');

//ruta para /integrantes
Route::get('/integrantes', function() {return view('integrantes.index');});

//rutas para /gestionador
Route::get('/gestionador','App\Http\Controllers\CtrlGestionador@index')->name("gestionador_index");
Route::get('/gestionador/agregar','App\Http\Controllers\CtrlGestionador@agregar')->name("gestionador_agregar");
Route::get('/gestionador/eliminar','App\Http\Controllers\CtrlGestionador@eliminar')->name("gestionador_eliminar");

//ruta para gestionar el envío de datos para ser guardados y almacenados
Route::post('/enviar','App\Http\Controllers\CtrlGestionador@enviar')->name("gestionador_enviar");