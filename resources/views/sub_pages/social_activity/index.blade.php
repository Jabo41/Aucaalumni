<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    {{--    <link href="{{asset('assets/auca/css/font.css')}}" type="text/css" rel="stylesheet">--}}
    {{--    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>--}}
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <title>Auca Alumni | Latest News</title>
    <style>
        .rotated {
            transform: rotate(90deg); /* Equal to rotateZ(45deg) */


        }
    </style>
</head>
<body>

<div class="container bg-white shadow-lg my-5" style="border-radius: 20px;">
    <div class="row position-relative">
        <div class="col-11 p-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-5 ">
                        <img src="{{$details->social_activities_url}}" class="img-fluid">
                        <div class="d-flex flex-row py-2 gap-3 align-items-center"><h3>Kwibuka</h3><span
                                class="small text-muted">june 16<sup>th</sup>,2021</span></div>
                        <p class="text-justify">Kwibuka26: Rwandans commemorate the 1994 Genocide Against the Tutsi
                            Kigali, 7 April 2020 – Rwandans started on Tuesday the 26th Commemoration of the 1994
                            Genocide against the Tutsi. This also marked the beginning of the commemoration week and 100
                            days of remembrance.<br><br>

                            In a message to the nation, President Kagame noted that this year’s commemoration is
                            “challenging for survivors </p>

                    </div>
                    <div class="col-5">and families and for the country”, as they cannot “be together physically to
                        comfort one another”.<br><br>

                        “But the current unusual circumstances will not prevent us from fulfilling our obligation to
                        commemorate this solemn anniversary, honour those we lost, and console survivors,” President
                        Kagame said.<br><br>

                        and families and for the country”, as they cannot “be together physically to comfort one
                        another”.<br>

                        “But the current unusual circumstances will not prevent us from fulfilling our obligation to
                        commemorate this solemn anniversary, honour those we lost, and console survivors,” President
                        Kagame said.
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute end-0 top-0 bottom-0 tw-w-10 bg-primary text-center d-flex align-items-center justify-content-center"
             style="border-end-end-radius: 20px;border-start-end-radius: 20px;">
            <div class="rotated  text-white fw-normal tw-tracking-[.5rem] " style="white-space: nowrap;">SOCIAL ACTIVITIES</div>
        </div>
    </div>
</div>
<script type='text/javascript'
        src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</body>
</html>
