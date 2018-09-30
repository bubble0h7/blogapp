<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
        <title>{{$tab}} - bubble0h7</title>
    </head>

    <body>
        <div class="container-fluid">
            @include('inc/navbar')
            <div class="container">
                @include('inc/messages')
            </div>
                @yield('content')
            
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html> 