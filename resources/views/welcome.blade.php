@extends('layouts.app')

@section('content')
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
@endsection