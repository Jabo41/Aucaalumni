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
    <div class="col-md-6  px-0">
        <div class="card bg-white shadow-none rounded-0 tw-border-none h-100 w-100">
            <div class="card-body py-5  xl:tw-px-20 tw-px-10">
                <a href="{{route('welcome')}}" class="btn btn-outline-primary rounded  px-4">
                    Home
                </a>
                <div class="xl:tw-w-2/3">
                    <h5 class="mt-4 mb-4 fw-bolder tw-leading-loose tw-tracking-wider">
                        Welcome to the AUCA Alumni Login page
                    </h5>

                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf
                        <div class="mb-4">
                            <input type="email" name="email" class="bg-light tw-text-left @error('email') is-invalid @enderror form-control border-0 px-4 py-2" placeholder="User email" required/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input type="password" name="password" class="bg-light tw-text-left @error('password') is-invalid @enderror form-control border-0 px-4 py-2" placeholder="Password" required/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-4 d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" name="remember"  type="checkbox" value="" id="flexCheckDefault" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Stay logged in
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="tw-no-underline">
                                Forgot password?
                            </a>
                            @endif
                        </div>
                        <div class="mb-4">
                            <button class="btn btn-primary w-100 fw-bold py-2 ">
                                Login
                            </button>
                        </div>
                        <div class="mb-4">
                            <a href="{{ route('register') }}" class="btn btn-outline-primary w-100 fw-bold py-2 ">
                                SignUp
                            </a>
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
</div>
</body>
</html>
