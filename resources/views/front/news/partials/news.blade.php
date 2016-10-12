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
        <div id="news-category-content">
            <div class="row">
                <div class="col-md-4">
                    @include('front.news.partials.news-category',['newsCategory' => $newsCategories[0]])   
                </div>
                <div class="col-md-8">
                    @include('front.news.partials.news-items-horizontal',['newsList' => $newsList]) 
                </div>            
            </div>
            <div class="row">
                <div class="col-md-9">
                    @include('front.news.partials.news-items-vertical',['newsList' => $newsList]) 
                </div>
                <div class="col-md-3">
                    @include('front.news.partials.news-items-most-saw',['most_saw_newsList' => $most_saw_newsList])                     
                </div>
                
            </div>
        </div>
        
    </div>
</div>