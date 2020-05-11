<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>{{ config("app.name") }}</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <div class="vh-100 d-flex align-items-center justify-content-center">
                @if (Route::has('login'))
                    <div class="mt-3 mr-2 links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
    
                <div class="text-center">
                    <div class="display-2 mb-4">
                        {{ config("app.name") }}
                    </div>
    
                    <div class="links">
                        <a href="#">Mesa</a>
                        <a href="#">Fichas</a>
                        <a href="#">Arquivos</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
