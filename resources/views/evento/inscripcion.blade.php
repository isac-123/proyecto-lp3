@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inscripción al Evento: {{ $evento->nombre }}</h1>
    <p>{{ $evento->descripcion }}</p>

    <!-- Formulario para inscribirse al evento -->
    <form method="POST" action="{{ route('evento.inscribir', $evento->id) }}">
        @csrf

        <input class="form-control" type="text" name="nombre" placeholder="Tu Nombre" required/><br>
        <input class="form-control" type="email" name="email" placeholder="Tu Correo Electrónico" required/><br>

        <input class="btn btn-primary" type="submit" value="Inscribirse"/>
    </form>
</div>
@endsection


