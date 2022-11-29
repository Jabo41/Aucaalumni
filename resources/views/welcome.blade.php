<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("assets/slick/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/slick/slick-theme.css") }}">

    <link rel="stylesheet" href="{{ asset("css/tailwind.css") }}">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>Auca Alumni | Home</title>
</head>

<body class="bg-white">
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-light bg-white tw-shadow py-3">
    <div class="container">
        <a class="navbar-brand tw-flex tw-items-center" href="{{route('welcome')}}">
            <img src="{{ asset("assets/img/logo.png") }}" class="tw-h-20" alt="Logo"/>
            <span class="tw-ml-2 tw-text-xs tw-text-[#005CBB] tw-font-normal">
                    ADVENTIST UNIVERSITY <br>
                    OF CENTRAL AFRICA
                </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <img src="{{ asset("assets/img/avatar.svg") }}" style="height: 30px;" alt=""/>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logoutForm').submit();">Logout</a>
                            <form action="{{ route('logout') }}" id="logoutForm" method="post">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth

                @guest

                    <li class="nav-item tw-flex tw-items-center">
                        <a class="btn  tw-bg-[#005CBB] text-white  tw-rounded-r-none tw-rounded-l-lg"
                           href="{{ route('login') }}">
                            Login
                        </a>
                        <a class="btn  tw-rounded-r-lg tw-shadow tw-rounded-l-none tw-text-[#005CBB]"
                           href="{{route('register')}}">
                            SignUp
                        </a>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- navbar -->



<div class="nav-links tw-bg-[#F7F7F7]  tw-py-5">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-between gap-lg-5">
                        <li class="nav-item">
                            <a class="nav-link tw-text-gray-500" aria-current="page" href="#home">Alumni Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tw-text-gray-500" href="#event">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tw-text-gray-500" href="#news">Latest News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tw-text-gray-500" href="#program">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tw-text-gray-500" href="#social_activities">Social Activities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tw-text-gray-500" href="#opportunities">Opportunities</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <section id="home" class="home">
            <div class="tw-grid md:tw-grid-cols-2 tw-mt-10">
                <div>
                    <h3 class="tw-text-[#005CBB]">Become a member</h3>
                    <p class="tw-my-10 tw-text-gray-600 tw-text-sm tw-leading-loose tw-tracking-wide">
                        Become an international center of academic learning with global impact. <br>
                        Provide Christ-centered wholistic quality education to prepare for service in this world, and in the life to come. <br>
                        {{--                    <a href="" class="tw-no-underline">Alumni is the best</a>--}}
                    </p>

                    <a href="https://auca.ac.rw/online-registration/" class="btn tw-rounded-lg tw-bg-[#005CBB] text-white md:tw-w-72 tw-w-full tw-py-3">
                        Apply Today
                    </a>

                    <div class="tw-mt-10 tw-space-x-4 tw-text-xs tw-text-gray-500">
                        <span>
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.96374 1.61911L3.15258 0.749075C4.26756 -0.0661191 5.71426 0.0620378 6.53301 1.04804L8.16335 3.01255C8.87266 3.86811 8.93007 5.15954 8.30535 6.20441L6.56372 9.11363C7.02183 10.305 7.76874 11.3691 8.80325 12.3064C9.79114 13.218 10.9775 13.898 12.292 14.3063L14.7972 12.4286C15.7462 11.7184 16.9713 11.6878 17.834 12.3532L19.8472 13.9021C20.8518 14.676 21.0867 16.1639 20.3978 17.3839L19.6605 18.691C18.9256 19.9923 17.6185 20.8463 16.2301 20.9305C12.95 21.1316 9.45768 19.4412 5.74842 15.8609C2.03379 12.275 0.149017 8.7666 0.0964793 5.33986C0.0740396 3.89793 0.783619 2.48217 1.96374 1.61911Z"
                                    fill="#005CBB"/>
                            </svg>

                            +250 724 796 998
                        </span>
                        {{--                    <span>--}}
                        {{--                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none"--}}
                        {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
                        {{--                                <path--}}
                        {{--                                    d="M21 10.3139C21 16.0101 16.2986 20.6278 10.5 20.6278C9.46004 20.6294 8.42439 20.4778 7.41956 20.177C6.65306 20.6131 4.893 21.45 1.932 21.9952C1.6695 22.0423 1.47 21.7358 1.57369 21.4618C2.03831 20.23 2.45831 18.5886 2.58431 17.0916C0.9765 15.2793 0 12.9071 0 10.3139C0 4.61769 4.70137 0 10.5 0C16.2986 0 21 4.61769 21 10.3139ZM6.5625 10.3139C6.5625 9.92314 6.42422 9.54837 6.17808 9.27205C5.93194 8.99573 5.5981 8.8405 5.25 8.8405C4.9019 8.8405 4.56806 8.99573 4.32192 9.27205C4.07578 9.54837 3.9375 9.92314 3.9375 10.3139C3.9375 10.7047 4.07578 11.0795 4.32192 11.3558C4.56806 11.6321 4.9019 11.7873 5.25 11.7873C5.5981 11.7873 5.93194 11.6321 6.17808 11.3558C6.42422 11.0795 6.5625 10.7047 6.5625 10.3139ZM11.8125 10.3139C11.8125 9.92314 11.6742 9.54837 11.4281 9.27205C11.1819 8.99573 10.8481 8.8405 10.5 8.8405C10.1519 8.8405 9.81806 8.99573 9.57192 9.27205C9.32578 9.54837 9.1875 9.92314 9.1875 10.3139C9.1875 10.7047 9.32578 11.0795 9.57192 11.3558C9.81806 11.6321 10.1519 11.7873 10.5 11.7873C10.8481 11.7873 11.1819 11.6321 11.4281 11.3558C11.6742 11.0795 11.8125 10.7047 11.8125 10.3139ZM15.75 11.7873C16.0981 11.7873 16.4319 11.6321 16.6781 11.3558C16.9242 11.0795 17.0625 10.7047 17.0625 10.3139C17.0625 9.92314 16.9242 9.54837 16.6781 9.27205C16.4319 8.99573 16.0981 8.8405 15.75 8.8405C15.4019 8.8405 15.0681 8.99573 14.8219 9.27205C14.5758 9.54837 14.4375 9.92314 14.4375 10.3139C14.4375 10.7047 14.5758 11.0795 14.8219 11.3558C15.0681 11.6321 15.4019 11.7873 15.75 11.7873Z"--}}
                        {{--                                    fill="#005CBB"/>--}}
                        {{--                            </svg>--}}

                        {{--                            Chat--}}
                        {{--                        </span>--}}
                    </div>
                </div>
                <div
                    style="background-image: url({{ asset("assets/img/lady_back.jpeg") }});background-repeat: no-repeat;background-position: center;background-size: cover">
                    <img src="{{ asset("assets/img/lady.png") }}" alt="Lady" class="tw-w-full tw-object-contain"/>
                </div>
            </div>
        </section>


    </div>
</div>

<!-- upcoming events -->

<section id="event" class="event">
    <div class="tw-bg-[#005CBB]  tw-py-10 position-relative overflow-hidden">

        <div class="container">
            <a href="" class="btn tw-rounded-none bg-white btn-lg tw-text-[#005DBB] tw-pr-10 mx-md-5 mx-2">
                Upcoming Events
            </a>

            <div class="events mt-5 mb-5">

                @foreach($events as $event)

                    <div class="card rounded-xl mx-2 mx-md-2 mx-lg-3 mx-xl-5">
                        <div class="card-body p-2">
                            <img src="{{$event->up_coming_event_url}}" class="img-fluid rounded-xl w-100" alt=""/>
                            <div class="card-text">
                                <p class="px-3 my-2 mb-0 font-weight-bold  tw-tracking-wide">
                                    {{$event->description}}
                                    <a href="" class="tw-no-underline">Alumni is the best</a>
                                </p>
                                <p class="px-3 text-muted small mb-0">
                                    {{$event->date}}
                                </p>
                                <a href="" class="text-center d-block text-warning my-2">Read more</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>


        </div>


        <img src="./assets/img/circle_left.png" class="img-fluid d-none d-md-block position-absolute img-event-left"
             alt=""/>
        <img src="./assets/img/circle_right.png" class="img-fluid d-none d-md-block position-absolute img-event-right"
             alt=""/>

    </div>
</section>

<!-- latest news -->

<section id="news" class="news">
    <div class="container my-5">
        <div class="card card-body p-5 tw-bg-[#F7F7F7] position-relative border-0 rounded-0 mx-md-5">
            <button
                class="btn text-white px-5 rounded-0 position-absolute bg-primary d-flex justify-content-between tw-z-10 -tw-top-[20px]">
                <span>Latest News</span>
                <i class="bi bi-chevron-right ml-5"></i>
            </button>
            <div class="row">

                @foreach($news as $item)

                    <div class="col-md-6 position-relative border-right">
                        <h4 class="font-weight-bolder tw-text-lg">{{$item->title}}</h4>
                        <p class="tw-font-semibold mt-4 tw-text-xs">
                            AUCA Alumni is the best institution <br>
                            in central Africa AUCA Alumni is <br>
                            central AfricaAUCA
                            <a href="" class="tw-no-underline">Alumni is the best </a>
                        </p>
                        <div class="d-flex w-100 tw-text-sm">
                            <a href="" class="tw-no-underline">{{$item->date}}</a> &nbsp &nbsp &nbsp &nbsp &nbsp
                            <a href="" class="ml-5 font-weight-bold tw-no-underline">Read more</a>
                        </div>
                        <p class="tw-text-sm text-muted mt-4">
                            <i class="bi bi-eye"></i>
                            2,830
                        </p>
                        <img src="{{$item->latest_news_url}}" class="img-fluid position-absolute shadow d-none d-lg-block"
                             style="width: 150px;height:250px;object-fit: cover;object-position: top;top: -70px;right: 20px;"
                             alt="">
                    </div>

                @endforeach

            </div>

        </div>
    </div>
</section>

<!-- programs -->

<section id="program">
    <div class=" position-relative overflow-hidden">

        <div class="container">
            <!-- <button class="btn text-white pr-5 rounded-0 bg-primary text-left" style="margin-left: 120px;">
            Programs
        </button> -->

            <a href="" class="btn tw-rounded-none bg-primary btn-lg text-white tw-pr-10 mx-md-5 mx-2 px-5"
               style="margin-left: 120px;">
                Programs
            </a>

            <div class="programs mt-5 mb-5">

                @foreach($programs as $item)

                    <div class="card border-0 rounded-0 me-5">
                        <div class="d-flex align-items-center  justify-content-center" style="background-image:
                     linear-gradient(180deg, rgba(8, 1, 46, 0.5) 0%, rgba(103, 97, 179, 0.5) 100%) ,
                    url('{{$item->programs_url}}');  height: 200px;object-fit: cover;background-size: cover;">
                            <h4 class="text-white text-uppercase">{{$item->title}}</h4>
                        </div>
                        <div class="card-body px-0 ">
                            <div class="card-text small position-relative">
                                <small>

                                    {{$item->description}}
                                </small>
                                <a href="#" style="bottom:0;right:0"
                                   class="px-3 small text-right text-warning my-2 border-left py-0 rounded-0 ml-2 position-absolute">
                                    <br> Apply
                                    Now</a>
                            </div>

                        </div>
                    </div>

                @endforeach

            </div>


        </div>


        <img src="{{ asset("assets/img/circle_left.png") }}"
             class="img-fluid d-none d-md-block position-absolute img-event-left" alt=""/>
        <img src="{{ asset("assets/img/circle_right.png") }}"
             class="img-fluid d-none d-md-block position-absolute img-event-right" alt=""/>

    </div>
</section>

<!-- social activities -->

<section id="social_activities">
    <div class=" position-relative overflow-hidden">

        <div class="container">

            <a href="" class="btn tw-rounded-none bg-primary btn-lg text-white tw-pr-10 mx-md-5 mx-2 px-5 mb-4">
                Social Activities
            </a>
            <div class="tw-mx-8">
                @foreach($activities as $item)
                    <div class="card mb-5 border-0">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="tw-w-full" src="{{$item->social_activities_url}}" alt="Home coming">
                            </div>
                            <div class="col-md-8">
                                <div
                                    class="card-body py-md-0 px-0 mx-md-4 border-bottom tw-border-[#005CBB] tw-border-2 tw-h-full">
                                    <div class="tw-w-full md:tw-w-72 mb-4">
                                        <h5 class="card-title">{{$item->title}}</h5>
                                        <p class="card-text tw-text-sm">
                                            {{$item->description}}
                                            <a href="" class="tw-no-underline">Alumni is the best</a>
                                        </p>
                                    </div>

                                    <p class="card-text tw-text-xs mb-0">
                                        <span class="text-muted">{{$item->date}}</span>
                                        <a class="px-3 small text-right tw-text-[#D69F12] my-2  mb-0 position-relative ml-5"
                                           href="">
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
</section>



<!--  opportunities  -->

<section id="opportunities">
    <div class="tw-bg-[#F8F8F8] tw-py-5">
        <div class="">

            <div class="tw-mt-10 mb-5">
                <h3 class="tw-text-[#000000] tw-tracking-wide font-weight-bold text-center tw-flex justify-content-center align-items-center position-relative tw-text-4xl">
                    <span>OPPORTUNI</span>
                    <span class="py-1 pl-2  tw-bg-[#005CBB] tw-bottom-0 tw-block pr-4 text-white">
                        TIES
                    </span>
                </h3>
            </div>
            <div class="list-group list-group-flush">
                @foreach($opportunity as $item)
                    <div class="list-group-item card bg-light mb-3 rounded-0">
                        <div class="container">
                            <div class="row no-gutters ">
                                <div class="col-md-4">
                                    <img class="tw-w-full" src="{{$item->opportunities_url}}" alt="Home coming">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body py-md-0 px-0 mx-md-4  tw-h-full">
                                        <div class="tw-w-full md:tw-w-72 mb-4">
                                            <h3 class="card-title">{{$item->title}}</h3>
                                            <p class="card-text tw-text-sm mt-4">
                                                {{$item->description}}
                                                <a href="" class="tw-no-underline">Alumni is the best</a>
                                            </p>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <small class="text-muted small mb-0">{{$item->date}}</small>
                                            <button class="btn tw-bg-[#D69F12] rounded-0 mb-1 ml-5 text-white">
                                                Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center pagination-sm">
                    <li class="page-item disabled">
                        <a class="page-link  tw-bg-transparent border-0 px-3 text-muted tw-font-semibold">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item ">
                        <a class="page-link  tw-bg-transparent border-0 px-3  text-dark tw-font-semibold" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link tw-bg-transparent border-0 px-3 text-muted tw-font-semibold" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link tw-bg-transparent border-0 px-3 text-muted tw-font-semibold" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link tw-bg-transparent border-0 px-3 text-muted tw-font-semibold" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link tw-bg-transparent border-0 px-3 text-muted tw-font-semibold" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link tw-bg-transparent border-0 px-3 text-dark tw-font-semibold" href="#">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</section>

<!-- footer -->

<div class="p-5"
     style="background-image:url('{{ asset("assets/img/auca_logo.png") }}');  background-size: contain;background-repeat:no-repeat;background-position:center;background-color: #3B5978">

    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <img src="{{ asset("assets/img/transparent_logo.svg") }}" class="tw-h-28 tw-w-28 tw-object-contain"
                 alt="logo"/>
            <a href="#"
               class="bg-white tw-h-10 tw-w-10 rounded-circle d-flex justify-content-center align-items-center">
                <i class="bi bi-chevron-up"></i>
            </a>
        </div>
        <div class="row text-white my-3">
            <div class="col-lg-4 my-3">
                <h4>Contact us</h4>
                <div class="d-flex  flex-column tw-space-y-3">
                    <a href="" class="text-white small d-block">
                        <span class="tw-text-gray-400 tw-no-underline">Tel:</span>
                        <span class="tw-no-underline">0788 000 0000</span>
                    </a>
                    <a href="" class="text-white small d-block">
                        <span class="tw-text-gray-400 tw-no-underline">Fax:</span>
                        <span class="tw-no-underline">51890</span>
                    </a>
                    <a href="" class="text-white small d-block">
                        <span class="tw-text-gray-400 tw-no-underline">Email:</span>
                        <span class="tw-no-underline"> aucaalumni@auca.rw</span>
                    </a>
                    <a href="" class="text-white small d-block">
                        <span class="tw-text-gray-400 tw-no-underline">Website:</span>
                        <span class="tw-underline tw-no-underline"> www.aucalumni.rw</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 my-3">
                <h4>Stay Up to date</h4>
                <p class="tw-text-gray-400 tw-text-xs">
                    Subscribe to this website so that you get
                    new updates on time everytime
                </p>
                <div class="mb-3">
                    <input type="email" class="form-control tw-rounded-lg border-0" placeholder="Enter your email"/>
                </div>
                <button class="btn tw-bg-[#D69F12] border-white w-100 rounded-0 text-white">
                    Subscribe
                </button>
            </div>
            <div class="col-lg-4 my-3">
                <h4>Social Media handles</h4>
                <a href="" class="text-white mt-5 d-block tw-no-underline">
                    @AucaAlumni
                </a>
                <div class="d-flex tw-space-x-2">
                    <a href="" class="tw-text-[#D69F12]">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="" class="tw-text-[#D69F12]">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="" class="tw-text-[#D69F12]">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="" class="tw-text-[#D69F12]">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mb-5 tw-mt-20 d-block bg-white border rounded-0"></div>

        <p class="text-white tw-text-sm text-center">
            &copy;Copyright 2022 AUCA ALUMINI - All rights reserved.
        </p>
    </div>
</div>


<script src="{{ asset("js/app.js") }}"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>

    $(function () {
        $(document).scroll(function () {
            var $nav = $(".navbar-fixed-top");
            $nav.toggleClass('bg-white', $(this).scrollTop() > $nav.height());
        });
    });

    //   upcoming events -->
    $('.events').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        dots: true,
        speed: 300,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                }
            }
        ]
    });

    //   programs -->
    $('.programs').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        dots: true,
        speed: 300,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                }
            }
        ]
    });

    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>

@yield('content')

</body>

</html>
