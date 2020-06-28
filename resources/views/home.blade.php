@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection

@section('script')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endsection

@section('content')
    <div class="welcome-view">
        <div class="vh-100 d-flex align-items-center justify-content-center">
            <div class="text-center">
                <div class="d-flex justify-content-end mr-n4">
                    <user-icon-component class="user-icon_home" />
                </div>

                <div class="app-name display-2 mb-4 slide-out-blurred-top">
                    {{ config("app.name") }}
                </div>

                <div class="links">
                    <a href="{{ url('/login') }}">Conectar</a>
                    <a href="{{ url('/register') }}">Cadastre-se</a>
                </div>
            </div>
        </div>
    </div>
@endsection