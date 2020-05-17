@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection

@section('script')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endsection

@section('content')
    <welcome-view :connected="{{ Auth::check() ? 1 : 0 }}"></welcome-view>
@endsection