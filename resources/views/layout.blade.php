<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blog WebNL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
</head>
<body>
<header>
    <div class="container">
        <a href="" class="navbar-brand">
            <img src="{{ asset('images/navbar-brand.png') }}" alt="navbar-brand">
        </a>
    </div>
</header>
<main>
    <div class="hero-image">
        <img src="{{ asset('images/hero-image-1.jpeg') }}" alt="hero-image-1">
    </div>
    <div class="container mt-5">
        @yield('content')
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
