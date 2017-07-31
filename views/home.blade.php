@extends('layouts.master')

@section('content')
    @include('partials.home.revolution')

    @include('partials.home.intro')
@endsection

@if(isset($testhome))
    @include('partials.home.what-we-do')
    @include('partials.home.about-us')
    @include('partials.home.why-choose-us')
    @include('partials.home.news')
@endif