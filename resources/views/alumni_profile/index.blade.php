<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AUCA') }}</title>
    <link rel="shortcut icon" type="image" href="{{asset('download.png')}}">

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
                <a href="{{route('welcome')}}"
                   class="nav_logo border-bottom border-white py-4 d-flex justify-content-center">
                    <img
                        src="{{asset('assets/auca/imgs/logo.svg')}}"/>
                </a>
                <div class="nav_list">
                    <a href="{{route('registration.personal.information')}}"
                       class="nav_link tw-text-white hover:tw-text-gray-300 tw-text-truncate">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="tw-w-6 tw-h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span
                            class="nav_name ">Personal information</span> </a>
                    <a href="{{route('registration.work.experience')}}"
                       class="nav_link tw-text-white hover:tw-text-gray-300 tw-text-truncate">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="tw-w-6 tw-h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                        </svg>

                        <span class="nav_name">Work Experience</span>
                    </a>
                    <a href="{{route('registration.certification')}}"
                       class="nav_link tw-text-white hover:tw-text-gray-300 tw-text-truncate">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="tw-w-6 tw-h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"/>
                        </svg>

                        <span class="nav_name">Certifications</span>
                    </a>

                    <a href="{{route('registration.all.alumni.members')}}"
                       class="nav_link tw-text-white hover:tw-text-gray-300 tw-text-truncate">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="tw-w-6 tw-h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                        </svg>


                        <span class="nav_name">Alumni Members</span>
                    </a>

                    <a href="{{route('registration.apply.opportunity.index')}}"
                       class="nav_link tw-text-white hover:tw-text-gray-300 tw-text-truncate">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="tw-w-6 tw-h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                        </svg>


                        <span class="nav_name">My Opportunities</span>
                    </a>

                </div>
            </div>
        </nav>
    </div>
    <div class="w-100 h-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
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
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
            <div class="container">
                @include('partials.frontend._alerts')
                <div class="px-4">
                    <div class="d-flex  flex-row justify-content-between mb-4">
                        <a href="{{route('welcome')}}">
                            <div class="text-muted">Go back <span class="text-primary fw-semibold ">home</span></div>
                        </a>
                    </div>
                    <div class="d-flex flex-column gap-2 mb-4">
                        <div class="fw-bold">{{auth()->user()->name}}</div>
                        <div class="text-primary fst-italic fw-bold">Bachelors in networking</div>
                        <div class="d-flex flex-row gap-3 text-muted text-normal fst-italic">
                            <span>{{optional($information->start_date)->format('Y')}}-{{optional($information->end_date)->format('Y')}}</span>
                            {{--                            <span class="tw-font-semibold">Grade:A</span>--}}
                        </div>
                        <div class="d-flex flex-row align-items-center gap-1">
                            {{--                            @for($i=0;$i<4;$i++)--}}
                            {{--                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none"--}}
                            {{--                                     xmlns="http://www.w3.org/2000/svg">--}}
                            {{--                                    <path--}}
                            {{--                                        d="M14.5152 4.9298L10.0185 4.29107L8.00833 0.308118C7.95343 0.199068 7.8631 0.110788 7.75153 0.0571283C7.4717 -0.0778871 7.13166 0.0346257 6.99174 0.308118L4.9816 4.29107L0.484887 4.9298C0.360913 4.94711 0.247566 5.00423 0.160784 5.09078C0.0558699 5.19617 -0.00194268 5.33796 4.9848e-05 5.48499C0.00204238 5.63202 0.063677 5.77227 0.17141 5.87491L3.42484 8.97507L2.6562 13.3527C2.63818 13.4545 2.64971 13.5592 2.68948 13.655C2.72926 13.7508 2.79569 13.8337 2.88125 13.8944C2.9668 13.9552 3.06805 13.9912 3.17353 13.9986C3.279 14.0059 3.38446 13.9843 3.47797 13.936L7.50004 11.8692L11.5221 13.936C11.6319 13.9931 11.7594 14.0122 11.8816 13.9914C12.1898 13.9395 12.397 13.6539 12.3439 13.3527L11.5752 8.97507L14.8287 5.87491C14.9172 5.79009 14.9757 5.67931 14.9934 5.55814C15.0412 5.25522 14.8251 4.9748 14.5152 4.9298Z"--}}
                            {{--                                        fill="#D69F12"/>--}}
                            {{--                                </svg>--}}

                            {{--                            @endfor--}}
                            {{--                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"--}}
                            {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
                            {{--                                <path--}}
                            {{--                                    d="M5.35268 4.61888L7.53655 0.291993C7.57849 0.204948 7.64403 0.13143 7.7257 0.0798076C7.80738 0.0281852 7.90191 0.000533268 7.99852 0C8.18151 0 8.3645 0.0969975 8.46349 0.291993L10.6474 4.61888L15.5451 5.31486C15.6671 5.33406 15.7789 5.39477 15.8614 5.48677C15.9439 5.57876 15.9922 5.69641 15.998 5.81985C16.005 5.90204 15.9934 5.98474 15.9639 6.06178C15.9345 6.13883 15.888 6.20824 15.828 6.26484L12.3053 9.62076L13.1352 14.3506C13.2132 14.7936 12.7752 15.1406 12.3893 14.9426L7.99852 12.6867L3.60979 14.9426C3.56388 14.9665 3.51468 14.9833 3.4638 14.9926C3.12182 15.0526 2.79584 14.7386 2.86384 14.3506L3.69379 9.62076L0.172 6.26484C0.117249 6.21304 0.0737299 6.15054 0.0441435 6.08121C0.0145571 6.01189 -0.000464569 5.93722 1.09464e-05 5.86185C6.29561e-05 5.75529 0.0294705 5.6508 0.0850058 5.55986C0.124402 5.49393 0.178099 5.43769 0.242134 5.39528C0.306169 5.35288 0.378908 5.3254 0.454983 5.31486L5.35268 4.61888ZM7.99852 11.5267C8.07924 11.5264 8.15883 11.5456 8.23051 11.5827L11.9163 13.4767L11.2223 9.51976C11.2059 9.42875 11.2121 9.33512 11.2404 9.24708C11.2686 9.15903 11.3181 9.07926 11.3843 9.01477L14.2911 6.24484L10.2394 5.66886C10.1555 5.65619 10.0759 5.62337 10.0075 5.57321C9.93903 5.52305 9.88376 5.45705 9.84641 5.38086L7.99952 1.72296L7.99852 1.72596V11.5257V11.5267Z"--}}
                            {{--                                    fill="#D69F12"/>--}}
                            {{--                            </svg>--}}

                            {{--                            <span>4.5</span>--}}
                            <a href="" class="" data-bs-toggle="modal" data-bs-target="#exampleModal"><h3>Invite Others
                                    to become Members of AUCA Alumni</h3></a>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header pt-lg-5 px-lg-5 border-bottom-0">
                                            <h1 class="modal-title fs-5 " id="exampleModalLabel">
                                                Insert Member Email Here
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <form action="{{route('registration.alumni-profile.invite-member')}}"
                                              method="post" class="submitForm">
                                            @csrf
                                            <div class="modal-body px-lg-5">

                                                <div class="append" id="append">
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input required type="email"
                                                               class="bg-light tw-text-left form-control border-0"
                                                               name="email" id="email"/>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="modal-footer border-top-0 px-lg-5">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" pb-5">
                    <div class="d-flex align-items-center ">
                        <div class="px-2 bg-white">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="5" cy="5" r="5" fill="#59A3ED"/>
                            </svg>

                        </div>
                        <div class="bg-primary d-flex align-items-center flex-grow-1 ">
                            <div
                                class="d-flex flex-column flex-md-row flex-grow-1  gap-3 justify-content-between align-items-center p-2 bg-light">
                                <div class="">
                                    <em class="tw-text-gray-400 tw-text-sm fw-semibold">Full Names</em>
                                    <div class="fw-semibold tw-text-xs">{{auth()->user()->name}}</div>
                                </div>
                                <div class="">
                                    <em class="tw-text-gray-400 tw-text-sm fw-semibold">Email</em>
                                    <div class="fw-semibold tw-text-xs">{{auth()->user()->email}}</div>
                                </div>
                                <div class="">
                                    <em class="tw-text-gray-400 tw-text-sm fw-semibold">Phone Number</em>
                                    <div class="fw-semibold tw-text-xs">{{auth()->user()->phone_number}}</div>
                                </div>
                                <div class="">
                                    <em class="tw-text-gray-400 tw-text-sm fw-semibold">Address</em>
                                    <div class="fw-semibold tw-text-xs">{{$information->address}}</div>
                                </div>
                                <div class="">
                                    <em class="tw-text-gray-400 tw-text-sm fw-semibold">Age(years)</em>
                                    <div class="fw-semibold tw-text-xs">{{now()->diffInYears($information->dob)}}</div>
                                </div>
                            </div>
                            <div class="tw-h-full p-3 bg-primary">
                                <a href="{{route('registration.profile.edit',[optional($information)->id])}}">
                                    <img src="{{asset('assets/auca/imgs/edit.svg')}}" class="tw-h-4"/>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
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
