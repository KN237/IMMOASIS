<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> @yield('title') | Immo Oasis </title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link href="/admin/assets/main.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"> <a href="/"> <img src="/internis.png" alt="logo" width="80"
                            style="transform: translateY(-10%)"> </a></div>
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
                            <input type="text" class="search-input" placeholder="Recherche">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
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
                                            <button type="button" tabindex="0" class="dropdown-item"> <i
                                                    class="fas fa-users-cog m-1"></i>Mon compte</button>
                                            <button type="button" tabindex="0" class="dropdown-item"> <i
                                                    class="fas fa-sign-out-alt m-1"></i> Deconnexion</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Wilfried Hariel
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

                            <li class="mb-4">
                                <a>
                                    <i class="metismenu-icon fas fa-home"></i>
                                    Biens

                                </a>

                                <ul>
                                    <li>
                                        <a href="/dashboard/typebiens">
                                            <i class="metismenu-icon"></i>
                                            Type de biens
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/dashboard/biens">
                                            <i class="metismenu-icon">
                                            </i>Biens
                                        </a>
                                    </li>


                                </ul>
                            </li>

                            <li class="mb-4">
                                <a href="#">
                                    <i class="metismenu-icon fas fa-users"></i>
                                    Locataires

                                </a>

                                <ul>
                                    <li>
                                        <a href="/dashboard/locataires">
                                            <i class="metismenu-icon"></i>
                                            Mes locataires
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/dashboard/locataires" title="Tous les locataires inscrits sur la plateforme">
                                            <i class="metismenu-icon">
                                            </i>Locataires
                                        </a>
                                    </li>


                                </ul>

                            </li>




                            <li class="mb-4">
                                <a href="#">
                                    <i class="metismenu-icon fas fa-key"></i>Locations
                                </a>

                                <ul>
                                    <li>
                                        <a href="/dashboard/typelocations">
                                            <i class="metismenu-icon"></i>
                                            Types de locations
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/dashboard/locations">
                                            <i class="metismenu-icon">
                                            </i>Locations
                                        </a>
                                    </li>


                                </ul>
                            </li>

                            <li class="mb-4">
                                <a href="/dashboard/inventaires">
                                    <i class="metismenu-icon fa fa-clipboard"></i>
                                    Inventaires

                                </a>
                            </li>


                            <li class="mb-4">
                                <a href="/dashboard/etatlieux">
                                    <i class="metismenu-icon fas fa-edit"></i>
                                    Etats de lieux

                                </a>

                            </li>

                            <li class="mb-4">
                                <a href="/dashboard/interventions">
                                    <i class="metismenu-icon fas fa-tools"></i>
                                    Interventions

                                </a>
                            </li>



                            <li class="mb-4">
                                <a href="/dashboard/factures">
                                    <i class="metismenu-icon fas fa-money-check-alt"></i>
                                    Factures

                                </a>

                            </li>


                            <li class="mb-4">
                                <a href="/dashboard/contrats">
                                    <i class="metismenu-icon fas fa-file-contract"></i>
                                    Contrats

                                </a>

                            </li>


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

    <script src="/main/assets/js/jquery-2.1.0.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(function() {
            $(document).ready(function() {
                $('#example').DataTable();
            });
        });

        $('#example').DataTable( {
    language: {
        processing:     "Traitement en cours...",
        search:         "Rechercher&nbsp;:",
        lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "Aucune donnée disponible dans le tableau",
        paginate: {
            first:      "Premier",
            previous:   "Pr&eacute;c&eacute;dent",
            next:       "Suivant",
            last:       "Dernier"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }
} );
    </script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

{!! Toastr::message() !!}

</body>

</html>
