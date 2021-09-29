<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title> Acceuil | Immo Oasis </title>

    <link rel="stylesheet" type="text/css" href="/main/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="/main/assets/css/style.css">

    <link rel="stylesheet" href="/css/main.css">

    <link rel="stylesheet" href="/css/auth.css">

    <link rel="icon" href="/favicon.ico">
    
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/25029013.js"></script>
    <!-- End of HubSpot Embed Code -->

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


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky bg-white">
        <div class="container">
            <div class="row p-2">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo"><img src="/internis.png" alt="logo" class="mb-5"
                                width="130"></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/" class="active text-dark">Acceuil</a></li>

                            <li class="dropdown">
                                <a class="dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">Nos services</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/">Relatifs aux bailleurs</a>
                                    <a class="dropdown-item" href="/">Relatifs aux locataires</a>
                                </div>
                            </li>

                            <li><a href="/" class="text-dark">Tarifs</a></li>

                            @if(session('LoggedUser'))

                                <li><a class="text-dark" href="/dashboard">Mon compte</a></li>

                            @else

                                <li><a class="text-dark" href="/login">Se connecter</a></li>


                            @endif

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="/main/assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text" >
            <div class="caption" style="margin-top:02%;">
                <h6>Bailleurs-Gestionnaires de patrimoines-Locataires</h6>
                <h2>Gérez vos locations <em>sans stresse</em></h2>

                <div class="form-group">
                    <button
                      type="submit"
                      class="form-control btn btn-primary rounded submit px-3 w-25"
                    >
                      Se connecter
                    </button>
                  </div>

            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Nos <em>Services</em></h2>
                        <center>
                            <div class="w-25 mt-3 mb-3" style="height:3px;background:red;"></div>
                        </center>
                        <p> Notre rôle consiste à faciliter la gestion des biens locatifs. Avec l’ambition de toujours
                            mieux prendre soin des publics les plus fragiles et la préoccupation constante de placer la
                            Personne au cœur de toutes nos actions. Dans cette perspective, nos principales missions
                            consistent à :</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">

                <div class="col-lg-4">
                    <div class="trainer-item">

                        <div class="image-thumb">

                            <i class="fas fa-file-invoice" style="color: black; font-size:2rem;"></i>

                        </div>

                        <div class="down-content mt-3">


                            <h4>Gestion des factures</h4>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <i class="fas fa-hand-holding-usd" style="color: black; font-size:2rem;"></i>
                        </div>
                        <div class="down-content mt-3">

                            <h4>Recouvrement</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <i class="fas fa-tools" style="color: black; font-size:2rem;"></i>
                        </div>
                        <div class="down-content mt-3">

                            <h4>Suivi des travaux d´entretien léger, réparations urgentes ou gros travaux de rénovation
                            </h4>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <i class="fa fa-clipboard" style="color: black; font-size:2rem;"></i>
                        </div>
                        <div class="down-content mt-3">

                            <h4>Inventaire</h4>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <i class="fas fa-file-signature" style="color: black; font-size:2rem;"></i>
                        </div>
                        <div class="down-content mt-3">

                            <h4>Génération des contrat de bail</h4>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <i class="fas fa-signature" style="color: black; font-size:2rem;"></i>
                        </div>
                        <div class="down-content mt-3">

                            <h4>Signature en ligne des contrats de bail</h4>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <i class="fas fa-money-check-alt" style="color: black; font-size:2rem;"></i>
                        </div>
                        <div class="down-content mt-3">

                            <h4>Paiement des factures en ligne</h4>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <i class="fas fa-edit" style="color: black; font-size:2rem;"></i>
                        </div>
                        <div class="down-content mt-3">

                            <h4>Etat des lieux d'entée et de sortie</h4>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <i class="fas fa-question-circle" style="color: black; font-size:2rem;"></i>
                        </div>
                        <div class="down-content mt-3">

                            <h4>Support ( disponible 7j/7 )</h4>

                        </div>
                    </div>
                </div>

            </div>

            <br>

        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Blog</em></h2>
                        <center>
                            <div class="w-25 mt-3 mb-3" style="height:3px;background:red;"></div>
                        </center>
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li>
                        <li><a href='#tabs-2'>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</a>
                        </li>
                        <li><a href='#tabs-3'>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non
                                adipisci nihil.</a></li>
                        <div class="main-rounded-button"><a href="blog.html">Read More</a></div>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="/main/assets/images/blog-image-1-940x460.jpg" alt="">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>

                            <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>

                            <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend
                                hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem
                                tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut,
                                accumsan diam.</p>
                            <div class="main-button">
                                <a href="blog-details.html">Continue Reading</a>
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <img src="/main/assets/images/blog-image-2-940x460.jpg" alt="">
                            <h4>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</h4>
                            <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>
                            <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a
                                velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus
                                nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius
                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <div class="main-button">
                                <a href="blog-details.html">Continue Reading</a>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <img src="/main/assets/images/blog-image-3-940x460.jpg" alt="">
                            <h4>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non adipisci nihil.</h4>
                            <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>
                            <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit
                                amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id
                                scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel,
                                accumsan a neque.</p>
                            <div class="main-button">
                                <a href="blog-details.html">Continue Reading</a>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container p-1">
            <div class="row">
                <div class="col-lg-6">
                    <p>
                        tout droit réservé © 2020 Immo Oasis
                        - Template : <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="logos">
                        <a target="_blank" href="https://itunes.apple.com/us/app/tenantcloud/id773281018?mt=8"
                            rel="noopener noreferrer">
                            <img width="107" height="31" class="img-responsive link-image"
                                src="https://cdn.tenantcloud.com/builds/v37.0.9/promo/images/svg/app-store-badge.svg"
                                alt="tenantcloud-app-store" />
                        </a>


                        <a target="_blank"
                            href="https://play.google.com/store/apps/details?id=com.sav.tenantcloud&hl=en"
                            rel="noopener noreferrer">
                            <img width="107" height="31" class="img-responsive link-image"
                                src="https://cdn.tenantcloud.com/builds/v37.0.9/promo/images/svg/google-play-badge.svg"
                                alt="tenantcloud-google-play" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/main/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/main/assets/js/popper.js"></script>
    <script src="/main/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/main/assets/js/scrollreveal.min.js"></script>
    <script src="/main/assets/js/waypoints.min.js"></script>
    <script src="/main/assets/js/jquery.counterup.min.js"></script>
    <script src="/main/assets/js/imgfix.min.js"></script>
    <script src="/main/assets/js/mixitup.js"></script>
    <script src="/main/assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="/main/assets/js/custom.js"></script>





</body>

</html>
