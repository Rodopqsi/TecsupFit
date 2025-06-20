<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DelmesController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PagoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/promociones', function(){
    return view('promociones');
});
Route::get('/politicas_privacidad', function(){
    return view('politicas_de_privacidad');
});
Route::get('/politicas_de_devoluciones', function(){
    return view('politicas_de_devoluciones');
});
Route::get('/terminos_y_condiciones', function(){
    return view('terminos_y_condiciones');
});
Route::get('/politicas_de_envio', function(){
    return view('politicas_de_envio');
});
Route::get('/products', function(){
    return view('products');
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

Route::resource('productos', ProductoController::class);
Route::post('admin/{producto}/toggle-delmes', [ProductoController::class, 'toggleDelMes'])->name('productos.toggle-delmes');
Route::post('admin/{producto}/comprar', [ProductoController::class, 'comprar'])->name('productos.comprar');

Route::resource('delmes', DelmesController::class);

Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

// Rutas para Marcas
Route::post('/marcas', [MarcaController::class, 'store'])->name('marcas.store');
Route::put('/marcas/{marca}', [MarcaController::class, 'update'])->name('marcas.update');
Route::delete('/marcas/{marca}', [MarcaController::class, 'destroy'])->name('marcas.destroy');
// Carrito de compras
Route::get('/carrito', [CarritoController::class, 'mostrar'])->name('carrito.mostrar');
Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::post('/carrito/eliminar', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::post('/carrito/actualizar', [CarritoController::class, 'actualizar'])->name('carrito.actualizar');

// Checkout y pago
Route::get('/checkout', [PagoController::class, 'checkout'])->name('checkout');
Route::post('/procesar-pago', [PagoController::class, 'procesarPago'])->name('procesar.pago');
Route::get('/gracias', function () {
    return view('gracias');
})->name('gracias');