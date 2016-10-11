@extends('front.project.template', ['menus' => $menus, 'services' => $services
    ,'qtextContact' => $qtextContact, 'qtextIntroduction' => $qtextIntroduction
    , 'basicConfigs' => $basicConfigs])
@section('main')
    @include('front.project.partials.projects', ['projectCategories' => $projectCategories, 'projects'=> $projects])
@endsection
