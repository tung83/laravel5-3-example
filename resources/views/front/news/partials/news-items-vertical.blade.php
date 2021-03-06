 <div id="news-items-horizontal" > 
    @foreach($newsList as $news) 
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
 </div>
<div class="clearfix"></div>
<div class="row text-center">
    {{$newsList->links()}}
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                             