<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContadorConteoProductos;
use App\Http\Controllers\DelmesController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContadorConteoProductos::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/productos', function(){
    return view('productos');
});
Route::get('/promociones', function(){
    return view('promociones');
});
Route::get('/nosotros', function(){
    return view('nosotros');
});
Route::get('/reclamos', function(){
    return view('reclamos');
});
Route::get('/comentarios', function(){
    return view('comentarios');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::resource('productos', ProductoController::class);
Route::post('productos/{producto}/toggle-delmes', [ProductoController::class, 'toggleDelMes'])->name('productos.toggle-delmes');
Route::post('productos/{producto}/comprar', [ProductoController::class, 'comprar'])->name('productos.comprar');

// Ruta para Del Mes
Route::resource('delmes', DelMesController::class);

Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

// Rutas para Marca

Route::post('/marcas', [MarcaController::class, 'store'])->name('marcas.store');
Route::put('/marcas/{marca}', [MarcaController::class, 'update'])->name('marcas.update');
Route::delete('/marcas/{marca}', [MarcaController::class, 'destroy'])->name('marcas.destroy');