<?php

use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Inicio');
});


Route::get('Servicios',[ServiciosController::class,'index'])->name('Servicios');
Route::get('Productos',[ProductosController::class,'index'])->name('Productos');
Route::get('Sobre-nosotros',[SobreController::class,'index'])->name('Sobre-nosotros');
Route::get('Registro',[RegistroController::class,'index'])->name('Registro');
