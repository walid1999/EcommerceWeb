<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <script src="../js/app.js" defer></script>
        <script src="https://kit.fontawesome.com/45109b19e5.js" crossorigin="anonymous"></script>
    </head>

    <body>
    @include('header')
    
    @yield('content')

    @include('footer')
    </body>

</html>

