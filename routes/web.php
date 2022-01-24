<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\ComentarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/registro', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});

require __DIR__.'/auth.php';

Route::resource('/', PeliculaController::class);
Route::resource('/usuarios', UserController::class);
Route::resource('/peliculas', PeliculaController::class);
Route::resource('/comentarios', ComentarioController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/comentarios/movie/{idmovie}',  [App\Http\Controllers\ComentarioController::class, 'getComentarios']);

Route::get('/pdf',  [App\Http\Controllers\PeliculaController::class, 'pdf']);