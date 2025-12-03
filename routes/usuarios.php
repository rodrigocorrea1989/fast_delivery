<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/usuarios/users', [UserController::class, 'users'])
    ->middleware('auth')
    ->name('users');

Route::get('/usuarios/profile', [UserController::class, 'profile'])
    ->middleware('auth')
    ->name('profile');


Route::get('/usuarios/new', [UserController::class, 'new'])
    ->middleware('auth')
    ->name('new');

Route::post('/users/save_new', [UserController::class, 'save_new'])->name('save_new');

Route::delete('/usuarios/{id}', [UserController::class, 'delete_user'])
    ->middleware('auth')
    ->name('delete_user');


Route::post('/usuarios/edit_user/{id}', [UserController::class, 'edit_user'])
    ->middleware('auth')
    ->name('edit_user');


Route::put('/usuarios/{id}', [UserController::class, 'edit'])->name('edit');
