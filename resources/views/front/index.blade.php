@extends('front.template', ['menus' => $menus])
@section('main')
    @include('front.partials.services', ['services' => $services])
    @include('front.partials.projects', ['projectCategories' => $projectCategories])
    @include('front.partials.news')
    @include('front.partials.faqs')
    @include('front.partials.recruits')
    @include('front.partials.customers')
@endsection
