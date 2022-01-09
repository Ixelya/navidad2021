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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/', PeliculaController::class);
Route::resource('/usuarios', UserController::class);
Route::resource('/peliculas', PeliculaController::class);
Route::resource('/comentario', ComentarioController::class);

Route::get('/perfilpelicula', function () {
    return view('perfiles.perfilpelicula');
});

Route::get('/perfilusuario', function () {
    return view('perfiles.perfilusuario');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
