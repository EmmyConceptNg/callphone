@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex aligns-items-center justify-content-center mb-5">
        <img src="{{ asset('assets/img/logo.png') }}" width="150px" alt="">
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex aligns-items-center justify-content-center">
                    <h4 class="fw-bold">Welcome Back</h4>
                    </div>
                    <div class="d-flex aligns-items-center justify-content-center">
                        <h4 class="fs-5 fw-lighter">Log into your account</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3 col-8 row offset-2">
                            <div class="">
                                <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address') }}</label>
                            </div>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row col-8 offset-2 mb-3">
                            <div class="">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                            </div>
                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-8 d-grid gap-2 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="row mb-0">

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
