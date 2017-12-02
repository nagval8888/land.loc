@extends('landing.admin.layout')

@section('header')
    @include('landing.admin.common.header')
@endsection

@section('sidebar')
    @include('landing.admin.common.sidebar')
@endsection

@section('content')
    @include('landing.admin.menu.content.index')
@endsection

@section('footer')
    @include('landing.admin.common.footer')
@endsection
