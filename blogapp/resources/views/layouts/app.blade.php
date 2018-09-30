<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
        <title>{{$title}} - bubble0h7</title>
    </head>

    <body>
        <div class="container-fluid">
            @include('inc.navbar')
            @yield('content')
        </div>
    </body>
</html> 