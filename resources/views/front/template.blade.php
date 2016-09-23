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
            <p class="text-center"><small>Copyright &copy; Momo</small></p>
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