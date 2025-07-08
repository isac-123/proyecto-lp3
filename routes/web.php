<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotificacionController;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/usuario/registro', [UserController::class, 'registro'])->name('usuario.registrao');
Route::get('/usuario/perfil', [UserController::class, 'perfil'])->name('usuario.perfil');
Route::get('/usuario/gestion', [UserController::class, 'gestion'])->name('usuario.gestion');


Route::get('/evento/notificaciones', [EventoController::class, 'notificaciones'])->name('evento.notificaicones');
Route::get('/evento/recursos', [EventoController::class, 'recursos'])->name('evento.recursos');
Route::get('/evento/buscar', [EventoController::class, 'buscar'])->name('evento.buscar');

// rutas de evento
    //mostrar
Route::get('/evento/mostrar', [EventoController::class, 'mostrar'])->name('evento.mostrar');
    
    // crear
Route::get('/evento/crear', [EventoController::class, 'crear'])->name('evento.crear');
Route::post('/evento/guardar', [EventoController::class, 'guardar'])->name('evento.guardar');
    
    // modificar
Route::get('/evento/modificar/{id}', [EventoController::class, 'editar'])->name('evento.modificar');
Route::post('/evento/modificar/{id}', [EventoController::class, 'modificarGuardar'])->name('evento.modificarGuardar');
    
    // eliminar
Route::delete('/evento/eliminar/{id}', [EventoController::class, 'eliminar'])->name('evento.eliminar');
    //buscar
Route::get('/evento/buscar', [EventoController::class, 'buscar'])->name('evento.buscar');
    // Ruta para enviar la notificación
Route::get('/notificacion/enviar', [NotificacionController::class, 'mostrarFormulario'])->name('notificacion.enviar');
Route::post('/notificacion/enviar', [NotificacionController::class, 'enviar'])->name('notificacion.enviar');


// inscripcion
Route::get('/evento/inscripcion/{id}', [EventoController::class, 'inscripcion'])->name('evento.inscripcion');
Route::post('/evento/inscribir/{id}', [EventoController::class, 'inscribir'])->name('evento.inscribir');

// recurso
Route::get('/evento/{eventoId}/recurso/crear', [RecursoController::class, 'crear'])->name('recurso.crear');
Route::post('/evento/{eventoId}/recurso', [RecursoController::class, 'store'])->name('recurso.store');
    
    
Route::get('/evento/{eventoId}/recurso/create', [RecursoController::class, 'create'])->name('recurso.create');

    // Ruta para almacenar un nuevo recurso
Route::post('/evento/{eventoId}/recurso', [RecursoController::class, 'store'])->name('recurso.store');

    // Ruta para reservar un recurso
Route::post('/recurso/{id}/reservar', [RecursoController::class, 'reservar'])->name('recurso.reservar');

    // Ruta para liberar un recurso
Route::post('/recurso/{id}/liberar', [RecursoController::class, 'liberar'])->name('recurso.liberar');