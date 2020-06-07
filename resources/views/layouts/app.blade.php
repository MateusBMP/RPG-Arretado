<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="app-name" content="{{ config("app.name") }}">
        <meta name="remember_token" content="{{ Auth::user()->remember_token ?? "" }}">

        <title>{{ config("app.name") }}</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @yield('style')
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>

        <script src="{{ asset('js/manifest.js') }}"></script>
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        @yield('script')
    </body>
</html>
