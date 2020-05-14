<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>{{config('app.name', 'FREE_LEARNING_FOR_YOU')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.meseges')
           @yield('content')
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>

    </body>
</html>
