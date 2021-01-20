<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>MODEL MIGRATION AND API</title>
    </head>

    <body>
        
        @include('partials.header')

        @yield('content')

    </body>

</html>