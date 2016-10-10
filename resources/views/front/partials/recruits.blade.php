<div class="recruit row">
    
    <div id="recruit-sum" class="col-md-6">
        <div class="left"> </div>
        <div class="right"> </div>
        <p> {{languageTransform($qtextRecruit, 'content')}} </p>
          
    </div>
    <ol>
        @foreach($recruits as $index => $recruit) 
            <li class="recruit-item item{{$index+1}}">
                <a href="{{ url(getCategorySlugLink('recruit', $recruit)) }}">
                   {{languageTransform($recruit, 'title')}}  
                </a>
            </li>
        @endforeach        
    </ol>
</div>