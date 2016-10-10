 <div class="row footer-details clearfix">
                    <div id="footer-company-info" class="col-sm-3">                
                        <div id="company-info">
                            <img alt="company name" src="{{asset('img/footer-small-company-name.png')}}">                           
                        </div>
                        <div id="address-details" style="color: #bababa">
                            <p class="location">Cao ốc Bùi Đình Tuý, Phường 24, Quận Bình Thạnh.</p>
                            <p class="phone">Phone: <strong>3-512-8400</strong> ( 3 lines )</p>
                            <p class="hotline">Hotline: 0123.456.7898</p>
                            <p class="fax">Fax:&nbsp;<span style="line-height: 20.8px">3-512-8400</span></p>
                            <p class="mst">MST: 123456789</p>
                            <p class="email">Email: <a href="mailto:info@emsvn.com">info@emsvn.com</a></p>
                            <p class="website">Website: <a href="mailto:info@emsvn.com">info@emsvn.com</a></p>
                        </div>       
                    </div>
                    <div id="google-map" class="col-sm-3">      
                        {!! Mapper::render() !!} 
                     </div>                                 
                    <div id="footer-introduction" class="col-sm-3">
                        <a href="{{ url(trans('front.site.introduction')) }}">
                            <img alt="introduction" src="{{asset('img/footer-introduction.png')}}">   
                            <p>To tweak your lock screen to your liking, 
                                select the Start Start icon button, then select Settings Personalization Lock screen. Try changing the background to a favorite photo or slide show, or choose any </p>
                        </a>
                    </div>                              
                    <div id="footer-services-links" class="col-sm-3">
                        <ul id="footer-social-items">
                            <li>
                                <a class="footer-facebook"></a>
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