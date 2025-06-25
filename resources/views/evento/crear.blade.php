@extends('layouts.app')

@section('content')
<div class="container">
    <h1>crear evento comunitario</h1>

    <form class="mt-4" method="post" action="/evento/guardar">
        @csrf

        <input 
            class="form-control" 
            type="text" 
            name="nombre" 
            placeholder="nombre del evento" 
            value="{{ old('nombre') }}" 
            @error('nombre') style="border-color: red;" @enderror
        /><br>
        @error('nombre') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input 
            class="form-control" 
            type="date" 
            name="fecha" 
            value="{{ old('fecha') }}" 
        /><br>
        @error('fecha') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <select name="categoria" class="form-control">
            <option value="cultural">cultural</option>
            <option value="deportivo">deportivo</option>
            <option value="social">social</option>
        </select><br>

        <textarea 
            class="form-control" 
            name="descripcion" 
            placeholder="descripción del evento"
        >{{ old('descripcion') }}</textarea><br>
        @error('descripcion') 
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input class="btn btn-primary" type="submit" value="guardar" />
    </form>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection
