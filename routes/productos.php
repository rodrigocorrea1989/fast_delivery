<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;


Route::get('/productos', [ProductosController::class, 'productos'])
    ->middleware('auth')
    ->name('productos');
