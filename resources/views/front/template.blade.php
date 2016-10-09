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
    <div class="container">
        <header class="row">
             <div id="logo">
                <a href="{{ route('home') }}"/>
            </div>    
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

            <div class="brand">{{ trans('front/site.title') }}</div>
            <div class="address-bar">{{ trans('front/site.sub-title') }}</div>
            <div id="flags" class="text-center"></div>
            <div id="header-bottom">
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
                            <li>                            
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

        <footer>
            @yield('footer')
                <div class="row footer-details clearfix">
                    <div id="footer-company-info" class="col-sm-3">                
                        <div id="company-info">
                            <img alt="" src="" style="height: 52px; width: 177px">                           
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
                        {!! Mapper::render() !!} 
                     </div>                                 
                    <div id="footer-introduction" class="col-sm-3 pull-right">
                        <img alt="" src="" style="height: 52px; width: 177px">    
                        <p class="readmore">gioi thieu</p>
                    </div>                              
                    <div id="footer-services" class="col-sm-3">
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
                        <ul id="footer-services">
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
                        Copyright © 2016 <a>PS Media</a>. All rights reserved
                </div>
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
        $(document).on('click','#project-rightside .pagination a', function(e){
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                var id = $(this).attr('href').split('-p')[1];
                 getProjects(id, page);
        });

        function getProjects(id, page){
                $.ajax({
                    url: '{{ url('/ajax/project') }}' + '?pId=' + id + '&page=' + page,
                    type: 'GET'
                }).done(function(data){
                        $('#project-rightside').html(data);
                })
                .fail(function() {                            
                });
        }
        
        $(document).on('click','#project-category .list-inline a', function(e){
                e.preventDefault();                
                $('#project-category .list-inline a').removeClass('active');
                $(this).addClass('active');
                var id = $(this).attr('href').split('-p')[1];
                getProjectCategory(id);
        });

        function getProjectCategory(id){
                $.ajax({
                    url: '{{ url('/ajax/projectCategory') }}' + '?pId=' + id,
                    type: 'GET'
                }).done(function(data){
                        $('#project-category-content').html(data);
                })
                .fail(function() {                            
                });
        }
        
        
        /*==================== PAGINATION =========================*/
        $(document).on('click','#news-rightside .pagination a', function(e){
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                var id = $(this).attr('href').split('-p')[1];
                 getNews(id, page);
        });

        function getNews(id, page){
                $.ajax({
                    url: '{{ url('/ajax/news') }}' + '?pId=' + id + '&page=' + page,
                    type: 'GET'
                }).done(function(data){
                        $('#news-rightside').html(data);
                })
                .fail(function() {                            
                });
        }
        
        $(document).on('click','#news-category .list-inline a', function(e){
                e.preventDefault();                
                $('#news-category .list-inline a').removeClass('active');
                $(this).addClass('active');
                var id = $(this).attr('href').split('-p')[1];
                getNewsCategory(id);
        });

        function getNewsCategory(id){
                $.ajax({
                    url: '{{ url('/ajax/newsCategory') }}' + '?pId=' + id,
                    type: 'GET'
                }).done(function(data){
                        $('#news-category-content').html(data);
                })
                .fail(function() {                            
                });
        }
                
                
        </script>

        @yield('scripts')

    <div class="container">
    <script type="text/javascript" src="{!! asset('js/scroll-nav-fixed.js') !!}"></script>
  </body>
</html>