@extends('adminlte::page')

@section('title', 'Un Libro Abierto')

@section('content_header')
    <h1>Asignar Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h5>Nombre</h5>
            <p class="form-control">{{ $user->name }}</p>
            <h5>Lista de Roles</h5>
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
            @foreach ($roles as $rol)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $rol->id, null, ['class' => 'mr-1']) !!}
                        {{ $rol->name }}
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary mr-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
