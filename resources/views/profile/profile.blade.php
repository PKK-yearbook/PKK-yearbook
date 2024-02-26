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

        /* .container{
            margin: 0;
            padding: 0;
        } */

        .anu {
            border-right: 3px solid rgb(87, 87, 87);
        }
    </style>
</head>

<body>
    {{-- <div class="container"> --}}
    <div class="row" style="heigt:300px; background-color:#4A53A4; color: white;">
        <div class="col" style="boreder">
            <img src="{{ asset('img/globe.png') }}" alt="" width="100px" class="pt-3 pb-3 ps-3">
        </div>
        <div class="col">
            <h3 class="pt-5 pb-2">CENTRAL INTELIGENT DEPARTMENT</h3>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col anu">
            <div class="row">
                <div class="col">
                    <p class="pt-3 ps-5">NAME:</p>
                    <p class="ps-5">CODE:</p>
                    <p class="ps-5">DEPARTMENT:</p>
                </div>
                <div class="col">
                    <p class="pt-3 ps-1">John Doe</p>
                    <p class="ps-1">023</p>
                    <p class="ps-1">RE</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="pt-3 ps-5">MESSAGE:</p>
                    <p class="ps-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur at alias
                        quisquam aut illum libero. Dignissimos vitae totam voluptas debitis praesentium. Deleniti,
                        praesentium vel?</p>
                </div>
            </div>
        </div>

        <div class="col d-flex flex-column align-items-center">
            <img src="{{ asset('img/winji.jpg') }}" alt="" width="270px" style="border: 2px solid #000;">
            <img src="{{ asset('img/barcode.png') }}" alt="" width="270px" height="70px" class="pt-2">
        </div>
    </div>

</body>

</html>
