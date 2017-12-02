@extends('landing.front.layout')

@section('content')
    @include('landing.front.common.navigation')
    @include('landing.front.content.home')
    @include('landing.front.content.about')
    @include('landing.front.content.service')
    @include('landing.front.content.portfolio')
    @include('landing.front.content.client')
    @include('landing.front.content.team')
    @include('landing.front.common.footer')
@endsection
