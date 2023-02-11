@extends('base')

@section('content')

    <x-breadcrumb pageTitle='Nous contacter'></x-breadcrumb>
    <!-- bread crumb end -->

    <!-- contact-info -->
    <section class="contact-info contact-page centered">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                        <div class="title">Localisation</div>
                        <div class="text"><p>Cotonou, Sainte Rita</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-phone"></i></div>
                        <div class="title">Téléphone</div>
                        <div class="text"><p>(+48) 564-334-21-22-34<br /> (+48) 564-334-21-22-38</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-envelope"></i></div>
                        <div class="title">Email</div>
                        <div class="text"><p><a href="#">info@templatepath.com</a><br /><a href="#">info@aventex.com</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact infe end -->

    <!-- contact-section -->
    <section class="contact-section contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 contact-colmun">
                    <div class="contact-form-area">
                        <div class="title"><h2>Ecrivez-nous</h2></div>
                        <div class="text"><p>Voulez-vous prendre rendez-vous, avez-vous une préocupation? écrivez nous, nous vous répondrons dans un bref delai.</p></div>
                        @if (Session::has('message'))
                            <span class="alert alert-{{ Session::get('type') }}">
                                {{  Session::get('message') }}
                            </span>
                        @endif
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
                                    <input type="text" name="phone" value="" placeholder="Phone">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="subject" value="" placeholder="L'objet de votre message" required>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="Votre message" name="message" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn-one style-one radi" data-loading-text="Please wait...">Envoyer</button>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-sm-12 col-xs-12 contact-colmun">
                    <div class="google-map-area">
                        <div 
                            class="google-map" 
                            id="contact-google-map" 
                            data-map-lat="41.641264" 
                            data-map-lng="19.705595" 
                            data-icon-path="images/resources/map-marker.png" 
                            data-map-title="Brooklyn, New York, United Kingdom" 
                            data-map-zoom="12" 
                            data-markers='{
                                "marker-1": [41.641264, 19.705595, "<h4>Branch Office</h4><p>77/99 London UK</p>","images/resources/map-marker.png"]
                            }'>

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- contact section end -->



@endsection
