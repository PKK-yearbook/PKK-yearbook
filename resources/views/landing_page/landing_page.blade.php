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
        input {
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="container h-100 d-flex align-items-center justify-content-center"
        style="padding-top: 250px; font-family: 'Goldman', sans-serif;">
        <div class="row d-flex justify-content-center align-items-center accordion ">
        <div class="col" style="text-align: center; align-items: center;  ">
            <h2 style="color:white">IDENTIFICATION VERIFICATION HERE</h1>
        </div>
    </div>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>