<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ trans('front/site.title') }}</title>
        <meta name="description" content="">    
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/logo.png') !!}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=latin-ext" rel="stylesheet">

        @yield('head')

        {!! HTML::style('css/slick.css') !!}
        {!! HTML::style('css/front.css') !!}
        {!! HTML::style('css/front_style.css') !!}
    </head>
  <body>
    <div class="contact-page container">
        <header class="row">
              
            <!--http://bootsnipp.com/snippets/featured/expanding-search-button-in-css-->
            
            <div id="header-top" class="row pull-right clearfix">                
                <div class="pull-right">
                    <ul>
                        <li>
                             {!! (session('locale') == 'vi') ? link_to('/', 'VI', array('class' => 'active')) : link_to('language/vi', 'VI') !!}
                         </li>
                         <li>
                             <span>|</span>
                         </li>
                         <li>                  
                             {!! (session('locale') == 'vi') ? link_to('language/en', 'ENG') : link_to('#', 'ENG', array('class' => 'active')) !!}
                         </li>
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

            <div id="flags" class="text-center"></div>
            <div id="header-bottom">
                <div id="logo">
                    <a href="{{ route('home') }}"/>
                </div>  
                <div id="header-right-bottom" class="pull-right">
                    <span><i class="fa fa-phone"></i> 0123.456.789</span>
                    <span><i class="fa fa-commenting-o"></i>&nbsp;CHAT ONLINE</span> 
                </div>
                <nav class="navbar navbar-default">
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
                                <li class="{{ $menu->e_view == 'contact' ? 'active' : ''}}">                            
                                    {!! link_to(languageTransform($menu, 'view'), languageTransform($menu, 'title')) !!}                            
                                </li>
                            @endforeach                    
                        </ul>
                    </div>
                </nav>
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

    </div>
        <footer class="container">            
            @include('front.footer', ['services' => $services, 'qtextContact' => $qtextContact
            , 'qtextIntroduction' => $qtextIntroduction
            , 'basicConfigs' => $basicConfigs])               
        </footer>

        {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') !!}
        {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}
        {!! HTML::script('js/slick.js') !!}
        <script>
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#logout').click(function(e) {
                    e.preventDefault();
                    $('#logout-form').submit();
                })
                
                $('.slick').slick({
                    dots: false,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    responsive: [
                      {
                        breakpoint: 1024,
                        settings: {
                          slidesToShow: 3,
                          slidesToScroll: 1,
                          infinite: true,
                          dots: true
                        }
                      },
                      {
                        breakpoint: 600,
                        settings: {
                          slidesToShow: 2,
                          slidesToScroll: 1
                        }
                      },
                      {
                        breakpoint: 480,
                        settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1
                        }
                      }
                      // You can unslick at a given breakpoint now by adding:
                      // settings: "unslick"
                      // instead of a settings object
                    ]
                  });

            });
        $(function() {
            var divh=$('.service-sum').height();
            $('.service-sum p').each( function( index, element ){
                while ($(this).outerHeight()>divh) {
                    $(this).text(function (index, text) {
                    return text.replace(/\W*\s(\S)*$/, '...');
                });
            }
            });
            $( ".slick-slide" ).hover(
                function() {
                  $( this ).find( "h5, p" ).css( "color", "#ffca9d" );
                },function() {
                  $( this ).find( "h5, p" ).css( "color", "" );
                }
              );
        });
        
        /*==================== PAGINATION =========================*/
        $(document).on('click','#contact-category-content .pagination a', function(e){
                e.preventDefault();               
                var valuesPart = $(this).attr('href').match(/([0-9]+)\?page=([0-9]+)$/g);  
                var values = valuesPart[0].split('?page=');
                var id = values[0];
                var page = values[1];
                 getProjects(id, page);
        });

        function getProjects(id, page){
                $.ajax({
                    url: '{{ url('/ajax/contact') }}' + '?pId=' + id + '&page=' + page,
                    type: 'GET'
                }).done(function(data){
                        $('#contact-category-content').html(data);
                })
                .fail(function() {                            
                });
        }
        
        $(document).on('click','#contact-category .list-inline a', function(e){
                e.preventDefault();                
                $('#contact-category .list-inline a').removeClass('active');
                $(this).addClass('active');
                var id = $(this).attr('href').match(/([0-9]+)$/g)[0];  
                getProjectCategory(id);
        });

        function getProjectCategory(id){
                $.ajax({
                    url: '{{ url('/ajax/contact') }}' + '?pId=' + id,
                    type: 'GET'
                }).done(function(data){
                        $('#contact-category-content').html(data);
                })
                .fail(function() {                            
                });
        }
        
        /*==================== google maps =========================*/
        function initMap() {
          createGoogleMap('contact-google-map');
          createGoogleMap('google-map');
        }         

        function createGoogleMap(id){
          var lequangdinh = {lat: 10.818794, lng: 106.689732};
          var lequangdinhCenter = {lat: 10.8195, lng:  106.689732};
        var map = new google.maps.Map(document.getElementById(id), {
        zoom: 17,
        mapTypeControl: false,
        fullscreenControl: true,
        streetViewControl: false,
        center: lequangdinhCenter
      });
      var marker = new google.maps.Marker({
        position: lequangdinh,
        map: map,
        title: '624 Lê Quang Định'
      });
      var lequangdinhContentString = 
            '<p style="color: #ed1c24">PS MEDIA CO. LTD</p>' +
            '<a  target="_blank" href="https://www.google.com/maps/dir//624+L%C3%AA+Quang+%C4%90%E1%BB%8Bnh,+ph%C6%B0%E1%BB%9Dng+1,+G%C3%B2+V%E1%BA%A5p,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.8189622,106.6887449,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x317528ef6ad85a59:0x42754d325a8b55a6!2m2!1d106.6897102!2d10.8188471!3e0">Get direction</a>';

        var infowindow = new google.maps.InfoWindow({
          content: lequangdinhContentString
        });
        infowindow.open(map, marker);
        }
                
        </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVWAnZRS56JnP5Nr5otnuzg47TsmJoKBM&callback=initMap">
    </script>
        @yield('scripts')
    <script type="text/javascript" src="{!! asset('js/scroll-nav-fixed.js') !!}"></script>
  </body>
</html>