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


Route::get('/evento/inscripcion/{id}', [EventoController::class, 'inscripcion'])->name('evento.inscripcion');
Route::get('/evento/notificaciones', [EventoController::class, 'notificaciones'])->name('evento.notificaicones');
Route::get('/evento/recursos', [EventoController::class, 'recursos'])->name('evento.recursos');
Route::get('/evento/buscar', [EventoController::class, 'buscar'])->name('evento.buscar');

Route::get('/evento/crear', [EventoController::class, 'crear'])->name('evento.crear');
Route::post('/evento/guardar', [EventoController::class, 'guardar'])->name('evento.guardar');
    
   
Route::get('/evento/mostrar', [EventoController::class, 'mostrar'])->name('evento.mostrar');
    
    
Route::get('/evento/modificar/{id}', [EventoController::class, 'editar'])->name('evento.modificar');
Route::post('/evento/modificar/{id}', [EventoController::class, 'modificarGuardar'])->name('evento.modificarGuardar');
Route::delete('/evento/eliminar/{id}', [EventoController::class, 'eliminar'])->name('evento.eliminar');