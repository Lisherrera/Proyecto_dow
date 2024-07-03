<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArriendosController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\TiposController;



// Route::get('/', function () {
//     return view('welcome');
// });

//Home
Route::get('/',[HomeController::class,'index'])->name('home.index');

//Arriendos
Route::resource('/arriendo',ArriendosController::class);

//Perfiles
Route::resource('/perfiles',PerfilesController::class);

//Usuarios
Route::resource('/usuarios',UsuariosController::class);

//Vehiculos
Route::resource('/vehiculos',VehiculosController::class);

//Tipos
Route::resource('/tipos',TiposController::class);

//Arriendos_vehiculos
Route::resource('/arriendos_vehiculos',ArriendosVehiculosController::class);