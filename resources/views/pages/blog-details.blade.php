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
                                <div class="img-box"><figure><img style="width: 770px !important; height: 450px" src="{{asset('storage/uploads/' . $article->cover )}}" alt=""></figure></div>
                                <div class="news-content">
                                    <div class="date">{{ \Carbon\Carbon::parse($article->created_at)->format('d') }} <div class="text">{{ \Carbon\Carbon::parse($article->created_at)->format('M') }}</div></div>
                                    <ul class="meta">
                                        <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                        {{-- <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li> --}}
                                    </ul>
                                    <div class="title"> {{ $article->title }}</div>
                                    <div class="text">
                                        <p> {{ $article->content }} </p>

                                    </div>
                                    <div class="post-share-option">
                                        <div class="text">Partager <i class="fa fa-share-alt"></i></div>
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
                        {{-- <div class="sidebar-catagories sidebar-widget">
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
                        </div> --}}
                        <div class="sidebar-post sidebar-widget">
                            <div class="sidebar-title"><h4>Nos derniers articles</h4></div>
                            @foreach ($latestArticles as $latestArticle)
                            <div class="single-post">
                                <div class="img-box"><a href="{{ route('blog-details', ['slug' => $latestArticle->slug ]) }}"><figure><img style="width: 85px !important; height: 85px !important;" src="{{ asset('storage/uploads/' . $latestArticle->cover )}}" alt="article-cover"></figure></a></div>
                                <div class="post-title"><h6><a href="{{ route('blog-details', ['slug' => $latestArticle->slug ]) }}">{{ $latestArticle->title }}</a></h6></div>
                                <ul class="post-time">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                    <li>{{ \Carbon\Carbon::parse($latestArticle->created_at)->format('d M Y') }}</li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our blog end -->
@endsection