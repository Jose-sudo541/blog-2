@extends('adminlte::page')

@section('title', 'Un Libro Abierto')

@section('content_header')
    <h1>Detalles</h1>
@stop

@section('content')
<div class="text-right">
    <a class="btn btn-success" href="{{ route('etiquetas.index') }}">Volver</a>

</div>
<br>
<div class="card">
    <div class="card-body">
        <h3>Etiqueta</h3>
        <br>
        <p> Id: {{$etiqueta->id}}</p>
        <p>Nombre: {{$etiqueta->nombre}}</p>
        <p>Slug: {{$etiqueta->slug}}</p>
    </div>
</div>
@stop