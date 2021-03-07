<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\EtiquetaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::group(['middleware' => 'verified'], function () {

    Route::get('', [HomeController::class, 'index'])->middleware('language');

    Route::resource('categoria', CategoriaController::class)->middleware('language');

    Route::resource('etiquetas', EtiquetaController::class)->middleware('language');

    Route::resource('posts', PostController::class)->middleware('language');

    Route::resource('users', UserController::class)->middleware('language');
});
