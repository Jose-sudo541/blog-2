@extends('layouts.master')

@section('content')

    <!-- Hero section -->
    <section class="hero bg-center bg-cover" style="background: url({{ asset('img/hero-banner.jpg') }})">
        <div class="dark-overlay py-5">
            <div class="overlay-content">
                <div class="container py-5 text-white text-center">
                    <h1>{{ $secondCa->nombre }}</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog listing -->
    <section class="pt-5">
        <div class="container pt-5">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="row text-center">

                        <!-- Bucle Con todos los post pagination de 10 -->
                        @foreach ($postsCa as $post)


                            <div class="col-lg-6 mb-5">
                                <a href="{{ url('/post/' . $post->id) }}"><img class="img-fluid mb-4"
                                        src="{{ asset('storage/' . $post->image->url) }}" alt="" /></a>
                                <ul class="list-inline small text-uppercase mb-0">
                                    <li class="list-inline-item mr-0 text-gray align-middle">By </li>
                                    <li class="list-inline-item align-middle mr-0"><a
                                            class="font-weight-bold reset-anchor">{{ $post->users->name }}</a></li>
                                </ul>
                                <h3 class="h4 mt-2"> <a class="reset-anchor"
                                        href="{{ url('/post/' . $post->id) }}">{{ $post->nombre }}</a></h3>
                                <a class="reset-anchor text-gray text-uppercase small mb-2 d-block"
                                    href="{{ url('/post/' . $post->id) }}">{{ $post->categorias->nombre }}</a>
                                <p class="text-small mb-1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore.</p><a class="btn btn-link"
                                    href="{{ url('/post/' . $post->id) }}">Continue reading</a>
                            </div>

                        @endforeach
                    </div>
                    {{ $postsCa->links() }}
                </div>


                <!-- Sidebar -->
                <div class="col-lg-4">

                    {{-- Mejorar la base de datos para dejar personalizar al usuario --}}
                    {{-- <!-- About me widget -->
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


                    <!-- Suscripcion -->
                    <div class="px-4 py-5 bg-light mb-5 text-center">
                        <h3 class="h5"><i class="far fa-envelope mr-2"></i>Join the family</h3>
                        <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod.</p>
                        <form action="/subcripcion">
                            <div class="form-group mb-1">
                                <input class="form-control form-control-sm" type="email" name="email"
                                    placeholder="Emaill address">
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-dark btn-block btn-sm" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
