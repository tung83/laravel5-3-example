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
                        {!! Mapper::render() !!} 
                     </div>                                 
                    <div id="footer-introduction" class="col-sm-3">
                        <a href="{{ url(trans('front.site.introduction')) }}">
                            <img alt="introduction" src="{{asset('img/footer-introduction.png')}}">   
                            <p>{!! languageTransform($qtextIntroduction, 'content')!!}</p>
                                
                        </a>
                    </div>                              
     <?php  $facebookLink = $basicConfigs->first(function ($value, $key) {
            return $value['key'] == 'facebook';
            });?>
                    <div id="footer-services-links" class="col-sm-3">
                        <ul id="footer-social-items">
                            <li>
                                <a class="footer-facebook" href="{{url($facebookLink->content)}}"></a>
                            </li>
                            <li>
                                <a class="footer-tweeter"></a>
                            </li>
                            <li>
                                <a class="footer-skype"></a>
                            </li>
                            <li>
                                <a class="footer-goole-plus"></a>
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