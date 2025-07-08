@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Recurso para el Evento: {{ $evento->nombre }}</h1>

    <form method="POST" action="{{ route('recurso.store', $evento->id) }}">
        @csrf

        <input class="form-control" type="text" name="nombre" placeholder="Nombre del recurso" required><br>
        <input class="form-control" type="text" name="tipo" placeholder="Tipo del recurso" required><br>
        <textarea class="form-control" name="descripcion" placeholder="Descripción del recurso" required></textarea><br>

        <button type="submit" class="btn btn-primary">Guardar Recurso</button>
    </form>
</div>
@endsection
