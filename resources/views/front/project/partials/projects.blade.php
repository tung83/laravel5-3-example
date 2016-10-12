<div class="project row">
    <div class="container">
        <div id="project-list" class="row text-center">        
            <h2 class="title">{{trans('front/site.projects')}}</h2>
        </div>
        <div id="project-category" class="row text-center ">
            <ul class="list-inline list-inline-sm">
                @foreach($projectCategories as $index => $projectCategory) 
                <li>
                    <a href="{{ url(getCategorySlugLink('project', $projectCategory)) }}"
                       class="{{ $index ==  0 ? 'active' : ''  }}">
                       {{languageTransform($projectCategory, 'title')}}  
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="clear">
        </div>
        <div id="project-category-content">
            @include('front.project.partials.project-category',['projectCategory' => $projectCategories[0],'projects' => $projects])   
        </div>
    </div>
</div>