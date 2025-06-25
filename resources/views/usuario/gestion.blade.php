@extends('layouts.general')

@section('titulo')
    Gestión de Usuarios
@endsection

@section('cuerpo')
<h1>Usuarios Registrados</h1>
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->role }}</td>
            <td>
                <a href="{{ route('usuario.editar', $usuario->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('usuario.eliminar', $usuario->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
