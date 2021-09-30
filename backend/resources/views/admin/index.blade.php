<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> @yield('title') | Immo Oasis </title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link href="/admin/assets/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/25029013.js"></script>
    <!-- End of HubSpot Embed Code -->

    @stack('page-css')

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

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"> <a href="/"> <img src="/internis.png" alt="logo" width="100"
                            style="transform: translateY(-30%)"> </a> </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>

                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                        </div>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="/avatar.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <a href="/dashboard/monprofile" type="button" tabindex="0"
                                                class="dropdown-item">
                                                <i class="fas fa-users-cog m-1"></i>Mon compte</a>
                                            <a type="button" tabindex="0" class="dropdown-item" data-toggle="modal"
                                                data-target="#dec">

                                                <i class="fas fa-sign-out-alt m-1"></i>

                                                Deconnexion</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{ $data->nomcomplet }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu mt-2">
                            <li class="mb-4 mt-4">
                                <a href="/dashboard">
                                    <!-- class="mm-active"  -->
                                    <i class="metismenu-icon fas fa-chart-line"></i>
                                    Tableau de bord
                                </a>
                            </li>

                            @if($data->role!="Locataire")

                            <li class="mb-4">
                                <a href="#">
                                    <i class="metismenu-icon fas fa-home"></i>
                                    Biens

                                </a>

                                <ul>

                                    @if($data->role=="Administrateur")

                                    <li>
                                        <a href="/dashboard/typebiens">
                                            <i class="metismenu-icon"></i>
                                            Type de biens
                                        </a>
                                    </li>

                                    @endif

                                    @if($data->role=="Bailleur")

                                    <li>
                                        <a href="/dashboard/biens">
                                            <i class="metismenu-icon">
                                            </i>Biens
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/dashboard/photosbiens">
                                            <i class="metismenu-icon">
                                            </i>Photos
                                        </a>
                                    </li>

                                    @endif


                                </ul>
                            </li>

                            @endif

                            @if($data->role!="Locataire")

                            <li class="mb-4">
                                <a href="#">
                                    <i class="metismenu-icon fas fa-users"></i>
                                    Locataires

                                </a>

                                <ul>


                                    @if($data->role=="Bailleur")

                                    <li>
                                        <a href="/dashboard/meslocataires">
                                            <i class="metismenu-icon"></i>
                                            Mes locataires
                                        </a>
                                    </li>

                                    @endif

                                    <li>
                                        <a href="/dashboard/locataires"
                                            title="Tous les locataires inscrits sur la plateforme">
                                            <i class="metismenu-icon">
                                            </i>Locataires
                                        </a>
                                    </li>


                                </ul>

                            </li>

                            @endif




                            <li class="mb-4">
                                <a href="#">
                                    <i class="metismenu-icon fas fa-key"></i>Locations
                                </a>

                                <ul>

                                    @if($data->role=="Administrateur")

                                    <li>
                                        <a href="/dashboard/typelocations">
                                            <i class="metismenu-icon"></i>
                                            Types de locations
                                        </a>
                                    </li>

                                    @endif

                                    @if($data->role!="Administrateur")

                                    <li>
                                        <a href="/dashboard/locations">
                                            <i class="metismenu-icon">
                                            </i>Mes locations
                                        </a>
                                    </li>

                                    @endif


                                </ul>
                            </li>

                            @if($data->role!="Administrateur")

                            <li class="mb-4">
                                <a href="/dashboard/inventaires">
                                    <i class="metismenu-icon fa fa-clipboard"></i>
                                    Inventaires

                                </a>
                            </li>

                            @endif


                            @if($data->role!="Administrateur")


                            <li class="mb-4">
                                <a href="/dashboard/etatlieux">
                                    <i class="metismenu-icon fas fa-edit"></i>
                                    Etats de lieux

                                </a>

                            </li>


                            @endif


                            @if($data->role!="Administrateur")

                            <li class="mb-4">
                                <a href="/dashboard/interventions">
                                    <i class="metismenu-icon fas fa-tools"></i>
                                    Interventions

                                </a>
                            </li>

                            @endif

                            @if($data->role!="Administrateur")

                            <li class="mb-4">
                                <a href="/dashboard/factures">
                                    <i class="metismenu-icon fas fa-money-check-alt"></i>
                                    Factures

                                </a>

                            </li>

                            @endif

                            @if($data->role=="Bailleur")

                            <li class="mb-4">
                                <a href="/dashboard/transactions">
                                    <i class="metismenu-icon fa fa-cash-register"></i>
                                    Transactions

                                </a>
                            </li>

                            @endif


                            @if($data->role!="Administrateur")


                            <li class="mb-4">
                                <a href="">
                                    <i class="metismenu-icon fas fa-location-arrow"></i>
                                    Invitations

                                </a>

                                <ul>
                                    @if($data->role=="Bailleur")

                                    <li>
                                        <a href="/dashboard/invitationsenvoyees">
                                            <i class="metismenu-icon"></i>
                                            Invitations envoyées
                                        </a>
                                    </li>

                                    @endif


                                    @if($data->role=="Locataire")


                                    <li>
                                        <a href="/dashboard/invitationsrecues">
                                            <i class="metismenu-icon">
                                            </i>Invitations recues
                                        </a>
                                    </li>

                                    @endif


                                </ul>

                            </li>


                            @endif

                            @if($data->role=="Bailleur")

                            <li class="mb-4">
                                <a href="/dashboard/articles">
                                    <i class="metismenu-icon fas fa-newspaper"></i>

                                    Articles

                                </a>

                            </li>

                            @endif

                            <li class="mb-4">

                                <a href="/dashboard/artisans">

                                    <i class="metismenu-icon fas fa-hard-hat"></i>

                                    Artisans

                                </a>

                            </li>


                            @if($data->role=="Administrateur")

                            <li class="mb-4">
                                <a href="/dashboard/packages">
                                    <i class="metismenu-icon fas fa-hand-holding-usd"></i>
                                    Packages

                                </a>

                            </li>
                            

                            <li class="mb-4">
                                <a href="/dashboard/utilisateurs">
                                    <i class="metismenu-icon fas fa-users"></i>
                                    Utilisateurs

                                </a>

                            </li>

                            @endif

                        </ul>
                    </div>
                </div>
            </div>

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    @yield('icon')
                                </div>

                                <div>

                                    @yield('title')

                                </div>
                            </div>

                            @yield('bouton')

                        </div>



                    </div>

                    @yield('content')


                </div>
            </div>
        </div>
    </div>




    <script type="text/javascript" src="/admin/assets/scripts/main.js"></script>

    @stack('page-js')

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {!! Toastr::message() !!}

    <script src="/js/main.js"></script>

    <script>
        $(function() {
            $(document).ready(function() {
                $('#example').DataTable();
            });
        });

        $('#example').DataTable({
            language: {
                processing: "Traitement en cours...",
                search: "Rechercher&nbsp;:",
                lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
                info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                infoPostFix: "",
                loadingRecords: "Chargement en cours...",
                zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                emptyTable: "Aucune donnée disponible dans le tableau",
                paginate: {
                    first: "Premier",
                    previous: "Pr&eacute;c&eacute;dent",
                    next: "Suivant",
                    last: "Dernier"
                },
                aria: {
                    sortAscending: ": activer pour trier la colonne par ordre croissant",
                    sortDescending: ": activer pour trier la colonne par ordre décroissant"
                }
            }
        });
    </script>





    <!-- Deconnexion-->

    <div class="modal fade" id="dec" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <center>
                        <h5><img src="/internis.png" alt="logo" width="150"></h5>
                    </center>

                    <center class="mt-2">
                        <h4> Voulez-vous vraiment vous déconnecter ?</h4>
                    </center>

                    <center class="mt-5 mb-4"><a href="/logout"
                            class="btn bg-success-light mr-3 p-2 rounded text-white"><i class="fas fa-check mr-1"></i>
                            Confirmer</a> <a type="button" data-dismiss="modal" aria-label="Close"
                            class="btn bg-danger-light p-2 rounded "><i class="fas fa-times"></i> Annuler</a>
                    </center>


                </div>

            </div>
        </div>
    </div>



</body>

</html>
