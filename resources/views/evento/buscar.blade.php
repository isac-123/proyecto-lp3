@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Explorar Eventos</h1>

    
    <form method="GET" action="{{ route('evento.buscar') }}">
        <input class="form-control" type="text" name="search" placeholder="Buscar por nombre, categoría o ubicación" />
        <button type="submit" class="btn btn-primary mt-2">Buscar</button>
    </form>

    <h3 class="mt-4">Eventos Encontrados</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eventos as $evento)
                    <tr>
                        <td>{{ $evento->nombre }}</td>
                        <td>{{ $evento->fecha }}</td>
                        <td>{{ $evento->categoria }}</td>
                        <td><a href="{{ route('evento.mostrar', $evento->id) }}" class="btn btn-info">Ver Detalles</a></td>
                    </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
@endsection
