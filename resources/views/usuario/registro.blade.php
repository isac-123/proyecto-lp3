@extends('layouts.general')

@section('titulo')
    Registro de Usuario
@endsection

@section('cuerpo')
<h1>Registro de Usuario</h1>
<form method="POST" action="{{ route('usuario.registrar') }}">
    @csrf
    <input class="form-control" type="text" name="nombre" placeholder="Nombre" required/><br>
    <input class="form-control" type="email" name="email" placeholder="Correo Electrónico" required/><br>
    <input class="form-control" type="password" name="password" placeholder="Contraseña" required/><br>
    <select name="role" class="form-control" required>
        <option value="ciudadano">Ciudadano</option>
        <option value="organizador">Organizador</option>
        <option value="administrador">Administrador</option>
    </select><br>
    <input class="btn btn-primary" type="submit" value="Registrar"/>
</form>
@endsection
