<?php

use App\Models\Productos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\SubirCVController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\ServiciosAdminController;
Route::get('Servicio',[ServiciosAdminController::class,'index'])->name('Servicio');
Route::get('Personal', [PersonalController::class, 'index'])->name('Personal');

//sOLICITUDES
Route::get('Solicitudes',[SolicitudesController::class,'index'])->name('Solicitudes');

//Notificaciones

Route::get('Notificaciones', NotificacionController::class)->name('Notificaciones');


Route::get('/', function () {
    $productos = Productos::paginate(10);;
    return view('Inicio', compact('productos'));
});

//Aceptar solicitud de un veterinario
Route::get('Aceptar/{id}',[SolicitudesController::class,'store'])->name('aceptar');

Route::get('Panel', function () {
    return view('Admin.Inicio');
})->name('Panel');

Route::middleware(['auth'])->group(function () {
    Route::get('SubirCV', [SubirCVController::class, 'index'])->name('SubirCV'); //Subir cv
});

Route::get('Servicios', [ServiciosController::class, 'index'])->name('Servicios');
Route::get('Producto', [ProductosController::class, 'index_inicio'])->name('Productos.index');
Route::get('Sobre-nosotros', [SobreController::class, 'index'])->name('Sobre-nosotros');
Route::get('Registro', [RegistroController::class, 'index'])->name('Registro');
Route::post('Registro', [RegistroController::class, 'store']);
Route::get('Login', [LoginController::class, 'index'])->name('Login');
Route::post('Login', [LoginController::class, 'store']);

Route::get('LogOut', [LoginController::class, 'logout'])->name('LogOut'); //cerrar session
//Adsmin

Route::get('ProductosAdmin', [ProductosController::class, 'index_productos'])->name('ProductosAdmin');
Route::post('Imagen', [ImagenController::class, 'store'])->name('Imagen.store');

Route::post('GuardarProductos', [ProductosController::class, 'store'])->name('GuardarProductos'); //Almacenar productos

Route::get('Eliminar/{id}', [ProductosController::class, 'delete'])->name('delete_product'); //Eliminar producto

Route::get('{id}', [ProductosController::class, 'show_busqueda'])->name('show_busqueda'); //Visualizar productos o servicios buscados
