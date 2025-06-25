@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Recursos para el Evento: {{ $evento->nombre }}</h1>

    <form method="POST" action="{{ route('evento.asignarRecursos', $evento->id) }}">
        @csrf
        <label for="recurso">Seleccionar Recurso</label>
        <select name="recurso_id" class="form-control">
            @foreach ($recursos as $recurso)
                <option value="{{ $recurso->id }}">{{ $recurso->nombre }}</option>
            @endforeach
        </select><br>
        <input class="btn btn-primary" type="submit" value="Asignar Recurso"/>
    </form>
</div>
@endsection
