 <div class="row footer-details clearfix">
                    <div id="footer-company-info" class="col-sm-3">                
                        <div id="company-info">
                            <img alt="company name" src="{{asset('img/footer-small-company-name.png')}}">                           
                        </div>
                        <div id="address-details" style="color: #bababa">
                            {!! languageTransform($qtextContact, 'content')!!}
                        </div>       
                    </div>
                    <div id="google-map" class="col-sm-3">      
                        
                     </div>     

                    <div id="footer-introduction" class="col-sm-3">
                        <a href="{{ url(trans('front/site.introduction')) }}">
                            <img alt="introduction" src="{{asset('img/footer-introduction.png')}}">   
                            <p>{!! languageTransform($qtextIntroduction, 'content')!!}</p>
                            <p class="readmore">{{ trans('front/site.readmore')}}</p>    
                        </a>
                    </div>                              
     <?php  $facebookLink = $basicConfigs->first(function ($value, $key) {
            return $value['key'] == 'facebook';
            });
            $tweeterLink = $basicConfigs->first(function ($value, $key) {
            return $value['key'] == 'tweeter';
            });
            $googleplusLink = $basicConfigs->first(function ($value, $key) {
            return $value['key'] == 'googleplus';
            });?>
                    <div id="footer-services-links" class="col-sm-3">
                        <ul id="footer-social-items">
                            <li>
                                <a class="footer-facebook" href="{{url(languageTransform($facebookLink, 'content'))}}"  target="_blank"></a>
                            </li>
                            <li>
                                <a class="footer-tweeter" href="{{url(languageTransform($tweeterLink, 'content'))}}" target="_blank"></a>
                            </li>
                            <li>
                                <a class="footer-skype" target="_blank"></a>
                            </li>
                            <li>
                                <a class="footer-goole-plus" href="{{url(languageTransform($googleplusLink, 'content'))}}" target="_blank"></a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                        <ul id="footer-services">
                            @foreach($services as $service_category)   
                                 <li>
                                     <a href="{{ url(getCategorySlugLink('service', $service_category)) }}">
                                         {{languageTransform($service_category, 'title')}} 
                                     </a>                             
                                 </li>
                             @endforeach	                           
                        </ul>
                    </div>
                </div>
                <div class="row copyright text-center">
                        Copyright © 2016 <a>PS Media</a>. All rights reserved
                </div>