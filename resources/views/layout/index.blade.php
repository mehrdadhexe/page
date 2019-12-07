@extends('layout.app')

@section('header')
    @include('layout.header')
@endsection

@section('content')
    @yield('content')
@endsection

@section('footer')
    @include('layout.footer')
@endsection