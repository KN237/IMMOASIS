<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">

<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Acceuil | Immo Oasis </title>

    <!-- Load Roboto font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet'
        type='text/css'>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Load css styles -->
    <link rel="stylesheet" type="text/css" href="/welcome/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/welcome/css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/welcome/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/welcome/css/pluton.css" />
    <link rel="stylesheet" href="/css/main.css">
    <!--[if IE 7]>
             <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
         <![endif]-->
    <link rel="stylesheet" type="text/css" href="/welcome/css/jquery.cslider.css" />
    <link rel="stylesheet" type="text/css" href="/welcome/css/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="/welcome/css/animate.css" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/welcome/images/ico/apple-touch-icon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/welcome/images/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/welcome/images/apple-touch-icon-72.png">
    <link rel="apple-touch-icon-precomposed" href="/welcome/images/ico/apple-touch-icon-57.png">
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/25029013.js"></script>
    <!-- End of HubSpot Embed Code -->
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
        <!-- ***** Preloader Start ***** -->
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a href="/" class="brand">
                    <img src="/internis.png" width="130" alt="Logo" />
                    <!-- This is website logo -->
                </a>
                <!-- Navigation button, visible on small resolution -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <i class="icon-menu"></i>
                </button>
                <!-- Main navigation -->
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav" id="top-navigation">
                        <li class="active"><a href="/">Acceuil</a></li>
                        <li><a href="#service">Services</a></li>
                        <li><a href="#price">Tarifs</a></li>
                        @if (session('LoggedUser'))

                            <li><a class="text-dark" href="/dashboard">Mon compte</a></li>

                        @else

                            <li><a class="text-dark" href="/login">Se connecter</a></li>


                        @endif

                    </ul>
                </div>
                <!-- End main navigation -->
            </div>
        </div>
    </div>
    <!-- Start home section -->
    <div id="home">
        <!-- Start cSlider -->
        <div id="da-slider" class="da-slider">
            <div class="triangle"></div>
            <!-- mask elemet use for masking background image -->
            <div class="mask"></div>
            <!-- All slides centred in container element -->
            <div class="container">
                <!-- Start first slide -->
                <div class="da-slide">
                    <h2 class="fittext2">Bienvenu(e) sur sur Immo Oasis</h2>
                    <h4>Bailleurs, Locataires, Gérez vos locations sans Stresse</h4>
                    <p>Comptabilité - Recouvrements - Gestion des interventions - Archivages 
                        - Signature bail en ligne  - Génération des contrats en lignes - Inventaire des biens - Payement des factures en ligne .</p>
                    <a href="/register" class="da-link button">Creer un compte</a>
                    <div class="da-img">
                        <img src="/welcome/images/Slider01.png" alt="image01" width="320">
                    </div>
                </div>
                <!-- End first slide -->
                <!-- Start second slide -->
                <div class="da-slide">
                    <h2>Bailleurs</h2>
                    <p>Créer un compte afin de mieux gérer vos biens et de suivre le bail de tous vos biens et de tous
                        vos locataires</p>
                    <a href="/register" class="da-link button">Creer un compte</a>
                    <div class="da-img">
                        <img src="/bailleur2.png" width="320" alt="image02">
                    </div>
                </div>
                <!-- End second slide -->
                <!-- Start third slide -->
                <div class="da-slide">
                    <h2>Locataires</h2>
                    <p>Créer un compte afin de mieux gérer vos locations et de faciliter le paiement de vos loyers.</p>
                    <a href="/register" class="da-link button">Creer un compte</a>
                    <div class="da-img">
                        <img src="/locataire.png" width="320" alt="image03">
                    </div>
                </div>
                <!-- Start third slide -->
                <!-- Start cSlide navigation arrows -->
                <div class="da-arrows">
                    <span class="da-arrows-prev"></span>
                    <span class="da-arrows-next"></span>
                </div>
                <!-- End cSlide navigation arrows -->
            </div>
        </div>
    </div>
    <!-- End home section -->
    <!-- Service section start -->
    <div class="section primary-section" id="service">
        <div class="container">
            <!-- Start title section -->
            <div class="title">
                <h1>Services</h1>
                <!-- Section's title goes here -->
                <p> Notre rôle consiste à faciliter la gestion des biens locatifs. Avec l’ambition de toujours
                    mieux prendre soin des publics les plus fragiles et la préoccupation constante de placer la
                    Personne au cœur de toutes nos actions. Dans cette perspective, nos principales missions
                    consistent à :</p>
                <!--Simple description for section goes here. -->
            </div>
            <div class="row-fluid">

                <div class="span4">
                    <div class="centered service">

                        <div class="circle-border zoom-in" style="padding: 50px;background:#f33a43;">
                            <i class="bg-danger p-3 rounded-circle metismenu-icon fas fa-file-invoice mr-3"
                                style="font-size: 3rem;"></i>
                        </div>

                        <h3>Gestion des factures</h3>
                    </div>
                </div>


                <div class="span4">
                    <div class="centered service">

                        <div class="circle-border zoom-in" style="padding: 50px;background:#f33a43;">
                            <i class="bg-danger p-3 rounded-circle metismenu-icon fas fa-hand-holding-usd mr-3"
                                style="font-size: 3rem;"></i>
                        </div>

                        <h3>Recouvrement</h3>
                    </div>
                </div>


                <div class="span4">
                    <div class="centered service">

                        <div class="circle-border zoom-in" style="padding: 50px;background:#f33a43;">
                            <i class="bg-danger p-3 rounded-circle metismenu-icon fas fa-tools mr-3"
                                style="font-size: 3rem;"></i>
                        </div>

                        <h3>Suivi des travaux d´entretien</h3>
                    </div>
                </div>

                <div class="row-fluid" style="margin-bottom: 50px;">


                    <div class="span4">
                        <div class="centered service">

                            <div class="circle-border zoom-in" style="padding: 50px;background:#f33a43;">
                                <i class="bg-danger p-3 rounded-circle metismenu-icon fas fa-clipboard mr-3"
                                    style="font-size: 3rem;"></i>
                            </div>

                            <h3>Inventaire</h3>
                        </div>
                    </div>


                    <div class="span4">
                        <div class="centered service">

                            <div class="circle-border zoom-in" style="padding: 50px;background:#f33a43;">
                                <i class="bg-danger p-3 rounded-circle metismenu-icon fas fa-signature mr-3"
                                    style="font-size: 3rem;"></i>
                            </div>

                            <h3>Génération des contrat de bail</h3>
                        </div>
                    </div>


                    <div class="span4">
                        <div class="centered service">

                            <div class="circle-border zoom-in" style="padding: 50px; background:#f33a43;">
                                <i class="bg-danger p-3 rounded-circle metismenu-icon fas fa-money-check-alt mr-3"
                                    style="font-size: 3rem;"></i>
                            </div>

                            <h3>Paiement des factures en ligne</h3>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <!-- Service section end -->


    <div class="section secondary-section">
        <div class="triangle"></div>
        <div class="container centered">
            <p class="large-text">Concentrez-vous sur votre cœur de métier !</p>
        </div>
    </div>
    <!-- Client section start -->
    <!-- Client section start -->
    <div id="clients">
        <div class="section primary-section">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1>Avis des clients</h1>
                    <p>Ils nous font confiance.
                    </p>
                </div>
                <div class="row">
                    <div class="span4">
                        <div class="testimonial">
                            <p>"I've worked too hard and too long to let anything stand in the way of my goals. I will
                                not let my teammates down and I will not let myself down."</p>
                            <div class="whopic">
                                <div class="arrow"></div>
                                <img src="client.png" class="centered" alt="client 1">
                                <strong>Sylvain KANKO
                                    <small>Client</small>
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="testimonial">
                            <p>"In motivating people, you've got to engage their minds and their hearts. I motivate
                                people, I hope, by example - and perhaps by excitement, by having productive ideas to
                                make others feel involved."</p>
                            <div class="whopic">
                                <div class="arrow"></div>
                                <img src="client.png" class="centered" alt="client 2">
                                <strong>Daniel TASSA
                                    <small>Client</small>
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="testimonial">
                            <p>"Determine never to be idle. No person will have occasion to complain of the want of time
                                who never loses any. It is wonderful how much may be done if we are always doing."</p>
                            <div class="whopic">
                                <div class="arrow"></div>
                                <img src="client.png" class="rounded" alt="client 3">
                                <strong>Marc Beaurel Talla
                                    <small>Client</small>
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="testimonial-text">
                    " Ne craignez pas d'atteindre la perfection, vous n'y arriverez jamais." Salvador DALI
                </p>
            </div>
        </div>
    </div>

    <!-- Price section start -->
    <div id="price" class="section secondary-section">
        <div class="container">
            <div class="title">
                <h1>Tarifs</h1>
                <p>Nos forfaits et tarifs sont les suivants</p>
            </div>
            <div class="price-table row-fluid">

                @foreach ($packages as $p)


                    @if ($p->nom != 'FREE')

                        <div class="span4 price-column">
                            <h3>{{ $p->nom }}</h3>
                            <ul class="list">
                                <li class="price">{{ $p->montant }} FCFA</li>
                                <li><strong>{{ $p->nombrebienmax }}</strong> Biens</li>
                                <li><strong>Support disponible</strong> 24h/7j</li>
                            </ul>
                            @if (session('LoggedUser')) <a
                                    href="/souscription/{{ $data->idu }}/package/{{ $p->idpackage }}"
                                    class="button button-ps">Souscrire</a>
                            @else
                                <a href="/login" class="button button-ps">Souscrire</a>
                            @endif
                        </div>

                    @endif

                @endforeach

            </div>
        </div>
    </div>
    <!-- Price section end -->


    <!-- Footer section start -->
    <footer>

        <div class="text-center" style="margin: 50px;">

            <p>
                tout droit réservé © 2020 Immo Oasis
            </p>


            <div class="logos mb-2">

                <p style="font-size: 12px;">
                    Les modes de paiement suivants sonts acceptés :
                </p>


                <a href="#"><img src="/orange.png" alt="logo" width="100" height="31"></a>

                <a href="#"><img src="/mtn.png" alt="logo" width="100" height="31"></a>
                

                

            </div>

           

        </div>



    </footer>
    <!-- Footer section end -->
    <!-- ScrollUp button start -->

    <!-- ScrollUp button end -->
    <!-- Include javascript -->
    
    <script src="/welcome/js/jquery.js"></script>
    <script  src="/js/main.js"></script>
    <script src="/welcome/js/jquery.mixitup.js"></script>
    <script src="/welcome/js/bootstrap.js"></script>
    <script src="/welcome/js/modernizr.custom.js"></script>
    <script src="/welcome/js/jquery.bxslider.js"></script>
    <script src="/welcome/js/jquery.cslider.js"></script>
    <script src="/welcome/js/jquery.placeholder.js"></script>
    <script src="/welcome/js/jquery.inview.js"></script>
    <!-- Load google maps api and call initializeMap function defined in app.js -->
    <script async="" defer="" type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
    <!-- css3-mediaqueries.js for IE8 or older -->
    <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
    <script type="text/javascript" src="/welcome/js/app.js"></script>

</body>

</html>
