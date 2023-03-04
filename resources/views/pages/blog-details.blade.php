@extends('base')

@section('pageTitle')
    Détails de l'article
@endsection

@section('content')
    <x-breadcrumb pageTitle="Détails de l'article" ></x-breadcrumb>

    <!-- our-blog -->
    <section class="blog-details news-section blog-page sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 content-side">
                    <div class="blog-single-section sidebar-details">
                        <div class="news-style-one">
                            <div class="single-item wow fadeInUp animated animated">
                                <div class="img-box"><figure><img src="{{asset('images/news/details.jpg')}}" alt=""></figure></div>
                                <div class="news-content">
                                    <div class="date">25 <div class="text">Feb</div></div>
                                    <ul class="meta">
                                        <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                    </ul>
                                    <div class="title">In gravida eros in risus placerat.</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet constur adipisicg elit sed do eiusmtempor incid dolore magna aliqu enim ad minim veniam.quis nostrud exercitation ullamco laboris nisi ut aliquip.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan <br />
                                        tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi
                                        tecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit asperna<br />
                                        tur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>

                                        <p>Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                    <div class="post-share-option">
                                        <div class="text">Share <i class="fa fa-share-alt"></i></div>
                                        <ul class="post-social">
                                            <li><a href="#" class="active"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="comment-area">
                            <div class="comment-box">
                                <div class="comment-title"><h4>Leave A Comments</h4></div>
                                <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="form_name" value="" placeholder="Name" required="">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" name="form_email" value="" placeholder="Email" required="">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea placeholder="Message" name="form_message" required=""></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-one style-one radi" data-loading-text="Please wait...">Send Message</button>
                                </form>
                            </div>
                        </div> --}}
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
                                <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="images/news/p1.jpg" alt=""></figure></a></div>
                                <div class="post-title"><h6><a href="{{ route('blog-details') }}">Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</a></h6></div>
                                <ul class="post-time">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                    <li>02 Feb, 2017</li>
                                </ul>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="images/news/p2.jpg" alt=""></figure></a></div>
                                <div class="post-title"><h6><a href="{{ route('blog-details') }}">Totam Rem Aperiam Eaque Ipsa Quae ab Illo.</a></h6></div>
                                <ul class="post-time">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                    <li>02 Feb, 2017</li>
                                </ul>
                            </div>
                            <div class="single-post">
                                <div class="img-box"><a href="{{ route('blog-details') }}"><figure><img src="images/news/p3.jpg" alt=""></figure></a></div>
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