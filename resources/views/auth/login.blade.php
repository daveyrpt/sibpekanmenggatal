@extends('layouts.app')

@section('content')
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">

                <div class="d-flex justify-content-center py-4">
                    <a href="{{ route('index') }}" class="logo d-flex align-items-center w-auto">
                        <img src="{{ asset('images/sib_logo.png') }}" alt="">
                        <span class="d-none d-lg-block">SIBPM</span>
                    </a>
                </div>

                <div class="card">

                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                            <p class="text-center small">Enter your email and password to login</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                            @csrf

                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <div class="invalid-feedback">Please enter your email.</div>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Password</label>
                                <div class="input-group has-validation">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    <div class="invalid-feedback">Please enter your password.</div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Login</button>

{{--                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>

                            <div class="col-12">
                                <p class="small mb-0">Don't have account? <a href="{{ route('register') }}">Create an account</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
