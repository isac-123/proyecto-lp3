@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Eventos Registrados</h1>

    @if ($eventos->isEmpty())
        <p>No hay eventos registrados.</p>
    @else
        <table class="table table-bordered mt-4">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                <tr>
                    <td>{{ $evento->id }}</td>
                    <td>{{ $evento->nombre }}</td>
                    <td>{{ $evento->fecha }}</td>
                    <td>{{ $evento->categoria }}</td>
                    <td>
                        
                        <a href="{{ route('evento.modificar', $evento->id) }}" class="btn btn-warning">Modificar</a>

                        
                        <form action="{{ route('evento.eliminar', $evento->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE') 
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection


