<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('layouts.nav')
    <div class="jumbotron">
                <div class="container">
                    <p class="text-white">Halo username</p>
                    <h3 class="text-white">Selamat datang kembali dan bergabung</h3>
                </div>
            </div>
        </div>
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="margin-top: -30px">
                <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{route('dashboard.index')}}" class="nav-link text-dark">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('barang.index')}}" class="nav-link text-dark">Daftar Barang</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('transaksi.index')}}" class="nav-link text-dark">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pengembalian.index')}}" class="nav-link text-dark">Pengembalian</a>
                </li>
            </ul>
        </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
