@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection

@section('script')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endsection

@section('content')
    <welcome-view></welcome-view>
@endsection