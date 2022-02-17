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
                    <p class="text-dark">Halo username</p>
                    <h3 class="text-dark">Selamat datang kembali dan bergabung</h3>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light navbar-light mt-3 border-top ">
                        <div class="container">
                                <!-- Left Side Of Navbar -->
                                <ul class="d-flex justify-content-center" style=" margin-top: 30px; text-transform: uppercase; ">
                                    <li class="nav-link mr-5 hover">
                                        <a href="{{route('dashboard.index')}}" class="nav-link text-dark">Dashboard</a>
                                    </li>
                                    <li class="nav-link mr-5 hover">
                                        <a href="{{route('barang.index')}}" class="nav-link text-dark">Daftar Barang</a>
                                    </li>
                                    <li class="nav-link mr-5 hover">
                                        <a href="{{route('transaksi.index')}}" class="nav-link text-dark">Transaksi</a>
                                    </li>
                                    <li class="nav-link mr-5 hover">
                                        <a href="{{route('pengembalian.index')}}" class="nav-link text-dark">Pengembalian</a>
                                    </li>
                                    <li class="nav-link dropdown">
                                        <a class="nav-link dropdown-toggle text-dark" role="button" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                            Laporan
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"  style="text-transform: none">
                                            <a href="{{route('laporan.item')}}" class="dropdown-item">Daftar Barang</a>
                                            <a href="{{route('laporan.transaksi')}}" class="dropdown-item"> Transaksi</a>
                                            <a href="{{route('laporan.return')}}" class="dropdown-item">Pengembalian</a>
                                            <a href="{{route('laporan.dashboard')}}" class="dropdown-item">Dashboard</a>
                                        </div>
                                    </li>
                                </ul>  
                        </div>
                    </nav>
                </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
