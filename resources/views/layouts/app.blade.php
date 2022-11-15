<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AUCA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <style>


    </style>
</head>
<body>
@include('partials._header')

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu mt-5"
             class="col-md-3 px-0 col-lg-2 d-block bg-light sidebar collapse tw-bg-[#1866B6] tw-min-h-screen">
            <div class="nav-item border-bottom py-3">
                <a class="nav-link text-center" aria-current="page" href="#">
                    <img src="{{ asset('assets/img/logo.png') }}" class="tw-h-14" alt="">
                </a>
            </div>
            <div class="position-sticky py-3 sidebar-sticky">
                <ul class="nav flex-column justify-content-center">

                    <li class="nav-item  position-relative">
                        <a class="nav-link " aria-current="page" href="{{route('registration.personal.information')}}">
                            <svg width="22" class="tw-h-4 tw-w-4 tw-mr-2" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M15 8C15 9.06087 14.5786 10.0783 13.8284 10.8284C13.0783 11.5786 12.0609 12 11 12C9.93913 12 8.92172 11.5786 8.17157 10.8284C7.42143 10.0783 7 9.06087 7 8C7 6.93913 7.42143 5.92172 8.17157 5.17157C8.92172 4.42143 9.93913 4 11 4C12.0609 4 13.0783 4.42143 13.8284 5.17157C14.5786 5.92172 15 6.93913 15 8ZM13 8C13 8.53043 12.7893 9.03914 12.4142 9.41421C12.0391 9.78929 11.5304 10 11 10C10.4696 10 9.96086 9.78929 9.58579 9.41421C9.21071 9.03914 9 8.53043 9 8C9 7.46957 9.21071 6.96086 9.58579 6.58579C9.96086 6.21071 10.4696 6 11 6C11.5304 6 12.0391 6.21071 12.4142 6.58579C12.7893 6.96086 13 7.46957 13 8Z"
                                      fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M11 0C4.925 0 0 4.925 0 11C0 17.075 4.925 22 11 22C17.075 22 22 17.075 22 11C22 4.925 17.075 0 11 0ZM2 11C2 13.09 2.713 15.014 3.908 16.542C4.74723 15.4399 5.8299 14.5467 7.07143 13.9323C8.31297 13.3179 9.67974 12.9988 11.065 13C12.4323 12.9987 13.7819 13.3095 15.0109 13.9088C16.2399 14.508 17.316 15.3799 18.157 16.458C19.0234 15.3216 19.6068 13.9952 19.8589 12.5886C20.111 11.182 20.0244 9.73553 19.6065 8.36898C19.1886 7.00243 18.4512 5.75505 17.4555 4.73004C16.4598 3.70503 15.2343 2.93186 13.8804 2.47451C12.5265 2.01716 11.0832 1.88877 9.66986 2.09997C8.25652 2.31117 6.91379 2.85589 5.75277 3.68905C4.59175 4.52222 3.64581 5.61987 2.99323 6.8912C2.34065 8.16252 2.00018 9.57097 2 11V11ZM11 20C8.93395 20.0031 6.93027 19.2923 5.328 17.988C5.97293 17.0647 6.83134 16.3109 7.83019 15.7907C8.82905 15.2705 9.93879 14.9992 11.065 15C12.1772 14.9991 13.2735 15.2636 14.2629 15.7714C15.2524 16.2793 16.1064 17.0159 16.754 17.92C15.1393 19.2667 13.1026 20.0029 11 20V20Z"
                                      fill="white"/>
                            </svg>

                            Personal information

                        </a>
                        <span class="tw-absolute tw-h-[10px] -tw-right-[50px] -tw-top-[16px]">
                               <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4" cy="4" r="4" fill="white"/>
                            </svg>
                            <svg width="68" height="74" viewBox="0 0 68 74" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.5 9.99999C22.7522 1.79917 37.96 -3.93045 43.5379 3.43314L65.6936 32.6819C68.739 36.7022 68.3139 42.3611 64.702 45.8813L39.0621 70.8708C33.0442 76.736 20.5998 72.1367 18.5 64C16.8275 57.519 11.3961 51.9655 5.64163 47.697C-0.847872 42.8832 -1.90494 31.9623 4.16029 26.6238C9.79602 21.6634 15.5368 15.7148 18.5 9.99999Z"
                                    fill="white"/>
                            </svg>
                        </span>

                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link  " aria-current="page" href="{{route('registration.work.experience')}}">
                            <svg width="25" height="24" class="tw-h-4 tw-w-4 tw-mr-2" viewBox="0 0 25 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.2492 18.9468C17.3295 19.7699 18.6462 20.2139 19.999 20.2115C21.3514 20.2139 22.6678 19.7708 23.7488 18.9493V23.0505C23.7491 23.2128 23.7082 23.3724 23.6301 23.514C23.5519 23.6557 23.439 23.7747 23.3023 23.8597C23.1655 23.9446 23.0095 23.9927 22.8491 23.9992C22.6888 24.0058 22.5294 23.9706 22.3864 23.897L22.2739 23.8275L19.999 22.2204L17.7241 23.8275C17.5927 23.9203 17.44 23.9774 17.2806 23.9935C17.1212 24.0096 16.9603 23.9841 16.8134 23.9195C16.6664 23.8549 16.5384 23.7533 16.4413 23.6244C16.3443 23.4954 16.2816 23.3436 16.2592 23.1832L16.2504 23.0505L16.2492 18.9481V18.9468ZM21.5614 4.28129e-09C22.4367 -4.38916e-05 23.2791 0.33746 23.9167 0.943668C24.5543 1.54988 24.939 2.37912 24.9925 3.26225L24.9988 3.47451L25 10.1026C24.4931 9.42046 23.8555 8.84853 23.1251 8.42094L23.1238 3.47451C23.124 3.08352 22.9807 2.70637 22.7216 2.41603C22.4626 2.12569 22.1062 1.9428 21.7214 1.90277L21.5614 1.89519H3.43733C3.05052 1.89501 2.67741 2.03987 2.39017 2.30173C2.10294 2.5636 1.92201 2.92385 1.88241 3.31279L1.87491 3.47451V15.4774C1.87491 16.2948 2.48988 16.9682 3.27734 17.0478L3.43733 17.0567H14.5868C14.7118 17.274 14.8493 17.4837 14.9993 17.6834V18.9519H3.43733C2.56181 18.9519 1.71928 18.6142 1.08167 18.0077C0.444053 17.4013 0.0594176 16.5717 0.00624983 15.6884L4.23548e-09 15.4774V3.47451C-4.34219e-05 2.58973 0.333849 1.73826 0.93357 1.09378C1.53329 0.449301 2.35366 0.0603696 3.22734 0.00631744L3.43733 4.28129e-09H21.5614ZM19.999 8.83915C21.325 8.83915 22.5967 9.3716 23.5344 10.3194C24.472 11.2672 24.9988 12.5526 24.9988 13.893C24.9988 15.2333 24.472 16.5188 23.5344 17.4666C22.5967 18.4144 21.325 18.9468 19.999 18.9468C18.673 18.9468 17.4013 18.4144 16.4636 17.4666C15.526 16.5188 14.9993 15.2333 14.9993 13.893C14.9993 12.5526 15.526 11.2672 16.4636 10.3194C17.4013 9.3716 18.673 8.83915 19.999 8.83915ZM11.5619 11.9978C11.7994 11.9979 12.0281 12.0891 12.2016 12.253C12.3752 12.4169 12.4807 12.6413 12.4969 12.8808C12.5131 13.1203 12.4387 13.3571 12.2888 13.5434C12.139 13.7296 11.9247 13.8514 11.6894 13.8841L11.5619 13.893H5.9372C5.69969 13.8929 5.47105 13.8017 5.2975 13.6378C5.12394 13.4739 5.01841 13.2495 5.00222 13.01C4.98603 12.7704 5.06039 12.5336 5.21028 12.3474C5.36017 12.1612 5.57441 12.0394 5.80971 12.0066L5.9372 11.9978H11.5619ZM19.0615 5.04878C19.2991 5.04885 19.5277 5.14005 19.7013 5.30396C19.8748 5.46787 19.9803 5.69225 19.9965 5.93178C20.0127 6.17131 19.9384 6.40812 19.7885 6.59436C19.6386 6.78061 19.4243 6.90239 19.189 6.93512L19.0615 6.94396H5.9372C5.69969 6.94389 5.47105 6.85268 5.2975 6.68878C5.12394 6.52487 5.01841 6.30049 5.00222 6.06096C4.98603 5.82143 5.06039 5.58462 5.21028 5.39838C5.36017 5.21213 5.57441 5.09035 5.80971 5.05762L5.9372 5.04878H19.0615Z"
                                    fill="#88B5DF"/>
                            </svg>

                            Work Experience
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " aria-current="page" href="{{route('registration.certification')}}">
                            <svg width="28" height="25" class="tw-h-4 tw-w-4 tw-mr-2" viewBox="0 0 28 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.8333 3.125H21.7778V1.17188C21.7778 0.522461 21.2576 0 20.6111 0H7.38889C6.74236 0 6.22222 0.522461 6.22222 1.17188V3.125H1.16667C0.520139 3.125 0 3.64746 0 4.29688V7.03125C0 8.77441 1.09375 10.5664 3.00903 11.9482C4.54028 13.0566 6.40208 13.7598 8.35625 13.9844C9.88264 16.5283 11.6667 17.5781 11.6667 17.5781V21.0938H9.33333C7.61736 21.0938 6.22222 22.1045 6.22222 23.8281V24.4141C6.22222 24.7363 6.48472 25 6.80556 25H21.1944C21.5153 25 21.7778 24.7363 21.7778 24.4141V23.8281C21.7778 22.1045 20.3826 21.0938 18.6667 21.0938H16.3333V17.5781C16.3333 17.5781 18.1174 16.5283 19.6438 13.9844C21.6028 13.7598 23.4646 13.0566 24.991 11.9482C26.9014 10.5664 28 8.77441 28 7.03125V4.29688C28 3.64746 27.4799 3.125 26.8333 3.125ZM4.82708 9.41406C3.64097 8.55469 3.11111 7.59766 3.11111 7.03125V6.25H6.23194C6.28056 7.8418 6.51389 9.23828 6.85417 10.459C6.12014 10.2051 5.43472 9.85352 4.82708 9.41406ZM24.8889 7.03125C24.8889 7.81738 24.0285 8.79395 23.1729 9.41406C22.5653 9.85352 21.875 10.2051 21.141 10.459C21.4813 9.23828 21.7146 7.8418 21.7632 6.25H24.8889V7.03125Z"
                                    fill="#88B5DF"/>
                            </svg>
                            Certifications
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

        <main class="col-md-9  col-lg-10 px-0 ">
            <ul class="nav justify-content-center bg-white border-bottom tw-shadow-sm py-4 w-100">
                <li class="nav-item">
                    <a class="nav-link text-muted active" aria-current="page" href="#">Alumni Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-muted dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-expanded="false">Publications</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-muted dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-expanded="false">Events</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-muted dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-expanded="false">Programs</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-muted dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-expanded="false">Opportunities</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-muted dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-expanded="false">About Alumni</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="#">Contact Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset("assets/img/avatar.svg") }}" style="height: 30px;" alt="" />
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()">Logout</a>
                        <form action="{{route('logout')}}" style="display: none" method="post" id="logout-form">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
            <div class="px-md-4 py-4 ms-sm-auto">
                @yield('content')
            </div>
        </main>
    </div>
</div>



@yield('scripts')
</body>
</html>
