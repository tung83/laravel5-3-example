<div class="recruit row">
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