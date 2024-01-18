<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <link href="{{asset('logo_smkn1.png')}}">
    <!-- Styles -->
    <style>
        input {
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="container h-100 d-flex align-items-center justify-content-center"
        style="padding-top: 10px; font-family: 'Goldman', sans-serif;">
        <div class="row d-flex justify-content-center align-items-center accordion ">
        <div class="col" style="text-align: center; align-items: center;  ">
            <h1 style="color:white">THIS DOMAIN HAS BEEN SEIZED</h1>
            <h5 style="color:white">THE DOMAIN FOR THISYEARBOOK.COM HAS BEEN SEIZED BY THE COUNSIL OF [SCHOOL NAME HERE] PURSUANT TO A SEIZURE WARRANT ISSUED BY THE HEADMASTER OF [SCHOOL NAME HERE] UNDER THE AUTHORITY OF 36 P.D.R AS PART OF COORDINATED LAW ENFORCEMENT ACTION BY:</h5>
        </div>
        <div class="row d-flex justify-content-center align-items-center" style="background-image:linear-gradient(180deg, #09025D, #02206C); padding:90px;">
        <img src="{{ asset('img/logo_smkn1.jpg')}}" class="w-25">
            <h4 class="d-flex justify-content-center align-items-center" style="color:white; padding-top: 10px;">[SMK NEGERI 1 KOTA BEKASI]</h4>
        </div>
        <button type="submit" class="btn px-5" style="color: #2A7DAC"> [ VERIFY IDENTIFICATION HERE ]</button>
    </div>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>