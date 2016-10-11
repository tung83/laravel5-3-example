<div class="customer row">
    <div class="col-md-9"
        @foreach($customers as $customer) 
            <div class="col-md-4">
                <a href="{{ url(getCategorySlugLink('customer', $customer)) }}">
                   {{languageTransform($customer, 'title')}}  
                </a>
            </div>
        @endforeach        
    </div>
</div>