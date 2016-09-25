@extends('front.template', ['menus' => $menus])
@section('main')
    @include('front.partials.services')
    @include('front.partials.projects')
    @include('front.partials.news')
    @include('front.partials.faqs')
    @include('front.partials.recruits')
    @include('front.partials.customers')
@endsection
