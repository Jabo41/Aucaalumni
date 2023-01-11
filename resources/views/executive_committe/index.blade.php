<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset("css/tailwind.css") }}">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href="{{asset('assets/auca/css/style.css')}}" type="text/css" rel="stylesheet">
    <title>Executive Committee</title>
    <style>


        <!--     Draw small incomplete circle   -->
        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 1px solid #000;
            position: relative;
        }
        .circle::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 1px solid #000;
            border-right: none;
            border-bottom: none;
            transform: rotate(-45deg);
        }
        .circle span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>



<div class="container justify-content-center text-center align-items-center bg-white shadow-lg my-5">
    <div class="row">
        <a href="#" class="bg-primary text-white text-decoration-none w-25 text-center m-5 py-2">Excutive Comitte</a>
    </div>

    <div class="row p-5 gap-3">
        <div class="col-lg-3">
            <div class="tw-h-32 tw-w-36 d-flex justify-content-center align-items-center p-1"
                 style="border-left: 10px solid red;border-top: 10px solid red;border-right: 10px solid red; border-top-left-radius: 100%;border-top-right-radius: 0%;">
                <div  class="rounded-circle position-relative d-flex text-center d-flex justify-content-center align-items-center border bg-primary tw-h-28 tw-w-28">
                    <span class="text-center text-white fw-bold">photo</span>
                    <div class="position-absolute w-25 border-2 border-danger top-0"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 justify-content-center align-items-center">
            <div class="rounded-circle bg-primary d-flex h-25 p-5 justify-content-center align-items-center w-25">
                <span class="text-center text-white fw-bold">photo</span></div>
        </div>
        <div class="col-lg-3">
            <div class="rounded-circle bg-primary d-flex h-25 p-5 justify-content-center align-items-center w-25">
                <span class="text-center text-white fw-bold">photo</span></div>
        </div>
    </div>

</div>
<script type='text/javascript'
        src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>
