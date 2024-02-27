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
    <!-- Styles -->
    <style>
        body {
            background-color: #2E2E2E;
        }


        .putih {
            position: absolute;
            width: 1250px;
            height: 300px;
            background-color: #F8F6F0;
            clip-path: polygon(25% 0%, 75% 0%, 100% 100%, 0% 100%);
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .kotak {
            width: 1250px;
            height: 500px;
            background-color: #F8F6F0;
            position: absolute;
            top: 94%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .logo {
            width: 150px;
            height: 150px;
            margin-left: 550px;
            margin-top: 60px;
        }
        

    </style>
</head>
<body>

    <div class="putih">
    <img src="{{ asset('img/logo_rpla.jpeg')}}" class="logo">
    <p style="margin-left:410px; margin-top:30px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit"</p>
    </div>
    <div class="kotak"></div>
</body>
</html>

