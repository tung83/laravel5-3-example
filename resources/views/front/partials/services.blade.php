
<div class="service row">
    <div class="slick text-center">
        @foreach($services as $service_category) 
            <a href="{{ url(getCategorySlugLink('service', $service_category)) }}">
                <i class="service-ico {{$service_category->icon}}">
                </i>
                <h5>
                    {{languageTransform($service_category, 'title')}}                
                </h5>
                <div class="service-sum">
                    <p>
                        {{languageTransform($service_category, 'sum')}}                   
                    </p>        
                </div>
            </a>
        @endforeach	
    </div>
</div>
