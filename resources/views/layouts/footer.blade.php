  <!-- main footer area -->
  <footer class="main-footer sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 footer-colmun">
                <div class="logo-widget footer-widget">
                    <div class="footer-logo">
                        <a href="{{ route('index') }}"> <img src="{{ asset('images/logo/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="text">
                        <p>Spécialiste dans la fourniture de solutions de qualité supérieure, abordables et fiables pour les entreprises, grâce à une expertise et une expérience solides dans plusieurs domaines. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12 footer-colmun">
                {{-- <div class="service-widget footer-widget">
                    <div class="footer-title"><h4>Services</h4></div>
                    <ul class="list">
                        <li><a href="#">Company History</a></li>
                        <li><a href="#">About Us </a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div> --}}
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-colmun">
                <div class="link-widget footer-widget">
                    <div class="footer-title"><h4>Liens</h4></div>
                    <ul class="list">
                        <li><a href="{{route('index')}}">Accueil </a></li>
                        <li><a href="{{route('about')}}">A propos de nous </a></li>
                        <li><a href="{{route('contact')}}">Nous contacter</a></li>
                        <li><a href="{{route('about')}}">Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-colmun">
                <div class="subscribe-widget footer-widget">
                    <div class="footer-title"><h4>Nos réseaux</h4></div>
                    <ul class="footer-social">
                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- main footer area end -->
