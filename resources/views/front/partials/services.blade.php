
<div class="service row">
    <div class="slick text-center">
        @foreach($services as $service_category) 
            <a href="{{ url(getCategorySlugLink('service', $service_category)) }}">
                <i class="service-ico {{$service_category->icon}}">
                </i>
                <h4>
                    {{languageTransform($service_category, 'title')}}                
                </h4>
                <p>
                    {{languageTransform($service_category, 'sum')}}                   
                </p>        
            </a>
        @endforeach	
    </div>
</div>
