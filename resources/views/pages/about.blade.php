@extends('base')

@section('pageTitle')
    A propos de nous
@endsection


@section('content')
    <x-breadcrumb pageTitle='À propos'></x-breadcrumb>

    <!-- about section -->
    <section class="about-section sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
                    <div class="about-content">
                        <div class="about-title">
                            <div class="section-title"><h2>About The Biznes</h2></div>
                            <div class="title-text"></div>
                        </div>
                        <div class="text"><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium.</p></div>
                        <ul class="list">
                            <li>Morbi fermentum felis nec</li>
                            <li> Morbi fermentum felis nec gravida tempus.</li>
                            <li>Morbi fermentum felis nec gravida</li>
                        </ul>
                        <div class="text"><p>Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae.</p></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
                    <div class="img-box"><figure><img src="images/about/1.jpg" alt=""></figure></div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!-- service section -->
    <section class="service-section">
        <div class="container-fullid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-sm-12 service-colmun">
                    <div class="service-title">
                        <div class="sec-title"><h2>Our <span>Services</span></h2></div>
                        <div class="text"><p>Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit sed do eiusm temp or incididunt</p></div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12 service-colmun">
                    <div class="three-column-carousel">
                        <div class="single-item">
                            <div class="icon-box"><a href="service-details.html"><i class="flaticon-remove"></i></a></div>
                            <h4><a href="service-details.html">Business Growth</a></h4>
                            <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                            ididunt ut labore</p></div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><a href="service-details.html"><i class="flaticon-remove"></i></a></div>
                            <h4><a href="service-details.html">Business Growth</a></h4>
                            <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                            ididunt ut labore</p></div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><a href="service-details.html"><i class="flaticon-remove"></i></a></div>
                            <h4><a href="service-details.html">Business Growth</a></h4>
                            <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                            ididunt ut labore</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature section end -->

    <!-- team section -->
    {{-- <section class="our-team sec-pad">
        <div class="container">
            <div class="team-title centered">
                <div class="section-title"><h2>Our Experts</h2></div>
                <div class="title-text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp </p></div>
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 team-colmun">
                    <div class="bxslider ">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12 team-colmun">
                                <div class="clearfix">
                                    <figure class="img-box pull-left">
                                        <a href="team.html"><img src="images/team/1.jpg" alt=""></a>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12 team-colmun">
                                <div class="team-content">
                                    <div class="team-info">
                                        <div class="team-text"><a href="team.html">Mark Richardson</a></div>
                                        <span>Project Manager</span>
                                    </div>
                                    <div class="text">
                                        <p>Excepteur sint occaecat cupidatat  proident sunt culpa qui officia deserunt mollit an
                                        imlab rum. Sed perspiciatis unde omnis is natus error sit voluptatem accusantium dolore mque laudant totam rem aperiam.</p>
                                    </div>
                                    <div class="team-contact">
                                        <div class="text"><strong>Phone:</strong>&nbsp; &nbsp;(+1) 251-235-3256</div>
                                        <div class="text"><strong>Email:</strong>&nbsp; &nbsp;info@tonybrown.com</div>
                                    </div>
                                    <ul class="team-social">
                                        <li><a href="#" class="active"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12 team-colmun">
                                <div class="clearfix">
                                    <figure class="img-box pull-left">
                                        <a href="team.html"><img src="images/team/2.jpg" alt=""></a>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12 team-colmun">
                                <div class="team-content">
                                    <div class="team-info">
                                        <div class="team-text"><a href="team.html">Robat Jsion</a></div>
                                        <span>Project Controlar</span>
                                    </div>
                                    <div class="text">
                                        <p>Excepteur sint occaecat cupidatat  proident sunt culpa qui officia deserunt mollit an
                                        imlab rum. Sed perspiciatis unde omnis is natus error sit voluptatem accusantium dolore mque laudant totam rem aperiam.</p>
                                    </div>
                                    <div class="team-contact">
                                        <div class="text"><strong>Phone:</strong>&nbsp; &nbsp;(+1) 251-235-3256</div>
                                        <div class="text"><strong>Email:</strong>&nbsp; &nbsp;info@tonybrown.com</div>
                                    </div>
                                    <ul class="team-social">
                                        <li><a href="#" class="active"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12 team-colmun">
                                <div class="clearfix">
                                    <figure class="img-box pull-left">
                                        <a href="team.html"><img src="images/team/3.jpg" alt=""></a>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12 team-colmun">
                                <div class="team-content">
                                    <div class="team-info">
                                        <div class="team-text"><a href="team.html">Julia Richardson</a></div>
                                        <span>Advisor</span>
                                    </div>
                                    <div class="text">
                                        <p>Excepteur sint occaecat cupidatat  proident sunt culpa qui officia deserunt mollit an
                                        imlab rum. Sed perspiciatis unde omnis is natus error sit voluptatem accusantium dolore mque laudant totam rem aperiam.</p>
                                    </div>
                                    <div class="team-contact">
                                        <div class="text"><strong>Phone:</strong>&nbsp; &nbsp;(+1) 251-235-3256</div>
                                        <div class="text"><strong>Email:</strong>&nbsp; &nbsp;info@tonybrown.com</div>
                                    </div>
                                    <ul class="team-social">
                                        <li><a href="#" class="active"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12 team-colmun">
                                <div class="clearfix">
                                    <figure class="img-box pull-left">
                                        <a href="team.html"><img src="images/team/4.jpg" alt=""></a>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12 team-colmun">
                                <div class="team-content">
                                    <div class="team-info">
                                        <div class="team-text"><a href="team.html">Mitchel Mandal</a></div>
                                        <span>Senior Manager</span>
                                    </div>
                                    <div class="text">
                                        <p>Excepteur sint occaecat cupidatat  proident sunt culpa qui officia deserunt mollit an
                                        imlab rum. Sed perspiciatis unde omnis is natus error sit voluptatem accusantium dolore mque laudant totam rem aperiam.</p>
                                    </div>
                                    <div class="team-contact">
                                        <div class="text"><strong>Phone:</strong>&nbsp; &nbsp;(+1) 251-235-3256</div>
                                        <div class="text"><strong>Email:</strong>&nbsp; &nbsp;info@tonybrown.com</div>
                                    </div>
                                    <ul class="team-social">
                                        <li><a href="#" class="active"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pager">
                        <div class="center">
                            <ul class="nav-link list-inline">
                                <li id="slider-prev"></li>
                                <li id="slider-next"></li>
                            </ul>  
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 team-colmun">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="slider-pager">
                                <ul class="list-inline thumb-box style2">
                                    <li>
                                        <a class="active" data-slide-index="0" href="#"><figure><img src="images/team/1.png" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="1" href="#"><figure><img src="images/team/2.png" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="2" href="#"><figure><img src="images/team/3.png" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="3" href="#"><figure><img src="images/team/4.png" alt=""></figure></a>
                                    </li>
                                </ul>
                            </div>  
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section> --}}
    <!-- team section end -->
@endsection