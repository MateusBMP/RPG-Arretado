@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/mesa.css') }}" />
@endsection

@section('script')
    <script src="{{ asset('js/mesa.js') }}"></script>
@endsection

@section('content')
    <div class="mesa position-relative vh-100 vw-100 p-0 clearfix">
        <x-screen-loader></x-screen-loader>
        <x-aww-board></x-aww-board>
        <x-reference></x-reference>
        <user-icon-component class="position-absolute user-icon_mesa"></user-icon-component>
        <system-alert-component></system-alert-component>
    </div>
@endsection