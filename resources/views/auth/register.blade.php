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
                        <h5 class="card-title text-center">Register</h5>
                        <form class="form-signin" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-label-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Username">
                                <label for="name">{{ __('Username') }}</label>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-label-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email address">
                                <label for="email">{{ __('Email address') }}</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <hr>

                            <div class="form-label-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" placeholder="Password">
                                <label for="password">{{ __('Password') }}</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-label-group">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm password">
                                <label for="password-confirm">{{ __('Confirm password') }}</label>
                            </div>
                            <div class="form-label-group">
                                <button class="btn btn-lg btn-primary btn-block text-uppercase"
                                    type="submit">Register</button>
                                <a class="d-block text-center mt-2 small" href="/">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <script>
            $('#myClouds').Klouds({
                speed: 0.5
            });

        </script>
    </div>

@endsection
