<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogControlador;
use App\Mail\InfoSubMaileable;
use Illuminate\Support\Facades\Mail;



Route::get('/', [BlogControlador::class, 'home'])->middleware('language');

Route::get('/lista', [BlogControlador::class, 'lista'])->middleware('language');
Route::get('/lista/categoria/{categoria}', [BlogControlador::class, 'listaCategoria'])->middleware('language');

Route::get('/post/{post}', [BlogControlador::class, 'post'])->middleware('language');

Route::get('/subcripcion', function () {
    $correo = new InfoSubMaileable;

    Mail::to('zellsusj229@gmail.com')->send($correo);
    return "Mensaje Enviado";
});

Auth::routes(['verify' => 'true']);
