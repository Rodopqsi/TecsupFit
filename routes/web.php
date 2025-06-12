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


Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'verified']);



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



Route::get('/', [DelmesController::class, 'index'])->name('products.index');
Route::prefix('products')->name('products.')->group(function () {
    Route::post('/', [DelmesController::class, 'store'])->name('store');

    Route::get('/{product}/edit', [DelmesController::class, 'edit'])->name('edit');
    Route::put('/{product}', [DelmesController::class, 'update'])->name('update');
    Route::delete('/{product}', [DelmesController::class, 'destroy'])->name('destroy');
    Route::patch('/{product}/toggle-status', [DelmesController::class, 'toggleStatus'])->name('toggle-status');
    Route::get('/category/{categoria}', [DelmesController::class, 'getByCategory'])->name('by-category');
});