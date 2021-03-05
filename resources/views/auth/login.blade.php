@extends('layouts.loginmaster')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <br>
                <br>
                <div class="card card-signin flex-row my-5">
                    <div class="card-img-left d-none d-md-flex">
                        <canvas id="myClouds"></canvas>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Login</h5>
                        <form class="form-signin" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-label-group">
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email address" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>
                                <label for="email">Email address</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <hr>

                            <div class="form-label-group">
                                <input type="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Password" required autocomplete="current-password">
                                <label for="password">Password</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-label-group ">
                                <div class="text-center">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label " for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="form-group  mb-0">
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                        <a class="d-block text-center mt-2" href="{{ route('password.request') }}">
                                            ¿Olvidaste tu contraseña?
                                        </a>
                                    @endif
                                    <a class="d-block text-center mt-2 small" href="/">Volver</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        $('#myClouds').Klouds({
            speed: 0.5
        });

    </script>

@endsection
