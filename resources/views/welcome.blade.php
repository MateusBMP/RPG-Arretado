@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
@endsection

@section('script')
    <script src="{{ asset('js/welcome.js') }}" defer></script>
@endsection

@section('content')
    <div class="vh-100 d-flex align-items-center justify-content-center">
        <div class="text-center">
            <div class="d-flex justify-content-end mr-n4">
                <x-connected-user user="{{ Auth::user() }}" />
            </div>

            <div class="app-name display-2 mb-4">
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