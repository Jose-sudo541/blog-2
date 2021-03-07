@extends('adminlte::page')

@section('title', 'Un Libro Abierto')

@section('content_header')
    <h1>Crear Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'posts.store', 'files'=> true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del nueva Post']) !!}

                @error('nombre')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug del nueva Post', 'readonly']) !!}

                @error('slug')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('categoria_id', 'Categorias') !!}
                {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Categoria del Post']) !!}

                @error('categoria_id')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mr-3">
                <div class="col">
                    <div class="image-warp">
                        <img id="picture" src="https://cdn.pixabay.com/photo/2021/02/21/18/48/elks-6037526_1280.jpg"
                            alt="Imagen">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Imagen Portada') !!}
                        {!! Form::file('file', ['class' => 'form-control']) !!}
                        <h4>Requisistos de la imagen</h4>
                        <p>Para que la imagen se vea bien el la pagina debeta tener:</p>
                        <p>- El tamaño de la imangen debera ser de 1600 x 545, podria ser mas grande pero siguiendo la misma
                            estetica</p>
                        <p>- El peso de la imagen no puede ser superior a 5Mb</p>
                        <p>- Escoja una imagen adecuada para el Post </p>

                        @error('file')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="form-group">
                <p class="font-weight-bold">Etiquetas</p>

                @foreach ($etiquetas as $etiqueta)

                    <label class="mr-3">
                        {!! Form::checkbox('etiquetas[]', $etiqueta->id, null) !!}
                        {{ $etiqueta->nombre }}
                    </label>

                @endforeach

                @error('etiquetas')
                    <br>
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <p class="font-weight-bold">Estado</p>

                <label class="mr-3">
                    {!! Form::radio('estado', 1, true) !!}
                    Borrador
                </label>
                <label class="mr-3">
                    {!! Form::radio('estado', 2) !!}
                    Publicado
                </label>

                @error('estado')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('cuerpo', 'Cuerpo del Post') !!}
                {!! Form::textarea('cuerpo', null, ['class' => 'form-control']) !!}

                @error('cuerpo')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {!! Form::submit('Crear Post', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
@section('css')
    <style>
        .image-warp {
            position: relative;
            padding-bottom: 56.25%
        }

        .image-warp img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

    </style>
@stop
@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
            .create(document.querySelector('#cuerpo'))
            .catch(error => {
                console.error(error);
            });

        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }

    </script>
@stop
