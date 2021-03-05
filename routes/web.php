<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogControlador;

Route::get('/', [BlogControlador::class, 'home']);

Route::get('/lista', [BlogControlador::class, 'lista']);
Route::get('/lista/categoria/{categoria}', [BlogControlador::class, 'listaCategoria']);

Route::get('/post/{post}', [BlogControlador::class, 'post']);

// Route::get('/register', function () {
//     return view('auth.register');
// });

Auth::routes();
