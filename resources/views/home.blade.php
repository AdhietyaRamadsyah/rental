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
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

.body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="{{route('dashboard.index')}}">Home</a>
  <a href="{{route('barang.index')}}">Daftar Barang</a>
  <a href="{{route('transaksi.index')}}">Transaksi</a>
  <a href="{{route('pengembalian.index')}}">Pengembalian</a>
</div>

<div style="padding-left:16px">
  <h2>Waiting...</h2>
  <p>Some content..</p>
</div>

</body>
</html>