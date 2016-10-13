@extends('front.contact.template', ['menus' => $menus, 'services' => $services
    ,'qtextContact' => $qtextContact, 'qtextIntroduction' => $qtextIntroduction
    , 'basicConfigs' => $basicConfigs])
@section('main')
    <div id="project-list" class="row text-center">        
        <h2 class="title">{{trans('front/contact.title')}}</h2>
        <p>{{ trans('front/contact.text') }}</p>           
    </div>
<div class="row">
    <div id="contact-leftside" class="col-md-6">
        
    </div>
    <div id="contact-rightside" class="col-md-6">
        @include('front.contact.partials.form')
    </div>    
</div>
<div class="clearfix"></div>
<div id="contact-google-map" class="row"> 
    
</div>
    
@endsection
