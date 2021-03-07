@extends('adminlte::page')

@section('title', 'Un Libro Abierto')

@section('content_header')
    <h1>Lista De Categorias</h1>
@stop

@section('content')
    <div class="text-right">
        <a class="btn btn-success" href="{{ route('categoria.create') }}">Crear Categoria</a>

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
                        <th>Slug</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categorias as $categoria)

                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nombre }}</td>
                            <td>{{ $categoria->slug }}</td>
                            <td width='10px'>
                                <a class="btn btn-info"
                                    href="{{ route('categoria.show', $categoria) }}">Show</a>
    
                            </td>
                            <td width='10px'>
                                <a class="btn btn-primary"
                                    href="{{ url('admin/categoria/' . $categoria->slug . '/edit') }}">Editar</a>

                            </td>
                            <td width='10px'>
                                <form action="{{ route('categoria.destroy', $categoria) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    
                </tbody>
                {{ $categorias->links() }}
            </table>
        </div>
    </div>

@stop
