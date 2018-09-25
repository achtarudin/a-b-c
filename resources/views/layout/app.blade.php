<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Achtarudin-Port</title>
    <link rel="stylesheet" href="{!! secure_asset('css/app.css')!!}">
    <style>
    body{
        background-color: #fff; 
        background-image: 
        linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
        linear-gradient(#eee .1em, transparent .1em);
        background-size: 100% 1.2em;
        height: 100vh;
    }
    </style>
</head>
<body>  
    @yield('content')
    <script src="{{ secure_asset('js/app.js') }}"></script>
</body>
</html>