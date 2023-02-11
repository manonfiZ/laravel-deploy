<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Biznes | Responsive HTML 5 Template</title>

    <!-- Stylesheets -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="{{ asset('css/custom/theme-2.css') }}" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

</head>

<!-- page wrapper -->

<body class="page-wrapper">

    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->

    <!-- switcher menu -->
    <div class="switcher">

        <!-- Switcher button -->
        <div class="switch_btn">
            <button><i class="fa fa-cog fa-spin"></i></button>
        </div>

        <!-- switcher body -->
        <div class="switch_menu">
            <h5 class="title">Style Switcher</h5>


            <!-- color changer -->
            <div class="switcher_container">
                <h5>Color Skins</h5>
                <ul id="styleOptions" title="switch styling">
                    <li>
                        <a href="javascript: void(0)" data-theme="theme-1" class="color2"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="theme-3" class="color3"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="theme-4" class="color4"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="theme-5" class="color5"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="theme-6" class="color6"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!-- end switcher menu -->

    <!--header search-->
    <section class="header-search">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="search-form pull-right">
                        <form action="#">
                            <div class="search">
                                <input type="search" name="search" value="" placeholder="Search Something">
                                <button type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end header search-->

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    <!-- footer bottom -->
    <section class="footer-bottom centered">
        <div class="container">
            <div class="copyright">
                <p><a href="#">Thebiznes</a> Copyright © 2018 All Right Reserved</p>
            </div>
        </div>
    </section>



    <!--End pagewrapper-->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span>
    </div>


    <!--jquery js -->


    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slider-active.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    {{-- <script src="{{ asset('js/validation.js') }}"></script> --}}
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/bxslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/SmoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jQuery.style.switcher.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>

    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js')}}" type="text/javascript"></script>

    <script src="{{ asset('js/script.js')}}"></script>

    <!-- End of .page_wrapper -->
</body>

</html>
