<div class="recruit row">
    <div class="col-md-9"
        @foreach($recruits as $recruit) 
            <div class="col-md-4">
                <a href="{{ url(getCategorySlugLink('recruit', $recruit)) }}">
                   {{languageTransform($recruit, 'title')}}  
                </a>
            </div>
        @endforeach        
    </div>
</div>