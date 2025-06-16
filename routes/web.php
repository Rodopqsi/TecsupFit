<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContadorConteoProductos;
use App\Http\Controllers\DelmesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContadorConteoProductos::class, 'index']);
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




Route::get('/productos',function(){
    return view('productos');
});
Route::get('/promociones',function(){
    return view('promociones');
});
Route::get('/nosotros',function(){
    return view('nosotros');
});
Route::get('/reclamos',function(){
    return view('reclamos');
});
Route::get('/comentarios',function(){
    return view('comentarios');
});
Route::get('/script.js',function(){
    return view('comentarios');
});

Route::get('/admin', [DelmesController::class, 'admin'])->middleware(['auth', 'verified'])->name('admin');
Route::resource('productos', ProductoController::class);
Route::post('productos/{producto}/toggle-delmes', [ProductoController::class, 'toggleDelMes'])->name('productos.toggle-delmes');
Route::post('productos/{producto}/comprar', [ProductoController::class, 'comprar'])->name('productos.comprar');
Route::get('delmes', [DelMesController::class, 'index'])->name('delmes.index');