<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TarjetasController;
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

Route::get('/', function () {
    return view('dashboard');
})->name('inicio');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Tarjetas
Route::get('/tarjetas', [TarjetasController::class,'index'])->name('ver.tarjetas');
Route::post('/registrar-tarjeta', [TarjetasController::class,'store'])->name('registrar.tarjeta');

//Clientes
Route::get('/clientes', [ClientesController::class, 'index'])->name('ver.clientes');

//Productos
Route::get('/productos', [ProductosController::class, 'index'])->name('ver.productos');
Route::get('/crear-producto', [ProductosController::class, 'create'])->name('registrar.productos');
Route::post('/guardar-producto', [ProductosController::class, 'store'])->name('guardar.productos');
require __DIR__.'/auth.php';
