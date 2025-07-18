@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Notificaciones</h1>
    <p>Envía recordatorios a los participantes de los eventos.</p>

   
    <form method="POST" action="{{ route('notificacion.enviar') }}">
        @csrf
        <textarea class="form-control" name="mensaje" placeholder="Escribe tu mensaje de notificación"></textarea><br>
        <input class="btn btn-primary" type="submit" value="Enviar Notificación"/>
    </form>

    
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection

