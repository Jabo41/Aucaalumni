<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AUCA') }}</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    {{--    <link href="{{asset('assets/auca/css/font.css')}}" type="text/css" rel="stylesheet">--}}
    {{--    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>--}}
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>

    <style>::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .css {
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        .checked {
            color: orange;
        }


        .skills {
            text-align: right;

            color: white;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        :root {
            --header-height: 3rem;
            --nav-width: 68px;
            --first-color: #1866b6;
            --first-color-light: #AFA5D9;
            --white-color: #F7F6FB;
            --normal-font-size: 1rem;
            --z-fixed: 100
        }

        *, ::before, ::after {
            box-sizing: border-box
        }

        body {
            position: relative;
            font-size: var(--normal-font-size);
            transition: .5s
        }

        a {
            text-decoration: none
        }

        .header {
            transition: .5s
        }

        .header_toggle {
            color: var(--first-color);
            font-size: 1.5rem;
            cursor: pointer
        }


        .header_img img {
            width: 40px
        }

        .l-navbar {
            position: relative;
            width: var(--nav-width);
            min-height: 100vh;
            background-color: var(--first-color);
            padding: .5rem 1rem 0 0;
            transition: .5s;
            z-index: var(--z-fixed)
        }

        .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden
        }

        .nav_logo, .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem
        }

        .nav_logo {
            margin-bottom: 2rem
        }

        .nav_logo-icon {
            font-size: 1.25rem;
            color: var(--white-color)
        }

        .nav_logo-name {
            color: var(--white-color);
            font-weight: 700
        }

        .nav_link {
            position: relative;
            color: var(--first-color-light);
            margin-bottom: 1.5rem;
            transition: .3s
        }

        .nav_link:hover {
            color: var(--white-color)
        }

        .nav_icon {
            font-size: 1.25rem
        }

        .show {
            left: 0
        }


        .active {
            color: var(--white-color)
        }

        .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }

        .height-100 {
            height: 100vh
        }

        @media screen and (min-width: 768px) {


            .header {
                height: calc(var(--header-height) + 1rem);
            }

            .header_img {
                width: 40px;
                height: 40px
            }

            .header_img img {
                width: 45px
            }

            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0
            }


        }

        .nav-show {
            width: calc(var(--nav-width) + 156px)
        }
    </style>


</head>
<body id="body-pd">

<div class="d-flex min-vh-100">
    <div class="l-navbar h-100 nav-show" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo border-bottom border-white py-4 d-flex justify-content-center">
                    <img
                        src="{{asset('assets/auca/imgs/logo.svg')}}"/>
                </a>
                <div class="nav_list">
                    <a href="{{route('registration.personal.information')}}" class="nav_link"> <img
                            src="{{asset('assets/auca/imgs/p_info.svg')}}"> <span
                            class="nav_name">Personal information</span> </a>
                    <a href="{{route('registration.work.experience')}}" class="nav_link"> <img
                            src="{{asset('assets/auca/work.svg')}}"> <span class="nav_name">Work Experience</span> </a>
                    <a href="{{route('registration.certification')}}" class="nav_link"> <img
                            src="{{asset('assets/auca/imgs/cert.svg')}}"> <span class="nav_name">Certifications</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div class="w-100 h-100">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent">
            <div class="container">
                <div class="navbar-brand">
                    <header class="header bg-white" id="header">
                        <div class="header_toggle bg-transparent">
                            <i class='bx bx-left-arrow-alt'
                               id="header-toggle"></i></div>
                    </header>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0 me-5 pe-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                {{ auth()->user()->name }}
                                <img src="{{ asset("assets/img/avatar.svg") }}" style="height: 30px;" alt=""/>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{route('registration.alumni.profile')}}">Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"
                                   onclick="document.getElementById('logout-form').submit()">Logout</a>
                                <form action="{{route('logout')}}" style="display: none" method="post" id="logout-form">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="py-4">
            @yield('content')
        </div>
    </div>
</div>


<script type='text/javascript'
        src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>

<script type='text/javascript'>
    document.addEventListener("DOMContentLoaded", function (event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

// Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
// show navbar
                    nav.classList.toggle('nav-show')
// change icon
                    toggle.classList.toggle('bx-x')
// add padding to body
                    bodypd.classList.toggle('body-pd')
// add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }

        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });</script>
<script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function (e) {
        e.preventDefault();
    });
</script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
@yield('scripts')
</body>
</html>
