<div class="faqs row">
    <div id="faqs-right" class="col-md-7">
        @foreach($faqs as $index => $faq) 
            <div class="col-md-4 faq-{{$index%3}}">
                <a href="{{ url(getItemSlugLink('faq', $faq)) }}">
                   {{languageTransform($faq, 'title')}}  
                </a>
            </div>
        @endforeach        
    </div>
</div>