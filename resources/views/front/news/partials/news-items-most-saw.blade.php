 <div id="news-items-most-saw" class="clearfix" > 
      <div id="news-list" class="row text-center">        
            <h2 class="title">{{trans('front/site.news-mostsaw')}}</h2>
      </div>
    @foreach($most_saw_newsList as $news) 
        <div class="col-md-12">
           <a href="{{ url(getItemSlugLink('news', $news)) }}">
               <figure>
                   <div class="image-container">
                    {{ HTML::image('img/dyn-contens/'. $news->img, languageTransform($news, 'title'), array('class' => 'img-responsive center-block')) }}                   
                   </div>
                   <figcaption class="text-center">
                       <p>
                           {{languageTransform($news, 'title')}}  
                       </p>
                   </figcaption>
               </figure>
           </a>
        </div>
    @endforeach   
 </div>                                                                                                                                                                                                                                                                                                                                                                                                                                           