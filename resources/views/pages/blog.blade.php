@extends('base')

@section('pageTitle')
    Nos articles
@endsection

@section('content')
    <x-breadcrumb pageTitle="Nos articles" ></x-breadcrumb>

    <!-- our-blog -->
    <section class="our-blog news-section blog-page sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 content-side">
                    <div class="blog-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 news-colmun">
                                <div class="single-item wow fadeInUp animated animated">
                                    <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="{{asset('images/news/n1.jpg')}}" alt=""></figure></a></div>
                                    <div class="news-content">
                                        <div class="date">25 <div class="text">Feb</div></div>
                                        <ul class="meta">
                                            <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                            <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                            <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                        </ul>
                                        <h4><a href="{{ route('blog-details') }}">Cras sed elit sit amet dui tem.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 news-colmun">
                                <div class="single-item wow fadeInUp animated animated">
                                    <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="{{asset('images/news/n2.jpg')}}" alt=""></figure></a></div>
                                    <div class="news-content">
                                        <div class="date">25 <div class="text">Feb</div></div>
                                        <ul class="meta">
                                            <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                            <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                            <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                        </ul>
                                        <h4><a href="{{ route('blog-details') }}">In gravida eros in risus placerat.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 news-colmun">
                                <div class="single-item wow fadeInUp animated animated">
                                    <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="{{asset('images/news/n3.jpg')}}" alt=""></figure></a></div>
                                    <div class="news-content">
                                        <div class="date">25 <div class="text">Feb</div></div>
                                        <ul class="meta">
                                            <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                            <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                            <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                        </ul>
                                        <h4><a href="{{ route('blog-details') }}">Cras sed elit sit amet dui tem.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 news-colmun">
                                <div class="single-item wow fadeInUp animated animated">
                                    <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="{{asset('images/news/n4.jpg')}}" alt=""></figure></a></div>
                                    <div class="news-content">
                                        <div class="date">25 <div class="text">Feb</div></div>
                                        <ul class="meta">
                                            <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                            <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                            <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                        </ul>
                                        <h4><a href="{{ route('blog-details') }}">In gravida eros in risus placerat.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 news-colmun">
                                <div class="single-item wow fadeInUp animated animated">
                                    <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="{{asset('images/news/n5.jpg')}}" alt=""></figure></a></div>
                                    <div class="news-content">
                                        <div class="date">25 <div class="text">Feb</div></div>
                                        <ul class="meta">
                                            <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                            <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                            <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                        </ul>
                                        <h4><a href="{{ route('blog-details') }}">Cras sed elit sit amet dui tem.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 news-colmun">
                                <div class="single-item wow fadeInUp animated animated">
                                    <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="{{asset('images/news/n6.jpg')}}" alt=""></figure></a></div>
                                    <div class="news-content">
                                        <div class="date">25 <div class="text">Feb</div></div>
                                        <ul class="meta">
                                            <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                            <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                            <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                        </ul>
                                        <h4><a href="{{ route('blog-details') }}">In gravida eros in risus placerat.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="link-btn">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 sidebar-side">
                    <div class="sidebar">
                        <div class="sidebar-search sidebar-widget">
                            <div class="search-box">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div class="sidebar-catagories sidebar-widget">
                            <div class="sidebar-title"><h4>Categories</h4></div>
                            <ul class="sidebar-list">
                                <li><a href="#">All Services</a></li>
                                <li><a href="#" class="active">Businee Growth</a></li>
                                <li><a href="#">Financial Advise</a></li>
                                <li><a href="#">Business Consulting</a></li>
                                <li><a href="#">Advanced Analytics</a></li>
                                <li><a href="#">Investment Marketing</a></li>
                                <li><a href="#">Market Research</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-post sidebar-widget">
                            <div class="sidebar-title"><h4>Latest Post</h4></div>
                            <div class="single-post">
                                <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="{{asset('images/news/p1.jpg')}}" alt=""></figure></a></div>
                                <div class="post-title"><h6><a href="{{ route('blog-details') }}">Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</a></h6></div>
                                <ul class="post-time">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                    <li>02 Feb, 2017</li>
                                </ul>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="{{asset('images/news/p2.jpg')}}" alt=""></figure></a></div>
                                <div class="post-title"><h6><a href="{{ route('blog-details') }}">Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</a></h6></div>
                                <ul class="post-time">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                    <li>02 Feb, 2017</li>
                                </ul>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="{{asset('images/news/p3.jpg')}}" alt=""></figure></a></div>
                                <div class="post-title"><h6><a href="{{ route('blog-details') }}">Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</a></h6></div>
                                <ul class="post-time">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                    <li>02 Feb, 2017</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our blog end -->
@endsection