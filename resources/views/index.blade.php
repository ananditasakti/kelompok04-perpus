<!DOCTYPE html>
<html lang="en">
    <head>
        
        <link href="{{ asset('css/app.css')}}" rel ="stylesheet">
        <script src="{{ asset('js/app.js')}}" defer></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="gambar/favicon.ico" type="image/x-icon">
        <title>Perpustakaan - Universitas Islam Balitar | @yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
        <script type="text/javascript" src="{{ asset('assets') }}/js/jquery.js"></script>
        <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.js"></script> 

    </head>

    <body>
        <div style="background:#ccc">
            @include('menu')
            @include('banner')
            @include('sidebar')
            @include('konten')
            @include('footer')
        </div>
    </body>
</html>