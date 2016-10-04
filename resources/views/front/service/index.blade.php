@extends('front.template', ['menus' => $menus])
@section('main')
    @include('front.partials.services', ['services' => $services])
@endsection
