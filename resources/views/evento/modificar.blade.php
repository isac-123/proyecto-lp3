@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modificar Evento</h1>
    <form method="POST" action="{{ route('evento.modificarGuardar', $evento->id) }}">
        @csrf
        @method('POST')
        <input class="form-control" type="text" name="nombre" value="{{ $evento->nombre }}" required/><br>
        <input class="form-control" type="date" name="fecha" value="{{ $evento->fecha }}" required/><br>
        <select name="categoria" class="form-control">
            <option value="cultural" {{ $evento->categoria == 'cultural' ? 'selected' : '' }}>Cultural</option>
            <option value="deportivo" {{ $evento->categoria == 'deportivo' ? 'selected' : '' }}>Deportivo</option>
            <option value="social" {{ $evento->categoria == 'social' ? 'selected' : '' }}>Social</option>
        </select><br>
        <textarea class="form-control" name="descripcion">{{ $evento->descripcion }}</textarea><br>
        <input class="btn btn-primary" type="submit" value="Actualizar"/>
    </form>
</div>
@endsection
