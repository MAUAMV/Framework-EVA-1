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
Route::get('/gestionador/buscar','App\Http\Controllers\CtrlGestionador@buscar')->name("gestionador_buscar");
Route::get('/gestionador/agregarSucursal','App\Http\Controllers\CtrlGestionador@agregarSucursal')->name("gestionador_agregarSucursal");
Route::get('/gestionador/agregarExistencia','App\Http\Controllers\CtrlGestionador@agregarExistencia')->name("gestionador_agregarExistencia");
//Route::get('/gestionador/asignarProducto','App\Http\Controllers\CtrlGestionador@asignarProducto')->name("gestionador_asignarProducto");
Route::get('/gestionador/asignarSucursal','App\Http\Controllers\CtrlGestionador@asignarSucursal')->name("gestionador_asignarSucursal");
Route::get('/gestionador/listado','App\Http\Controllers\CtrlGestionador@listado')->name("gestionador_listado");
Route::get('/gestionador/eliminar','App\Http\Controllers\CtrlGestionador@eliminar')->name("gestionador_eliminar");
Route::get('/update/{id}','App\Http\Controllers\CtrlGestionador@update');
Route::get('/deleteProducto/{id}','App\Http\Controllers\CtrlGestionador@deleteProducto');

//ruta para gestionar el envío de datos para ser guardados y almacenados
Route::post('/enviar','App\Http\Controllers\CtrlGestionador@enviar')->name("gestionador_enviar");
Route::post('/enviarExistencia','App\Http\Controllers\CtrlGestionador@enviarExistencia')->name("gestionador_enviarExistencia");
Route::post('/buscarProducto','App\Http\Controllers\CtrlGestionador@buscarProducto')->name("gestionador_buscarProducto");
Route::post('/updateProducto','App\Http\Controllers\CtrlGestionador@updateProducto')->name("gestionador_updateProducto");




//ruta para remover y/o eliminar datos
Route::post('/remover','App\Http\Controllers\CtrlGestionador@remover')->name("gestionador_remover");