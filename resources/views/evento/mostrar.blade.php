@extends('layouts.app')

@section('content')
<div class="container">
    <h1>eventos registrados</h1>

    <table class="table table-bordered mt-4">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>nombre</th>
                <th>fecha</th>
                <th>categoría</th>
                <th>acciones</th>
            </tr>
        </thead>
    </table>
</div>
@endsection
