@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Perfil de Usuario</h1>
    <form method="POST" action="{{ route('usuario.update', $user->id) }}">
        @csrf
        @method('PUT')

        <input class="form-control" type="text" name="nombre" value="{{ $user->nombre }}" required/><br>
        <input class="form-control" type="email" name="email" value="{{ $user->email }}" required/><br>
        <input class="form-control" type="password" name="password" placeholder="Nueva Contraseña"/><br>
        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirmar Contraseña"/><br>

        <input class="btn btn-primary" type="submit" value="Actualizar"/>
    </form>
</div>
#aaaa
@endsection

