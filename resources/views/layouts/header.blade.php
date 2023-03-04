<!-- main header area -->
<header class="main-header">

    @php
        $currentRoute = Route::currentRouteName();
        $indexClass = '';
        $contactClass = '';
        $aboutClass = '';
        $blogClass = '';
        $serviceClass = '';

        if ($currentRoute == 'index') $indexClass = 'current';
        if ($currentRoute == 'contact') $contactClass = 'current';
        if ($currentRoute == 'about') $aboutClass = 'current';
        if ($currentRoute == 'services') $serviceClass = 'current';
        if ($currentRoute == 'blog' || $currentRoute == 'blog-details') $blogClass = 'current';

    @endphp

    <!-- header upper -->
    <div class="header-upper">
        <div class="container">
            <ul class="top-left">
                <li><i class="fa fa-clock-o_" aria-hidden="true"></i>IFU: 3202011942887</li>
                <li><i class="fa fa-phone_"></i>RCCM: RB/COT/20 B 27999</li>
            </ul>
            <div class="top-right">
                <ul class="social-top">
                    <li><a href="tel:0022995401122" style="font-size: 15px; font-weight: 600"><i class="fa fa-phone" style="margin-right: 5px"></i> (+229) 95 40 11 22</a></li>
                </ul>
                <div class="button-top">
                    <a href="#" class="btn-one style-one">Prendre rendez-vous</a>
                </div>
            </div>             
        </div>
    </div>
    <!-- end header upper -->

    <!-- header lower -->     
    <div class="header-lower">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="logo-box">
                        <a href="{{ route('index') }}"> <img src="{{ asset('images/logo/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="menu-bar">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="{{$indexClass}}"><a href="{{ route('index') }}">Accueil</a>
                                    </li>
                                    <li class="{{$aboutClass}}"><a href="{{ route('about') }}">À propos de nous</a>
                                    </li>
                                    
                                    <li class="{{$serviceClass}}"><a href="{{ route('services') }}">Nos services</a>
                                    </li>
                                    <li class="{{$blogClass}}"><a href="{{route('blog')}}">Blog</a>
                                    </li>
                                    <li class="{{$contactClass}}"><a href="{{ route('contact') }}">Nous contacter</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header lower -->

    <!--sticky header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="logo-box">
                        <a href="{{ route('index') }}"> <img src="{{ asset('images/logo/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="menu-bar">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="{{$indexClass}}"><a href="{{ route('index') }}">Accueil</a>
                                    </li>
                                    <li class="{{$aboutClass}}"><a href="{{ route('about') }}">À propos de nous</a>
                                    </li>
                                    <li class="{{$serviceClass}}"><a href="{{ route('services') }}">Nos services</a>
                                    </li>
                                    <li class="{{$blogClass}}"><a href="{{route('blog')}}">Blog</a>
                                    </li>
                                    <li class="{{$contactClass}}"><a href="{{route('contact')}}">Nous contacter</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end sticky header -->

</header>
<!-- end main header area -->
