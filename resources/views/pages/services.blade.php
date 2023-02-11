@extends('base')

@section('pageTitle')
    Nos services
@endsection

@section('content')
    <x-breadcrumb pageTitle='Nos services'></x-breadcrumb>
    <!-- service-style-two -->
    <section class="service-style-tow">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="service-content">
                        <div class="icon-box"><a href="service-details.html"><i class="flaticon-graph"></i></a></div>
                        <h4><a href="service-details.html">Business Growth</a></h4>
                        <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                        ididunt ut labore</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="service-content">
                        <div class="icon-box"><a href="service-details.html"><i class="flaticon-people"></i></a></div>
                        <h4><a href="service-details.html">Financial Advise</a></h4>
                        <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                        ididunt ut labore</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="service-content">
                        <div class="icon-box"><a href="service-details.html"><i class="flaticon-suitcase"></i></a></div>
                        <h4><a href="service-details.html">Business Consulting</a></h4>
                        <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                        ididunt ut labore</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="service-content">
                        <div class="icon-box"><a href="service-details.html"><i class="flaticon-business"></i></a></div>
                        <h4><a href="service-details.html">Advanced Analytics</a></h4>
                        <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                        ididunt ut labore</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="service-content">
                        <div class="icon-box"><a href="service-details.html"><i class="flaticon-investment"></i></a></div>
                        <h4><a href="service-details.html">Investment Banking</a></h4>
                        <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                        ididunt ut labore</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="service-content">
                        <div class="icon-box"><a href="service-details.html"><i class="flaticon-bar-chart"></i></a></div>
                        <h4><a href="service-details.html">Market Research</a></h4>
                        <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                        ididunt ut labore</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service style two end -->

     <!-- call-back-section -->
     <section class="call-back sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 colmun">
                    <div class="call-back-content">
                        <div class="call-back-title">
                            <div class="section-title"><h2>Nous contacter</h2></div>
                            <div class="text"><p>Voulez-vous prendre rendez-vous, avez-vous une préocupation? écrivez nous, nous vous répondrons dans un bref delai.</p></div>
                        </div>
                        <div class="form-area">
                            <form id="contact-form" name="contact_form" class="default-form" action="{{route('contact-post')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" value="" placeholder="Votre nom" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" value="" placeholder="Votre email" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Votre numéro de téléphone">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="subject" value="" placeholder="L'objet de votre message" required>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea style="min-height: 100px !important;" placeholder="Votre message" name="message" required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn-one style-one radi" data-loading-text="Please wait...">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call-back-section end -->


@endsection