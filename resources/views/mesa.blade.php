@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/mesa.css') }}" />
@endsection

@section('script')
    <script src="{{ asset('js/mesa.js') }}"></script>
@endsection

@section('content')
    <x-aww-board type="principal" />
@endsection