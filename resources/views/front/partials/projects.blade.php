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
    <div class="row">
    <div id='project-leftside'class="col-md-4">

    </div>
        <div id='project-rightside' class="col-md-8">
            @include('front.partials.project-items',['projects' => $projects])
        </div>
    </div>
</div>