@extends('layouts.app')

@section('content')
<div class="container">
    <date_interval_create_from_date_string class="row justify-content-center">
                        <div class="login-box">
                            <div class="card card-outline card-primary">
                                <div class="card-header text-center">
                                    <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                                </div>
                                <div class="card-body">
                                    <p class="login-box-msg">Sign in to start your session</p>
                                    <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                        <div class="input-group mb-3">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="input-group mb-3">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-primary">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember">
                                            Remember Me
                                            </label>
                                            </div>
                                            </div>
                                            <div class="col-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="social-auth-links text-center mt-2 mb-3">
                                        <a href="#" class="btn btn-block btn-primary">
                                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                                        </a>
                                        <a href="#" class="btn btn-block btn-danger">
                                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                                        </a>
                                    </div>

                                    <p class="mb-1">
                                        <a href="forgot-password.html">I forgot my password</a>
                                    </p>
                                    <p class="mb-0">
                                        <a href="register.html" class="text-center">Register a new membership</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
                        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                        <script src="{{ asset('dist/js/adminlte.min.js?v=3.2.0') }}"></script>
                    </date_interval_create_from_date_string>
                </div>
            </div>
        </div>
    </div>

@endsection
