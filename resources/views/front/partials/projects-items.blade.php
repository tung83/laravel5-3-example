<div class="project ">
    <div class="row text-center">        
        <h2 class="title">{{trans('front/site.projects')}}</h2>
    </div>
    <div class="row text-center project-category">
        <ul class="list-inline list-inline-sm">
            @foreach($projectCategories as $projectCategory) 
            <li>
                <a href="{{ url(getCategorySlugLink('project', $projectCategory)) }}">
                    {{languageTransform($projectCategory, 'title')}}  
                </a>
            </li>
            @endforeach
        </ul
    </div>
    <div class="clear"/>
    <div class='service-leftside'>

    </div>
    <div class='service-rightside'>
        @include('front.partials.project-items')
    </div>
</div>