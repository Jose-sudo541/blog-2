@extends('adminlte::page')

@section('title', 'Un Libro Abierto')

@section('content_header')
    <h1>Lista Etiquetas</h1>
@stop

@section('content')
<div class="text-right">
    <a class="btn btn-success" href="{{ route('etiquetas.create') }}">Crear Etiqueta</a>

</div>
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
    <div class="card-body">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($etiquetas as $etiqueta)

                    <tr>
                        <td>{{ $etiqueta->id }}</td>
                        <td>{{ $etiqueta->nombre }}</td>
                        <td width='10px'>
                            <a class="btn btn-info"
                                href="{{ route('etiquetas.show', $etiqueta) }}">Show</a>

                        </td>
                        <td width='10px'>
                            <a class="btn btn-primary"
                                href="{{ url('admin/etiquetas/' . $etiqueta->id . '/edit') }}">Editar</a>

                        </td>
                        <td width='10px'>
                            <form action="{{ route('etiquetas.destroy', $etiqueta) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
                
            </tbody>
            {{ $etiquetas->links() }}
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