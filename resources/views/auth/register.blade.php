<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Auca Alumni | Register</title>

    <!-- Scripts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>
<body>
{{--{{$errors}}--}}
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
            <div class="card-body   xl:tw-px-20 tw-px-10">
                <form action="{{ route('register') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="xl:tw-w-2/3">
                        <h5 class="mt-5 mb-3 fw-bolder tw-leading-loose tw-tracking-wider">
                            Create an account as an AUCA
                            Alumni
                        </h5>
                        <div class="mb-2 d-flex justify-content-between align-items-center">
                            <input type="search" class="bg-light tw-text-left tw-rounded-lg form-control border-0"
                                   id="search_student" name="student_id"
                                   placeholder="Enter student ID Number"/>
                            <button type="button" id="btnSearch"
                                    class="btn tw-bg-[#BB7000]  tw-rounded-lg text-white px-3 m-2 d-inline-flex align-items-center">
                                <span class="me-1 sm">Verify</span>
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.1875 11L12 6L7.1875 1M12 6L1 6L12 6Z" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="bg-light tw-text-left tw-rounded-lg form-control border-0 @error('first_name') is-invalid @enderror"
                                   name="first_name" id="first_name"
                                   placeholder="First Name" value="{{ old('first_name') }}" readonly  autocomplete="first_name" autofocus/>

                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <input type="text" class="bg-light tw-text-left tw-rounded-lg form-control border-0 @error('last_name') is-invalid @enderror" id="last_name"
                                   name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" readonly  autocomplete="last_name" autofocus/>

                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <input type="text" class="bg-light tw-text-left tw-rounded-lg form-control border-0 @error('phone_number') is-invalid @enderror"
                                   name="phone_number"
                                   placeholder="Phone Number" value="{{ old('phone_number') }}"  autocomplete="phone_number" autofocus/>

                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <input type="text" class="bg-light tw-text-left tw-rounded-lg form-control border-0 @error('email') is-invalid @enderror"
                                   name="email" placeholder="Username or email" value="{{ old('email') }}"  autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <input type="password" class="bg-light tw-text-left form-control border-0 @error('password') is-invalid @enderror"
                                   placeholder="Password"
                                   name="password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="col-md-6">
{{--                            <label for="password-confirm"></label>--}}
                            <input  type="password" class="bg-light tw-text-left tw-rounded-lg form-control border-0"
                                   name="password_confirmation" id="password-confirm"
                                   placeholder="Confirm Password"  autocomplete="new-password"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary w-100 fw-bold tw-rounded-lg">
                            SignUp
                        </button>
                    </div>
                    <div class="mb-3 text-center">
                        <span>If you already have an account, please </span>
                        <a href="{{ route('login') }}" class="tw-no-underline">
                            Login
                        </a>
                    </div>
                </form>
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

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>

    $(function () {
        $('#btnSearch').on('click', function (e) {
            let value = $('#search_student').val();
            $.ajax({
                url: '/api/get-student?id_number=' + value,
                method: 'GET',
                success: function (response) {
                    console.log(response);
                    $('#first_name').val(response.first_name);
                    $('#last_name').val(response.last_name);
                }, error: function () {
                    alert('Unable to find Student with that given ID number');
                }
            })
        });
    })
    // $( function() {
    //     var availableTags = [
    //         "ActionScript",
    //         "AppleScript",
    //         "Asp",
    //         "BASIC",
    //         "C",
    //         "C++",
    //         "Clojure",
    //         "COBOL",
    //         "ColdFusion",
    //         "Erlang",
    //         "Fortran",
    //         "Groovy",
    //         "Haskell",
    //         "Java",
    //         "JavaScript",
    //         "Lisp",
    //         "Perl",
    //         "PHP",
    //         "Python",
    //         "Ruby",
    //         "Scala",
    //         "Scheme"
    //     ];

    //     $( "#search_student" ).autocomplete({
    //         source: availableTags
    //     });
    // } );

    {{--    <script>--}}
    {{--        var availableTags = [];--}}
    {{--        $.ajax({--}}
    {{--        method:"GET",--}}
    {{--        url:"student-list",--}}
    {{--        success: function (response){--}}

    {{--    }--}}
    {{--    });--}}
    {{--        $( "#search_student" ).autocomplete({--}}
    {{--        source: availableTags--}}
    {{--    });--}}

    {{--</script>--}}
</script>

</body>
</html>
