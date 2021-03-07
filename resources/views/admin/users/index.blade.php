@extends('adminlte::page')

@section('title', 'Un Libro Abierto')

@section('content_header')
    <h1>Lista Usuarios</h1>
@stop

@section('content')
<br>
@if (Session::has('info-update'))
    <div class="alert alert-success">
        <strong>{{ Session::get('info-update') }}</strong>
    </div>
@endif

@if (Session::has('info-create'))
    <div class="alert alert-success">
        <strong>{{ Session::get('info-create') }}</strong>
    </div>
@endif

@if (Session::has('info-drop'))
    <div class="alert alert-danger">
        <strong>{{ Session::get('info-drop') }}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body text-center">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)

                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td wight='10px'>
                            <a class="btn btn-primary btn-sm"
                                href="{{ url('admin/users/' . $user->id . '/edit') }}">Editar</a>

                        </td>
                    </tr>

                @endforeach

            </tbody>
            {{ $users->links() }}
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop