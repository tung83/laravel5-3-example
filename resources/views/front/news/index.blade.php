@extends('front.news.template', ['menus' => $menus, 'services' => $services
    ,'qtextContact' => $qtextContact, 'qtextIntroduction' => $qtextIntroduction
    , 'basicConfigs' => $basicConfigs])
@section('main')
    @include('front.news.partials.news', ['newsCategories' => $newsCategories, 'newsList'=> $newsList])
@endsection
