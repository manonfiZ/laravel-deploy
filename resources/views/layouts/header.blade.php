<!-- main header area -->
<header class="main-header">

    <!-- header upper -->
    <div class="header-upper">
        <div class="container">
            <ul class="top-left">
                <li><i class="fa fa-clock-o" aria-hidden="true"></i>Mon - Sat  9.00 - 18.00</li>
                <li><i class="fa fa-phone"></i>[251] 235-3256</li>
            </ul>
            <div class="top-right">
                <ul class="social-top">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
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
                        <a href="{{ route('index') }}"></a>
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
                                    <li class="current"><a href="{{ route('index') }}">Accueil</a>
                                    </li>
                                    <li><a href="{{ route('about') }}">À propos de nous</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Nos services</a>
                                        <ul>
                                            <li><a href="service.html">Our Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}">Nous contacter</a>
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
                        <a href="index.html"></a>
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
                                    <li class="current"><a href="{{ route('index') }}">Accueil</a>
                                    </li>
                                    <li><a href="{{ route('about') }}">À propos de nous</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Nos services</a>
                                        <ul>
                                            <li><a href="service.html">Our Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Nous contacter</a>
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
