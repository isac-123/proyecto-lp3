<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/usuario/registro', [UserController::class, 'registro'])->name('usuario.registrao');
Route::get('/usuario/perfil', [UserController::class, 'perfil'])->name('usuario.perfil');
Route::get('/usuario/gestion', [UserController::class, 'gestion'])->name('usuario.gestion');

Route::get('/evento/crear', [EventoController::class, 'crear'])->name('evento.crear');
Route::get('/evento/modificar/{id}', [EventoController::class, 'modificar'])->name('evento.modificar');
Route::get('/evento/mostrar', [EventoController::class, 'mostrar'])->name('evento.mostrar');
Route::get('/evento/inscripcion/{id}', [EventoController::class, 'inscripcion'])->name('evento.inscripcion');
Route::get('/evento/notificaciones', [EventoController::class, 'notificaciones'])->name('evento.notificaicones');
Route::get('/evento/recursos', [EventoController::class, 'recursos'])->name('evento.recursos');
Route::get('/evento/buscar', [EventoController::class, 'buscar'])->name('evento.buscar');



