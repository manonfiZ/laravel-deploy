@extends('base')

@section('pageTitle')
    Acceuil
@endsection

@section('content')
     <!-- main slider -->
     <section class="example main-slider">
        <article class="content">
            <div class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" id="rev_slider_486_1_wrapper" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                <div class="rev_slider fullwidthabanner" data-version="5.4.1" id="rev_slider_486_1" style="display:none;">
                    <ul>
                        <li data-description="Science says that Women are generally happier" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slider/1.jpg" data-title="" data-transition="parallaxvertical">
                            <!-- MAIN IMAGE -->
                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset('images/slider/2.jpg')}}"> <!-- LAYERS -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" data-basealign="slide" data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power3.easeInOut"}]' data-height="full" data-hoffset="['0','0','0','0']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="shape" data-voffset="['0','0','0','0']" data-whitespace="normal" data-width="full" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" id="slide-1687-layer-1" style="z-index: 5;text-transform:left;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);border-width:0px;">
                            </div>
                            <div class="tp-caption Newspaper-Title tp-resizeme" data-fontsize="['50','50','50','30']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-height="none" data-hoffset="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="text" data-voffset="['240','150','120','50']" data-whitespace="normal" data-width="['1600','1200','900','450']" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1687-layer-2" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;text-transform:left;">
                                <h1> <br> {{ config('app.name') }}  </h1>
                            </div>

                            <div class="tp-caption Newspaper-Subtitle tp-resizeme" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-height="none" data-hoffset="['50','50','50','30']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="text" data-voffset="['410','310','350','420']" data-whitespace="normal" data-width="['640','640','600','450']" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1687-layer-3" style="z-index: 7; white-space: nowrap;text-transform:left;">
                                <div class="text">Spécialisée dans la fourniture de solutions de qualité supérieure, abordables et fiables pour les entreprises, grâce à une expertise et une expérience solides dans plusieurs domaines </div>
                            </div>
                            <div class="tp-caption Newspaper-Button rev-btn" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]' data-height="none" data-hoffset="['53','53','53','30']" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" data-paddingright="[35,35,35,35]" data-paddingtop="[12,12,12,12]" data-responsive="off" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="button" data-voffset="['520','420','480','520']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','550']" id="slide-1687-layer-4" style="z-index: 8; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                <div class="tp-btn">
                                    <a href="{{route('about')}}" class="btn-one">En savoir plus</a>
                                    <!--a href="#" class="btn-two">Purchase Now</a!-->
                                </div>
                            </div>
                        </li>
                        <!-- slider 1 end -->
                        <!-- SLIDE 3  -->
                        <li data-description="Every left implies a responsibility." data-easein="default" data-easeout="default" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slider/3.jpg" data-title="" data-transition="parallaxvertical">
                            <!-- MAIN IMAGE -->
                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset('images/slider/3.jpg')}}"> <!-- LAYERS -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" data-basealign="slide" data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power3.easeInOut"}]' data-height="full" data-hoffset="['0','0','0','0']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="shape" data-voffset="['0','0','0','0']" data-whitespace="normal" data-width="full" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" id="slide-1689-layer-1" style="z-index: 9;text-transform:left;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);border-width:0px;">
                            </div>
                            <div class="tp-caption Newspaper-Title tp-resizeme" data-fontsize="['50','50','50','30']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-height="none" data-hoffset="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="text" data-voffset="['240','150','120','50']" data-whitespace="normal" data-width="['1600','1200','900','450']" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1689-layer-2" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;text-transform:left;">
                                <h1> <br> {{ config('app.name') }}  </h1>
                            </div>
                            <div class="tp-caption Newspaper-Subtitle tp-resizeme" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-height="none" data-hoffset="['50','50','50','30']" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="text" data-voffset="['410','310','350','420']" data-whitespace="normal" data-width="['640','640','600','450']" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1689-layer-3" style="z-index: 7; white-space: nowrap;text-transform:left;">
                                <div class="text">Flexible, nous nous adaptons aux besoins changeants des entreprises pour les aider à atteindre leurs objectifs.</div>
                            </div>
                            <div class="tp-caption Newspaper-Button rev-btn" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]' data-height="none" data-hoffset="['53','53','53','30']" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" data-paddingright="[35,35,35,35]" data-paddingtop="[12,12,12,12]" data-responsive="off" data-responsive_offset="on" data-textalign="['left','left','left','left']" data-type="button" data-voffset="['520','420','480','520']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','550']" id="slide-1689-layer-4" style="z-index: 12; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                <div class="tp-btn">
                                    <a href="{{route('about')}}" class="btn-one">En savoir plus</a>
                                    <!--a href="#" class="btn-two">Purchase Now</a!-->
                                </div>
                            </div>
                        </li> 
                        <!-- slider 3 end -->
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);">
                    </div>
                </div>
            </div>

        </article>
    </section>
    <!-- main slider end -->

     <!-- about section -->
     <section class="about-section sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
                    <div class="about-content">
                        <div class="about-title">
                            <div class="section-title"><h2>Qui sommes-nous ?</h2></div>
                            <div class="title-text"></div>
                        </div>
                        <div class="text"><p>{{config('app.name')}}, une entreprise en pleine croissance offrant une large gamme de solutions pour les besoins de votre entreprise. Fondée sur des valeurs de qualité, de fiabilité et de satisfaction du client, notre entreprise est déterminée à fournir des produits et des services de la plus haute qualité pour répondre aux besoins de notre clientèle.</p></div>
                        {{-- <div class="text"><p>En tant qu’entreprise de vente d’équipement de bureau, nous proposons une large gamme de produits allant des fournitures de bureau classiques aux équipements de haute technologie pour les entreprises modernes. Nous comprenons l’importance de l’efficacité et de la productivité pour les entreprises et nous nous efforçons de fournir des équipements qui peuvent les aider à atteindre leurs objectifs.</p></div> --}}
                        <div class="tp-btn">
                            <a href="{{route('about')}}" class="btn-one">En savoir plus</a>
                            <!--a href="#" class="btn-two">Purchase Now</a!-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
                    <div class="img-box"><figure><img src="{{asset('images/about/1.jpg')}}" alt=""></figure></div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- feature-section -->
    <section class="feature-section sec-pad">
        <div class="container">
            <div class="feature-title centered">
                <div class="section-title"><h2>Pourquoi nous choisir ?</h2></div>
                <div class="title-text"><p>{{config('app.name')}} est une entreprise spécialisée dans les secteurs de l'informatique,
                    de l'assainissement et bien d'autres.<br>Nous sommes à l'écoute de nos clients afin de leur ofrir un service de qualité</p></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 feature-colmun">
                    <div class="single-item">
                        <div class="img-box"><figure><img src="{{ asset('images/feature/1.png')}}" alt=""></figure></div>
                        <div class="single-content">
                            <div class="icon-box"><i class="flaticon-graphic"></i></div>
                            <h4>Expérience et expertise</h4>
                            <div class="text"><p>{{ config('app.name')}} possède une vaste expérience et une expertise dans les différents services qu’elle propose. Nous sommes en mesure de fournir des conseils et des solutions fiables pour vous aider à atteindre vos objectifs.
                             </p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 feature-colmun">
                    <div class="single-item">
                        <div class="img-box"><figure><img src="{{asset('images/feature/2.jpg')}}" alt=""></figure></div>
                        <div class="single-content">
                            <div class="icon-box"><i class="flaticon-graph"></i></div>
                            <h4>Qualité supérieure</h4>
                            <div class="text"><p> Nous nous engageons à offrir une qualité supérieure pour tous nos produits et services. Nous travaillons avec des fournisseurs fiables et nous nous efforçons constamment de nous améliorer pour satisfaire nos clients.</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 feature-colmun">
                    <div class="single-item">
                        <div class="img-box"><figure><img src="{{ asset('images/feature/3.jpg') }}" alt=""></figure></div>
                        <div class="single-content">
                            <div class="icon-box"><i class="flaticon-clock-o"></i></div>
                            <h4>Rapidité et fiabilité</h4>
                            <div class="text"><p>{{ config('app.name')}} offre des services rapides et fiables pour les entreprises. Nous nous efforçons de répondre rapidement à vos demandes et de vous livrer vos produits ou services dans les délais impartis. </p></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 feature-colmun">
                    <div class="single-item">
                        <div class="img-box"><figure><img src="{{asset('images/feature/4.jpg')}}" alt=""></figure></div>
                        <div class="single-content">
                            <div class="icon-box"><i class="flaticon-money"></i></div>
                            <h4>Prix compétitifs</h4>
                            <div class="text"><p>Nous offrons des prix compétitifs pour nos produits et services pour garantir la satisfaction de nos clients. Nous négocions également avec nos fournisseurs pour obtenir les meilleurs prix et les partager avec nos clients.
                             </p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 feature-colmun">
                    <div class="single-item">
                        <div class="img-box"><figure><img src="{{asset('images/feature/6.jpg')}}" alt=""></figure></div>
                        <div class="single-content">
                            <div class="icon-box"><i class="flaticon-graph"></i></div>
                            <h4>Service client de qualité</h4>
                            <div class="text" ><p> Nous accordons une grande importance au service client et nous nous efforçons de répondre rapidement à toutes les demandes et préoccupations de nos clients. Nous sommes là pour vous aider à chaque étape du processus.</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 feature-colmun">
                    <div class="single-item">
                        <div class="img-box"><figure><img src="{{asset('images/feature/5.jpg')}}" alt=""></figure></div>
                        <div class="single-content">
                            <div class="icon-box"><i class="flaticon-clock-o"></i></div>
                            <h4>Éthique d'entreprise</h4>
                            <div class="text" ><p>{{config('app.name')}} se conforme à des normes éthiques élevées dans toutes les activités de l'entreprise, ce qui renforce la confiance et la crédibilité de l'entreprise auprès de ses clients et de ses parties prenantes. </p></div>
                        </div>
                    </div>
                </div>
            
            </div>
            
        </div>
    </section>
    <!-- feature section end -->


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

      <!-- fact-counter -->
      <section class="fact-counter centered">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="25">0</span><span>+</span></div>
                            <div class="text">Years Experience</div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="45">0</span><span>+</span></div>
                            <div class="text">Awards Win</div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="1250">0</span><span>+</span></div>
                            <div class="text">Happy Customers</div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="150">0</span><span>+</span></div>
                            <div class="text">Our Expert Staffs</div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-counter section end -->


    <!-- news section -->
    <section class="news-section sec-pad">
        <div class="container">
            <div class="news-title centered">
                <div class="section-title"><h2>Nos derniers articles</h2></div>
                <div class="title-text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp </p></div>
            </div>
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-4 col-sm-6 col-xs-12 news-colmun">
                        <div class="single-item wow fadeInUp animated animated">
                            <div class="img-box"><a href="{{ route('blog-details', ['slug' => $article->slug])}}"><figure><img style="width: 370px !important; height: 250px !important;" src="{{ asset('storage/uploads/' . $article->cover)}}" alt=""></figure></a></div>
                            <div class="news-content">
                                <div class="date">{{ \Carbon\Carbon::parse($article->created_at)->format('d') }} <div class="text">{{ \Carbon\Carbon::parse($article->created_at)->locale('fr')->format('M') }}</div></div>
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
        </div>
    </section>
    <!-- news section end -->
@endsection
