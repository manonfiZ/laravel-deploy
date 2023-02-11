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
                <div class="col-md-12 col-sm-12 col-xs-12 about-colmun">
                    <div class="about-content">
                        <div class="about-title">
                            <div class="section-title"><h2>Qui sommes-nous ?</h2></div>
                            <div class="title-text"></div>
                        </div>
                        <div class="text row">
                            <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
                                <p>
                                    {{ config('app.name') }}, une entreprise en pleine croissance offrant une large gamme de solutions pour les besoins de votre entreprise. Fondée sur des valeurs de qualité, de fiabilité et de satisfaction du client, notre entreprise est déterminée à fournir des produits et des services de la plus haute qualité pour répondre aux besoins de notre clientèle.
                                </p>
                                <p>En tant qu’entreprise de vente d’équipement de bureau, nous proposons une large gamme de produits allant des fournitures de bureau classiques aux équipements de haute technologie pour les entreprises modernes. Nous comprenons l’importance de l’efficacité et de la productivité pour les entreprises et nous nous efforçons de fournir des équipements qui peuvent les aider à atteindre leurs objectifs.</p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
                                <div class="img-box"><figure><img src="images/about/1.jpg" alt=""></figure></div>
                            </div>
                        </div>
                        <br> <br>
                        <div class="text row">
                            <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
                                <div class="img-box"><figure><img src="images/about/1.jpg" alt=""></figure></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
                                <p>En outre, notre entreprise est également spécialisée dans les solutions d’assainissement. Nous proposons des produits écologiques et durables pour vous aider à maintenir un environnement sain et propre dans votre entreprise. Nous sommes conscients de l’impact de l’environnement sur la santé des employés et sur l’efficacité de votre entreprise, et nous sommes là pour vous aider à gérer cet aspect important.</p>
                                <p>{{ config('app.name') }} est également un leader dans les services informatiques. Nous offrons des solutions pour vous aider à gérer et à optimiser vos systèmes informatiques, ainsi que des services de soutien pour vous aider à résoudre rapidement tout problème technique. Nous savons que la technologie peut être complexe, mais nous sommes là pour vous aider à la maîtriser.</p>
                            </div>
                        </div>
                        <br> <br>
                        <div class="text row d-flex justify-content-center align-items-center">
                            <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
                                <p>Enfin, nous proposons également des services d’audit pour vous aider à évaluer la performance de votre entreprise et à identifier les opportunités d’amélioration. Nous croyons que les entreprises doivent être en mesure de se mesurer régulièrement pour évoluer et prospérer, et nous sommes là pour vous aider à le faire.</p>
                                <p>En conclusion, chez {{ config('app.name') }}, nous sommes fiers de fournir des solutions de qualité supérieure pour répondre à tous les besoins de votre entreprise. Nous sommes engagés à vous aider à réussir et à atteindre vos objectifs. Contactez-nous dès aujourd’hui pour découvrir comment nous pouvons vous aider.</p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
                                <div class="img-box"><figure><img src="images/about/1.jpg" alt=""></figure></div>
                            </div>
                        </div>
                    </div>
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
                    <div class="sec-title"><h2>Nos <span>Services</span></h2></div>
                    <div class="text"><p>{{config('app.name')}} fournit plusieurs types de service allant de fourniture
                        de matériels de bureau à l'assainissement</p></div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 service-colmun">
                <div class="three-column-carousel">
                    <div class="single-item">
                        <div class="icon-box"><a href="#"><i class="flaticon-graph"></i></a></div>
                        <h4><a href="{{ route('services')}}">Transport de marchandise et autres</a></h4>
                        <div class="text"><p>Avec notre équipe, nous vous garantissons, la sureté et
                            la livraison dans un bref délais</p></div>
                    </div>
                    <div class="single-item">
                        <div class="icon-box"><a href="#"><i class="flaticon-people"></i></a></div>
                        <h4><a href="{{ route('services')}}">Entretien et nettoyage des batiments et espaces verts</a></h4>
                        <div class="text"><p>Confiez-nous vos espaces à aménager et nous les rendons propres.</p></div>
                    </div>
                    <div class="single-item">
                        <div class="icon-box"><a href="#"><i class="flaticon-suitcase"></i></a></div>
                        <h4><a href="{{ route('services')}}">Traveaux de dératisation, désinsectisation, désinfection et désodorisant</a></h4>
                        <div class="text"><p>Pour un hygiène dans vos maisons, entreprises et autres, nous vous garantissons un travail efficace.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature section end -->

@endsection