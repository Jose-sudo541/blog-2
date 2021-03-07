<header class="header">
    <!-- Top bar -->
    <div class="py-2 bg-dark text-white">
        <div class="container py-1">
            <div class="row">

                @auth

                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            @can('admin.home')
                                <a class="dropdown-item" href="/admin">Admin</a>
                            @endcan
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="gg-log-out"></i>Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-10 d-none d-lg-block text-right">
                        <ul class="list-inline mb-0 small">
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i
                                        class="fab fa-linkedin"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-vimeo-v"></i></a>
                            </li>
                        </ul>
                    </div>

                @else

                    <div class="col-lg-4">
                        <ul class="list-inline mb-0 text-small">
                            <li class="list-inline-item"><a class="reset-anchor" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="list-inline-item">|</li>
                            <li class="list-inline-item"><a class="reset-anchor"
                                    href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-8 d-none d-lg-block text-right">
                        <ul class="list-inline mb-0 small">
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i
                                        class="fab fa-linkedin"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-vimeo-v"></i></a>
                            </li>
                        </ul>
                    </div>

                @endauth


            </div>
        </div>
    </div>

    <!-- Navbar 1 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
        <div class="container text-center">
            <a class="navbar-brand mx-auto" href="/"><img class="mb-2" src="{{ asset('img/Logo.webp') }}" alt=""
                    width="140">
                <!-- Logo -->
                <p class="text-small text-uppercase text-gray mb-0">Libro Abierto</p>
            </a>
        </div>
    </nav>

    <!-- Navbar 2 -->
    <nav class="navbar navbar-expand-lg navbar-light border-gray py-2 bg-light">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right mx-auto border-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-1">
                        <!-- Link--><a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item px-1">
                        <!-- Link--><a class="nav-link" href="/lista">Lista</a>
                    </li>
                    <li class="nav-item px-1">
                        <!-- Link--><a class="nav-link" href="{{ url('/post/' . $post->id) }}">Post</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
