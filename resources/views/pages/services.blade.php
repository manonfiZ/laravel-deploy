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
                        <div class="icon-box"><a href="{{ route('services')}}"><i class="flaticon-graph"></i></a></div>
                        <h4><a href="{{ route('services')}}">Étude de marché</a></h4>
                        <div class="text"><p>{{ config('app.name')}} propose des services d’analyse de marché pour les entreprises. Nous vous aidons à comprendre votre marché cible, les tendances du marché et les opportunités d’affaires pour développer votre entreprise.</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="service-content">
                        <div class="icon-box"><a href="{{ route('services')}}"><i class="flaticon-people"></i></a></div>
                        <h4><a href="{{ route('services')}}">Vente de fournitures et équipements bureautiques</a></h4>
                        <div class="text"><p>{{ config('app.name')}} propose une large gamme de produits allant des fournitures de bureau classiques aux équipements de haute technologie pour les entreprises modernes. Nous aidons les entreprises à atteindre leurs objectifs grâce à des équipements de qualité supérieure.</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="service-content">
                        <div class="icon-box"><a href="{{ route('services')}}"><i class="flaticon-suitcase"></i></a></div>
                        <h4><a href="{{ route('services')}}">Transport de marchandises</a></h4>
                        <div class="text"><p>{{ config('app.name')}} offre des solutions de transport fiables et rapides pour les entreprises. Nous garantissons un transport en toute sécurité de vos produits, que ce soit pour une livraison locale ou internationale.</p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="service-content">
                        <div class="icon-box"><a href="{{ route('services')}}"><i class="flaticon-business"></i></a></div>
                        <h4><a href="{{ route('services')}}">Entretien et nettoyage de bâtiments et espace vert</a></h4>
                        <div class="text"><p> {{ config('app.name')}} offre des services d’entretien de haute qualité pour les bâtiments et les espaces verts. Nous garantissons un environnement propre et bien entretenu pour améliorer le confort et la productivité des employés.</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="service-content">
                        <div class="icon-box"><a href="{{ route('services')}}"><i class="flaticon-investment"></i></a></div>
                        <h4><a href="{{ route('services')}}">Travaux de dératisation</a></h4>
                        <div class="text"><p>{{ config('app.name')}} propose des solutions de lutte contre les nuisibles pour les entreprises. Nous utilisons des méthodes écologiques et efficaces pour éliminer les rats et les souris de votre environnement de travail. Nous vous aidons à maintenir un environnement sain et sans danger pour vos employés.</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="service-content">
                        <div class="icon-box"><a href="{{ route('services')}}"><i class="flaticon-bar-chart"></i></a></div>
                        <h4><a href="{{ route('services')}}">Travaux de BTP</a></h4>
                        <div class="text"><p>{{ config('app.name')}} offre des solutions de construction et de rénovation de haute qualité pour les entreprises. Nous travaillons avec des experts en construction pour garantir un résultat parfait pour vos projets de construction.</p></div>
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