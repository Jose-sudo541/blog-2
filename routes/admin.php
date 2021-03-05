<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index']);

// Route::get('categorias', [CategoriaController::class, 'index']);
// Route::get('categorias', [CategoriaController::class, 'index']);
// Route::get('categorias', [CategoriaController::class, 'index']);
// Route::get('categorias', [CategoriaController::class, 'index']);
// Route::get('categorias', [CategoriaController::class, 'index']);
// Route::get('categorias', [CategoriaController::class, 'index']);
// Route::get('categorias', [CategoriaController::class, 'index']);

Route::resource('categoria', CategoriaController::class);
