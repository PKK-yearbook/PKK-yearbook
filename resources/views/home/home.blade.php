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
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: white;
        }

        .home {
            margin: 0;
            padding: 0;
            height: 100vh;
            /* Make the body fill the viewport height */
            background: linear-gradient(to bottom, white 55%, #E73131 45%);
            /* Gradient from white to red */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand ps-4" href="#">
            <img src="{{ asset('img/shh.png') }}" width="50" class="d-inline-block align-top" alt="">
        </a>
        <div class="collapse navbar-collapse justify-content-end pe-5 " id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active pe-5" href="#">GALERY</a>
                <a class="nav-item nav-link active pe-5" href="#">HOME</a>
                <a class="nav-item nav-link active pe-5" href="#">DEPARTMENT</a>
            </div>
        </div>
    </nav>

    <div class="home" style="position: relative; overflow: hidden;">
        <div class="row" style="padding-top: 100px">
            <div class="col">
                <p
                    style="font-size: 175px; color: white; text-shadow: -1px -1px 0 #000,  
                1px -1px 0 #000,  
               -1px 1px 0 #000,  
                1px 1px 0 #000;">
                    SATOE</p>
            </div>
            <div class="col d-flex flex-column align-items-left justify-content-center ps-5">
                <p style="">THE XX GEN OF</p>
                <p style="font-size: 25px; font-weight: bold; margin-top: -20px;">SMKN 1 KOTA BEKASI</p>
                <div class="row" style="margin-top: -15px;">
                    <div class="col">
                        <a href=""
                            style="display: inline-block; text-decoration: none; background-color: white; color: black; border: 1.5px solid black; border-radius: 10px; padding: 2px 10px; font-size:12px">contact</a>
                        <a href=""
                            style="display: inline-block; text-decoration: none; background-color: rgb(0, 0, 0); color:white; border: 1.5px solid black; border-radius: 10px; padding: 2px 15px; font-size:12px">about</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('img/spy.png') }}" width="500" style="position: absolute; bottom: 0;"alt="">
    </div>
</body>

</html>
