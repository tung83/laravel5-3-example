
<div class=" row">
    <div class="slick">
    @foreach($services as $service_category) 
        <div >
                 {!! link_to(getCategorySlugLink('service', $service_category) , languageTransform($service_category, 'title')) !!}   
        </div>
    @endforeach
	
    </div>
</div>
