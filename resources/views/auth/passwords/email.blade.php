<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AUCA LOGIN') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>
<body>
<div class="row me-0">
    <div class="col-md-6 px-0">
        <div class="md:tw-min-h-screen py-5 d-flex justify-content-center align-items-center flex-column tw-space-y-3"
             style="background-image:
                     linear-gradient(180deg, rgba(0, 92, 187, 0.85) 85%, rgba(103, 97, 179, 0.5) 100%) ,
                    url('{{ asset("assets/img/login/image 13.png") }}');  height: 200px;object-fit: cover;background-size: cover;background-position: bottom">
            <img src="{{ asset("assets/img/login/AUCA Logo-01 1.png") }}" class="tw-h-20 md:tw-h-36 " alt=""/>
            <h4 class="text-white text-center tw-font-semibold tw-tracking-wider tw-text-sm md:tw-text-xl">
                ADVENTIST UNIVERSITY <br>
                OF CENTRAL AFRICA
            </h4>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card-body py-5  xl:tw-px-20 tw-px-10 min-vh-100 d-flex flex-column justify-content-between">
            <div class="">
                <a href="{{route('welcome')}}" class="btn btn-light rounded text-muted px-4">
                    Home
                </a>
                <h5 class="mt-4 mb-4 fw-bolder tw-leading-loose tw-tracking-wider">
                    Password Reset
                </h5>

                @if(session()->has('status'))
                    <div class="alert alert-success">
                        {{ session()->get('status') }}
                    </div>
                @endif

                <form method="POST" autocomplete="off" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email"
                               class="form-label @error('email') text-danger fw-bold @enderror">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                        @error('email')
                        <span class="invalid-feedback fw-bold" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class=" mb-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-between mt-5">
                <div>
                    <span>Need</span> <a href="" class="tw-no-underline"> help?</a>
                </div>
                <div class="d-flex tw-space-x-2">
                    <a href="" class="text-muted">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="" class="text-muted">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="" class="text-muted">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="" class="text-muted">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



