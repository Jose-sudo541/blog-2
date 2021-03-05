<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Un Libro Abierto</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/owl.carousel2/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl.carousel2/assets/owl.theme.default.min.css') }}">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('icons/allicons.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/Logo.webp') }}">

    <!-- Vanilla JavaScript -->
    <script src="{{ asset('plugins/klouds-master/lib/klouds.min.js') }}"></script>

    <!-- As a jQuery plugin -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/klouds-master/lib/klouds.min.js') }}"></script>


</head>

<body>
    @include('partials.navbar')

        @yield('content')

    @include('partials.footer')
</body>

</html>