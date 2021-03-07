<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogControlador;

Route::get('/', [BlogControlador::class, 'home'])->middleware('language');

Route::get('/lista', [BlogControlador::class, 'lista'])->middleware('language');
Route::get('/lista/categoria/{categoria}', [BlogControlador::class, 'listaCategoria'])->middleware('language');

Route::get('/post/{post}', [BlogControlador::class, 'post'])->middleware('language');

Auth::routes();
