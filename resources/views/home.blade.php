@extends('layouts.master')

@section('content')

    <!-- Posts  -->
    <section class="pt-5">
        <div class="container">
            <h1>Posts</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aliquid</p>
        </div>

        <div class="destinations-slider owl-carousel owl-theme nav-center-custom owl-padding">

            <!-- Mimino 5 Post Para que funcione bien -->
            @foreach ($posts as $post)

                <a class="destination d-flex align-items-end bg-center bg-cover" href="{{ url('/post/' . $post->id) }}"
                    style="background: url({{ asset('storage/' . $post->image->url) }})">

                    <div class="destination-inner w-100 text-center text-white index-forward has-transition">

                        <h4 class="h3 mb-4 text-small">{{ $post->categorias->nombre }}</h4>
                        <h2 class="h3 mb-4">{{ $post->nombre }}</h2>

                        <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
                    </div>
                </a>

            @endforeach
        </div>
    </section>

    <!-- Divider Section -->
    <section class="py-5">
        <div class="container py-4">
            <!-- Home listing -->
            <div class="row align-items-stretch bg-full-left">
                <div class="col-lg-6 pr-lg-0 order-2 order-lg-1">
                    <div class="h-100 bg-light d-flex align-items-center">
                        <div class="py-5 pr-4 pl-3 pl-lg-0">
                            <p class="text-primary font-weight-bold small text-uppercase mb-2">Bienvenido</p>
                            <h3 class="h4"><a class="text-reset" href="/post">Disfuta Leyendo Casi cualquier cosa</a></h3>
                            <p class="text-muted text-small mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Excepturi quam nobis autem voluptate illum beatae atque suscipit inventore tenetur,
                                perferendis facere sequi optio laudantium obcaecati aliquam, dolores ea. Pariatur,
                                repellendus.
                            </p>
                            <p class="text-muted text-small mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Excepturi quam nobis autem voluptate illum beatae atque suscipit inventore tenetur,
                                perferendis facere sequi optio laudantium obcaecati aliquam, dolores ea. Pariatur,
                                repellendus.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-0 order-1 order-lg-2">
                    <a class="d-block h-100 bg-center bg-cover"
                        style="background: url({{ asset('img/travel-home-divider.jpg') }})"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 position-relative py-4"><img class="subscribe-img"
                        src="{{ asset('img/subscribe-img-1.jpg') }}" alt=""><img class="subscribe-img"
                        src="{{ asset('img/subscribe-img-2.jpg') }}" alt=""></div>
                <div class="col-lg-6">
                    <h2>Join the family</h2>
                    <p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quidem facere
                        aliquam, delectus, incidunt ipsum fugit deserunt ducimus quibusdam consequuntur quos numquam ipsa
                        suscipit animi dolore. Est beatae inventore voluptas.</p>
                    <form action="#">
                        <div class="row">
                            <div class="form-group col-lg-8">
                                <input class="form-control" type="email" name="email"
                                    placeholder="Enter your email address">
                                <!-- Correo Para enviar Mensajes predefinidos -->
                            </div>
                            <div class="form-group col-lg-4">
                                <button class="btn btn-dark btn-block" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Top categories section -->
    <section class="py-5 bg-light">

        <div class="container py-4">

            <header class="mb-5 text-center">
                <h2>Categorias</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </header>

            <div class="row text-center">
                @foreach ($categorias as $categoria)
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0">
                        <a class="reset-anchor d-block" href="{{ url('/lista/categoria/' . $categoria->id) }}">
                            <h3 class="h5">{{ $categoria->nombre }}</h3>
                            <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                                <use xlink:href="#reading-1"> </use>
                            </svg>
                        </a>
                    </div>
                @endforeach

            </div>
            {{ $categorias->links() }}

        </div>
    </section>

@endsection
