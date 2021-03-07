@extends('adminlte::page')

@section('title', 'Un Libro Abierto')

@section('content_header')
    <h1>Lista Posts</h1>
@stop

@section('content')

    <div class="text-right">
        <a class="btn btn-success" href="{{ route('posts.create') }}">Crear Post</a>

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
        <div class="card-body text-center">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Autor</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)

                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->nombre }}</td>
                            <td>{{ $post->users->name }}</td>
                            <td>{{ $post->categorias->nombre }}</td>
                            <td>
                                @if ($post->estado == 1)
                                    Borrador
                                @else
                                    Publicado
                                @endif
                            </td>
                        </tr>
                        <tr colspan="5">
                            <td></td>
                            <td></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('posts.show', $post) }}">Show</a>

                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm"
                                    href="{{ url('admin/posts/' . $post->id . '/edit') }}">Editar</a>

                            </td>
                            <td>
                                <form action="{{ route('posts.destroy', $post) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
                {{ $posts->links() }}
            </table>
        </div>
    </div>
@stop
