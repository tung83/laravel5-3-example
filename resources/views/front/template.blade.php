<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ trans('front/site.title') }}</title>
        <meta name="description" content="">    
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/logo.png') !!}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        @yield('head')

        {!! HTML::style('css/front.css') !!}
        {!! HTML::style('css/front_style.css') !!}
    </head>
  <body>
    <div class="container">
        <header>
            <!--http://bootsnipp.com/snippets/featured/expanding-search-button-in-css-->
            
            <div id="header-top" class="row pull-right clearfix">                
                <div class="pull-right">
                     <ul>
                        @if(session('locale') == 'vi')
                            <li>
                                {!! link_to('/', 'VI', array('class' => 'active')) !!}
                            </li>
                            <li>
                                <span>|</span>
                            </li>
                            <li>                  
                                {!! link_to('language/en', 'ENG') !!}
                            </li>
                        @else
                            <li>                                                           
                                {!! link_to('language/vi', 'VI') !!}
                            </li>
                            <li>
                                <span>|</span>
                            </li>
                            <li>                               
                                {!! link_to('#', 'ENG', array('class' => 'active')) !!}
                            </li>
                        @endif
                    </ul>
                </div>         
                <div id="search-top">
                    <form action="" class="search-form">
                        <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </form>
                </div>       
            </div>
             <div id="logo">
                <a href="/"/>
            </div>                 

            <div class="brand">{{ trans('front/site.title') }}</div>
            <div class="address-bar">{{ trans('front/site.sub-title') }}</div>
            <div id="flags" class="text-center"></div>
            <div id="header-bottom">
                <nav class="navbar navbar-default pull-left">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">{{ trans('front/site.title') }}</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            @foreach( $menus as $menu )
                            <li>                            
                                {!! link_to($menu->view, (session('locale') == 'vi') ? $menu->title : $menu->e_title) !!}                            
                            </li>
                            @endforeach                    
                        </ul>
                    </div>
                </nav>
                <div id="header-right-bottom" class="pull-right">
                    <span><i class="fa fa-phone"></i> 0123.456.789</span>
                    <span><i class="fa fa-commenting-o"></i>&nbsp;CHAT ONLINE</span> 
                </div>
            </div>
            @yield('header')    
        </header>

        <main>
            @if(session()->has('ok'))
                @include('partials/error', ['type' => 'success', 'message' => session('ok')])
            @endif  
            @if(isset($info))
                @include('partials/error', ['type' => 'info', 'message' => $info])
            @endif
            @yield('main')
        </main>

        <footer>
            @yield('footer')
                <div class="row footer-details clearfix">
                    <div id="footer-company-info" class="col-sm-3">                
                        <div id="company-info">
                            <img alt="" src="/file/ckfinder/userfiles/images/logo.png" style="height: 52px; width: 177px">                           
                        </div>
                    <hr>
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
                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">embed google map</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(10.818838,106.6897265),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(10.818838, 106.6897265)});infowindow = new google.maps.InfoWindow({content:"<b>PS Media Co.Ltd</b><br/>624 L&ecirc; Quang &#272;&#7883;nh, G&ograve; V&#7845;p, H&#7891; Ch&iacute; Minh, Vi&#7879;t Nam<br/> " });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>                        
                    </div>                                 
                    <div id="footer-introduction" class="col-sm-3">
                       
                    </div>                              
                    <div id="footer-services" class="col-sm-3">
                        <ul>
                            <li class="clearfix">
                                <a href="/trang-chu">Home</a>
                            </li>
                            <li class="clearfix">
                                <a href="/gioi-thieu">Giới Thiệu</a>
                            </li>
                            <li class="clearfix">
                                <a href="/tin-tuc">Tin Tức</a>
                            </li>
                            <li class="clearfix">
                                <a href="/dich-vu">Dịch Vụ</a>
                            </li>
                            <li class="clearfix">
                                <a href="/hoi-dap">Hỏi Đáp</a>
                            </li>
                            <li class="clearfix">
                                <a href="/download">Download</a>
                            </li>
                            <li class="clearfix">
                                <a href="/lien-he">Liên Hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="copyright text-center">
                        Copyright © 2016 <a>PSP Media</a>. All rights reserved
                </div>
        </footer>

        {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') !!}
        {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(function() {
                $('#logout').click(function(e) {
                    e.preventDefault();
                    $('#logout-form').submit();
                })
            });
        </script>

        @yield('scripts')

    <div class="container">
    <script type="text/javascript" src="{!! asset('js/scroll-nav-fixed.js') !!}"></script>
  </body>
</html>