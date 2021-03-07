@extends('layouts.master')

@section('content')

    <section class="py-5">

        <div class="container text-center">
            {{-- Cambiar categoria con la BBDD --}}
            <p class="h6 mb-0 text-uppercase text-primary">{{ $post->categorias->nombre }}</p>

            {{-- Cambiar datos con la BBDD --}}
            <h1>{{ $post->nombre }}</h1>
            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aliquid</p>

            {{-- Cambiar datos con la BBDD --}}
            <ul class="list-inline small text-uppercase mb-0">
                <li class="list-inline-item align-middle">Publicado</li>
                <li class="list-inline-item mr-0 text-muted align-middle">By </li>
                <li class="list-inline-item align-middle mr-0"><a class="font-weight-bold reset-anchor"
                        href="#">{{ $post->users->name }}</a></li>
            </ul>

        </div>

        {{-- Cambiar imagen por BBDD --}}
        <img class="w-100 py-5" src="{{ url(asset('storage/' . $post->image->url)) }}" alt="">

        <div class="container">
            <div class="row">

                <!-- Cambiar Por El Post de la BBDD -->

                <div class="col-lg-8 mb-5 mb-lg-0">

                    {!! $post->cuerpo !!}

                    <div class="p-4 bg-light mb-5">
                        <!-- Bucle Etiquetas -->
                        <ul class="list-inline mb-0">

                            <li class="list-inline-item mr-2 pr-lg-2"><a class="tag reset-anchor" href="#">

                                    @foreach ($post->etiquetas as $etiqueta)
                                        <i class="fas fa-bookmark text-primary mr-2"></i>
                                        {{ $etiqueta->nombre }} &nbsp;&nbsp;
                                    @endforeach

                                </a></li>

                        </ul>
                    </div>
                </div>


                <div class="col-lg-4">

                    {{-- Mejorar la base de datos para dejar personalizar al usuario
                    <!-- About me widget -->
                    <!-- Cambiar por datos de la BBDD -->
                    <div class="mb-5 text-center"><img class="mb-3 rounded-circle img-thumbnail shadow-sm" src="{{ asset('img/author.jpg') }}" alt="" width="110">
                        <h3 class="h4">About me</h3>
                        <p class="text-small text-muted px-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p><img class="d-block mx-auto mb-3" src="{{ asset('img/signature.png') }}" alt="" width="60">
                    </div> --}}


                    <!-- Categories widget -->
                    <div class="mb-5 text-center">

                        <!-- Bucle de 3 categorias -->
                        <h3 class="h5"> Otras Categorias </h3>
                        @foreach ($categorias as $categoria)
                            <a class="category reset-anchor bg-cover bg-center mb-2"
                                href="{{ url('/lista/categoria/' . $categoria->id) }}" style="background-color: #000">
                                <p class="category-title text-uppercase small">{{ $categoria->nombre }}</p>

                            </a>
                        @endforeach

                    </div>


                    <!-- Newsletter widget -->
                    <div class="px-4 py-5 bg-light mb-5 text-center">
                        <h3 class="h5"><i class="far fa-envelope mr-2"></i>Join the family</h3>
                        <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod.</p>

                        <form action="#">

                            <!-- Cambiar el form -->

                            <div class="form-group mb-1">
                                <input class="form-control form-control-sm" type="email" name="email"
                                    placeholder="Emaill address">
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-dark btn-block btn-sm" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>


                    <!-- Latest posts widget -->
                    <div class="mb-5">
                        <h3 class="h5">Latest posts</h3>
                        <p class="text-small text-muted mb-4">Lorem ipsum dolor sit, consectetur adipisicing elit, sed do
                            eiusmod.</p>
                        <ul class="list-unstyled">
                            @foreach ($masPosts as $masPost)
                                <li class="media mb-1">

                                    <a href="{{ url('/post/' . $masPost->id) }}"><img
                                            src="{{ url(asset('storage/' . $masPost->image->url)) }}" alt="" width="80"
                                            height="90"></a>


                                    <div class="media-body ml-3">
                                        <h6 class="mb-1"><a class="reset-anchor"
                                                href="{{ url('/post/' . $masPost->id) }}">{{ $masPost->nombre }}</a>
                                        </h6>
                                        <p class="small text-muted">Lorem ipsum dolor sit, consectetur adipisicing elit,
                                            sed.
                                        </p>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection
