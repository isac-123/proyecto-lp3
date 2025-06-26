@extends('layouts.general')

@section('titulo')
    Editar Usuario
@endsection

@section('cuerpo')
<h1>Editar Usuario</h1>

<form method="POST" action="{{ route('usuario.actualizar', $usuario->id) }}">
    @csrf
    @method('PUT') 

    <input class="form-control" type="text" name="nombre" value="{{ $usuario->name }}" required/><br>
    <input class="form-control" type="email" name="email" value="{{ $usuario->email }}" required/><br>
    <input class="form-control" type="password" name="password" placeholder="Nueva Contraseña"/><br>
    <input class="form-control" type="password" name="password_confirmation" placeholder="Confirmar Contraseña"/><br>

    <select name="role" class="form-control">
        <option value="ciudadano" {{ $usuario->role == 'ciudadano' ? 'selected' : '' }}>Ciudadano</option>
        <option value="organizador" {{ $usuario->role == 'organizador' ? 'selected' : '' }}>Organizador</option>
        <option value="administrador" {{ $usuario->role == 'administrador' ? 'selected' : '' }}>Administrador</option>
    </select><br>

    <input class="btn btn-primary" type="submit" value="Actualizar"/>
</form>
@endsection
