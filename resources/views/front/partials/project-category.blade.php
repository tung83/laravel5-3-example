 <div class="row">
    <div id='project-leftside'class="col-md-5">
        <a href="{{ url(getCategorySlugLink('project', $projectCategory)) }}">                   
        <figure>
            <figcaption class="text-center">
                <p>
                    {{languageTransform($projectCategory, 'sum')}}  
                </p>
            </figcaption>
            {{ HTML::image('img/dyn-contens/'. $projectCategory->img, languageTransform($projectCategory, 'title'), array('class' => 'img-responsive center-block')) }}
            
        </figure>
        </a>
    </div>
    <div id='project-rightside' class="col-md-7">
        @include('front.partials.project-items',['projects' => $projects])
    </div>
</div>