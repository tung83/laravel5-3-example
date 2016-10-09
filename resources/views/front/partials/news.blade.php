<div class="news row">
     <div class="container">
        <div id="news-list" class="row text-center">        
            <h2 class="title">{{trans('front/site.news-title')}}</h2>
        </div>
        <div id="news-category" class="row text-center ">
            <ul class="list-inline list-inline-sm">
                @foreach($newsCategories as $index => $newsCategory) 
                <li>
                    <a href="{{ url(getCategorySlugLink('news', $newsCategory)) }}"
                       class="{{ $index ==  0 ? 'active' : ''  }}">
                       {{languageTransform($newsCategory, 'title')}}  
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="clear">
        </div>
        <div id="news-category-content" class="container">
            @include('front.partials.news-category',['newsCategory' => $newsCategories[0],'news' => $news])   
        </div>
    </div>
</div>