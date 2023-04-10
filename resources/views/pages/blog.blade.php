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
                            @foreach ($articles as $article)
                                <div class="col-md-6 col-sm-6 col-xs-12 news-colmun">
                                    <div class="single-item wow fadeInUp animated animated">
                                        <div class="img-box"><a href="{{ route('blog-details', ['slug' => $article->slug])}}"><figure><img style="width: 370px !important; height: 250px !important;" src="{{ asset('storage/uploads/' . $article->cover)}}" alt=""></figure></a></div>
                                        <div class="news-content">
                                            <div class="date">{{ \Carbon\Carbon::parse($article->created_at)->format('d') }} <div class="text">{{ \Carbon\Carbon::parse($article->created_at)->format('M') }}</div></div>
                                            <ul class="meta">
                                                <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                                {{-- <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                                <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li> --}}
                                            </ul>
                                            <h4><a href="{{ route('blog-details', ['slug' => $article->slug])}}"> {{ $article->title}} </a></h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $articles->links() }}
                        <ul class="link-btn">

                            {{-- <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li> --}}
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
                            <div class="sidebar-title"><h4>Latest Post</h4></div>
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