<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\vehiculosController;
use App\Http\Controllers\reportesController;

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

//USUARIOS
Route::get('usuarios', [usuariosController::class, 'index'])->name('usuarios.index');
Route::get('usuarios/create', [usuariosController::class, 'create'])->name('usuarios.create');
Route::post('usuarios', [usuariosController::class, 'store'])->name('usuarios.store');
Route::get('usuarios/edit/{id}', [usuariosController::class, 'edit'])->name('usuarios.edit');
Route::put('usuarios/{id}', [usuariosController::class, 'update'])->name('usuarios.update');
Route::get('usuarios/show/{id}', [usuariosController::class, 'show'])->name('usuarios.show');
Route::delete('usuarios/{id}', [usuariosController::class, 'delete'])->name('usuarios.delete');


//VEHICULOS
Route::get('vehiculos', [vehiculosController::class, 'index'])->name('vehiculos.index');
Route::get('vehiculos/create', [vehiculosController::class, 'create'])->name('vehiculos.create');
Route::post('vehiculos', [vehiculosController::class, 'store'])->name('vehiculos.store');
Route::get('vehiculos/edit/{id}', [vehiculosController::class, 'edit'])->name('vehiculos.edit');
Route::put('vehiculos/{id}', [vehiculosController::class, 'update'])->name('vehiculos.update');
Route::get('vehiculos/show/{id}', [vehiculosController::class, 'show'])->name('vehiculos.show');
Route::delete('vehiculos/{id}', [vehiculosController::class, 'delete'])->name('vehiculos.delete');

//REPORTE
Route::get('repote',[reportesController::class,'reporte'])->name('reporte.index');

