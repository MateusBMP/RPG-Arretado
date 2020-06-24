@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/mesa.css') }}" />
@endsection

@section('script')
    <script src="{{ asset('js/mesa.js') }}"></script>
@endsection

@section('content')
    <div class="mesa position-relative vh-100 vw-100 p-0 clearfix">
        <x-aww-board />
        <x-reference />
    </div>
@endsection