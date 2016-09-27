
<div class="row">
    @foreach($services as $service_category) 
        <div class="col-md-2">
                 {!! link_to(getCategorySlugLink('service', $service_category) , languageTransform($service_category, 'title')) !!}   
        </div>
    @endforeach
</div>