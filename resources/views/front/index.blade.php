@extends('front.template', ['menus' => $menus])
@section('main')
    @include('front.partials.services', ['services' => $services])
    @include('front.partials.projects', ['projectCategories' => $projectCategories, 'projects'=> $projects])
    @include('front.partials.news', ['newsCategories' => $newsCategories, 'news'=> $news])
    @include('front.partials.faqs', ['faqs'=> $faqs])
    @include('front.partials.recruits', ['recruits' => $recruits, 'qtextRecruit' => $qtextRecruit])
    @include('front.partials.customers',['customers' => $customers])
@endsection
