<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/inventario/create', [ProductoController::class, 'create'])->name('inventario.create');
Route::post('/inventario', [ProductoController::class, 'store'])->name('inventario.store');



Route::get('/', function () {
    return view('welcome');
});
