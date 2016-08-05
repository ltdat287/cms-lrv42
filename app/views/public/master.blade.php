<!doctype html>
<html lang="{{ Config::get('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ $title }}</title>

    {{ HTML::style(asset('assets/css/bootstrap.css')) }}
    {{ HTML::style(asset('assets/fonts/simple-line/css/simple-line-icons.css')) }}
    {{ HTML::style(asset('assets/fonts/themify-icons/themify-icons.css')) }}
    {{ HTML::style(asset('assets/fonts/font-awesome-4.6.3/css/font-awesome.min.css')) }}
    {{ HTML::style(asset('assets/vendo/owl-carousel/owl.carousel.css')) }}
    {{ HTML::style(asset('assets/vendo/owl-carousel/owl.carousel.css')) }}
    {{ HTML::style(asset('assets/vendo/owl-carousel/owl.theme.css')) }}
    {{ HTML::style(asset('css/public.css')) }}
    {{ HTML::style(asset('assets/css/style.css')) }}

    @yield('css')

    @if(Config::get('typicms.typekitCode'))
    <script type="text/javascript" src="//use.typekit.net/{{ Config::get('typicms.typekitCode') }}.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    @endif

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="@section('bodyClass'){{ $bodyClass }}@show">

    <a href="#content" class="sr-only">@lang('db.Skip to content')</a>

@if(Sentry::getUser() and Sentry::getUser()->hasAccess('admin') and ! Input::get('preview'))
    @include('_navbar')
@endif

    <header class="navbar-wrapper navbar-top">
        <div class="">
            <div id="topbar-wrapper">
    
                <div class="container">
                <div class="row">
                
                    <div class="col-md-8 col-sm-8 col-xs-12">
                    
                        <div class="topbar-left">
                            <ul class="list-inline">
                            <li><span class="topbar-label"><i class="fa fa fa-map-marker"></i></span><span class="topbar-hightlight">mTower – Số 4 Ngõ 151, Yên Lãng, Đống Đa, Hà Nội</span></li><li><span class="topbar-label"><i class="fa fa-phone"></i></span><span class="topbar-hightlight">1900 63 64 86</span></li><li><span class="topbar-label"><i class="fa  fa-clock-o"></i></span><span class="topbar-hightlight">Mon - Sat: 8:00 - 18:00</span></li>              </ul>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-4 col-sm-4 hidden-xs">
                    
                        <div class="topbar-right text-right">
                            <div class="st-social"><ul class="list-inline"><li><a class="fa fa-facebook" href="#" title="Facebook" target="_blank"></a></li><li><a class="fa fa-twitter" href="#" title="Twitter" target="_blank"></a></li><li><a class="fa fa-google-plus" href="#" title="Google Plus" target="_blank"></a></li></ul></div>
                            <div role="presentation" class="dropdown flag-bottom pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="assets/images/flag/vn.png" alt="">&nbsp; Việt Nam <span class="caret"></span> </a>
                               
                                @section('languagesMenu')
                                    {{ TypiCMS::languagesMenu(array('class' => 'nav nav-pills pull-right')) }}
                                @show
<!-- 
                                <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">
                                    <li><a href=""><img src="assets/images/flag/id.png" alt="">&nbsp; Indonesia</a></li>
                                    <li><a href=""><img src="assets/images/flag/th.png" alt="">&nbsp; Thailand</a></li>
                                </ul> -->
                            </div>      
                        </div>
                        
                    </div>
                
                </div>
                </div>
                
            </div>
            <div class="menu-vic">
                <nav class="navbar true-navbar" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="ti-align-justify"></span>
                        </button>
                        <a class="navbar-brand nav-logo" href="/">
                            <img style="" src="{{ asset('assets/images/logo-true-w.png') }}" alt="">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse navbar-ex1-collapse">

                        @section('mainMenu')
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            {{ Menus::build('main') }}
                        </div>
                        @show

                    </div>
                </nav>
            </div>
        </div>
    </header>

        @include('public._alert')

        @yield('main')

        <div class="partners">
            @if($partners = Partners::getAllBy('homepage', 1) and $partners->count())
            <h3>
                <a href="{{ route($lang . '.partners') }}">@lang('db.Partners')</a>
            </h3>
            <ul class="list-unstyled">
                @foreach ($partners as $partner)
                <li>
                    <a href="{{ $partner->website }}" title="{{ $partner->title }}" target="_blank">
                        {{ $partner->present()->thumb(null, 50) }}
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
        </div>

        @section('footer')
        <footer class="footer-block white-block"></footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        {{ HTML::script(asset('assets/js/bootstrap.js')) }}
        {{ HTML::script(asset('assets/vendo/owl-carousel/owl.carousel.min.js')) }}
        {{ HTML::script(asset('assets/vendo/parallax/parallax.min.js')) }}
        {{ HTML::script(asset('assets/js/custom.js')) }}
            
        <script>
            $(document).ready(function() {
                $(".footer-block").load("footer.html"); 
            })
        </script>
        @show

    </div>

    @if(App::environment('production') and Config::get('typicms.googleAnalyticsCode'))

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', '{{ Config::get('typicms.googleAnalyticsCode') }}', 'auto');
        ga('send', 'pageview');
    </script>

    @endif

    {{ HTML::script(asset('js/public/components.min.js')) }}
    {{ HTML::script(asset('js/public/master.js')) }}
    @if (Input::get('preview'))
    {{ HTML::script(asset('js/public/previewmode.js')) }}
    @endif
    
    @yield('js')

</body>

</html>
