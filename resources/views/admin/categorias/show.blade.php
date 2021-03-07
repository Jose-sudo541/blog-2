@extends('adminlte::page')

@section('title', 'Un Libro Abierto')

@section('content_header')
    <h1>Detalles</h1>
@stop

@section('content')
<div class="text-right">
    <a class="btn btn-success" href="{{ route('categoria.index') }}">Volver</a>

</div>
<br>
<div class="card">
    <div class="card-body">
        <h3>Categoria</h3>
        <br>
        <p> Id: {{$categorium->id}}</p>
        <p>Nombre: {{$categorium->nombre}}</p>
        <p>Slug: {{$categorium->slug}}</p>
    </div>
</div>
@stop