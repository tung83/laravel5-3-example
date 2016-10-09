<div class="faqs row">
    <div class="col-md-9"
        @foreach($faqs as $faq) 
            <div class="col-md-4">
                <a href="{{ url(getCategorySlugLink('news', $faq)) }}">
                   {{languageTransform($faq, 'title')}}  
                </a>
            </div>
        @endforeach        
    </div>
</div>