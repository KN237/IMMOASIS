@extends('admin.index')

@section('title')

    Mes locataires

@endsection

@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .card:hover {
            transform: scale(1.06);

        }

    </style>

@endpush


@section('icon')

    <i class="metismenu-icon fas fa-users"></i>

@endsection

@section('bouton')

    <div class="page-title-actions">

        <div class="d-inline-block dropdown">

            <button type="button" class="btn-shadow btn btn-dark" data-toggle="modal" data-target="#form">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="metismenu-icon fas fa-plus"></i>
                </span>
                Créer un locataire
            </button>

        </div>
    </div>


@endsection

@section('content')


    <!-- First Row [Prosucts]-->

    <!-- Default dropup button -->

    <div class="border p-3 m-4" style="width: 20%;">
        <form action="/meslocataires/rechercher" method="post">
            @csrf
            <input type="text" name="nom" /> <button class="btn bg-primary-light" type="submit">
                <i class="fas fa-search"> Rechercher</i>
            </button>


        </form>


    </div>

    <div class="row pb-5 mb-4">

        @foreach ($locataires as $l)

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">

                <!-- Card-->
                <div class="card rounded shadow-sm border-0 ">
                    <div class="card-body p-4"><img src="/locataire.jpg" alt="" class="img-fluid d-block">
                        <center>

                            @foreach ($users as $u)
                                @if ($l->idu == $u->idu)
                                    <p class="h4 bold text-center">{{ $u->nomcomplet }}</p>
                                    <p class="h5 bold text-center">{{ $u->telephone }}</p>
                                @endif
                            @endforeach

                            <p>{{ $l->ville }}</p>

                            <p>{{ $l->profession }}</p>

                            <a href="profilelocataire/{{ $l->idlocataire }}" title="consulter"
                                class="btn bg-primary-light mt-3"><i class="fas fa-eye"> Consulter</i></a>

                            <button title="inviter"
                                onclick="event.preventDefault; var form=document.getElementById('form{{ $l->idlocataire }}'); form.submit();"
                                class="btn bg-info-light mt-3"><i class="fas fa-plus"> Inviter</i></button>

                            <form id="form{{ $l->idlocataire }}" action="/locataire/{{ $l->idlocataire }}/inviter"
                                method="post" style="display: none;">
                                @csrf

                            </form>

                            </p>


                        </center>

                    </div>
                </div>



            </div>

        @endforeach

    </div>

    <center>{{ $locataires->links('pagination::bootstrap-4') }}</center>

@endsection


<!-- Ajout -->

<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-body">

                <center>
                    <h5><img src="/internis.png" alt="logo" width="100"></h5>
                </center>

                <form class="m-5" action="/utilisateur" method="post">
                    @csrf

                    <input type="hidden" name="compte" value="Locataire">
                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Nom complet</label><input name="nomcomplet" type="text"
                            class="form-control"></div>



                    <div class="position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Email</label><input name="email" type="text" class="form-control" "></div>


                            <div class="    position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Téléphone</label><input name="telephone" type="text"
                            class="form-control"></div>

                    <div class="position-relative form-group"><label for="exampleAddress" class="___class_+?27___">Mot
                            de passe</label><input name="mdp" type="text" class="form-control"></div>


                    <div class="position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Confirmez le mot de passe</label><input name="mdpc" type="text"
                            class="form-control"></div>


                    <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                </form>

            </div>

        </div>
    </div>
</div>

@foreach ($locataires as $l)

    <div class="modal fade" id="supp{{ $l->idlocataire }}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <center>
                        <h5><img src="/internis.png" alt="logo" width="150"></h5>
                    </center>

                    <center class="mt-2">
                        <h4> Voulez-vous vraiment vous supprimer ce locataire de votre liste?</h4>
                    </center>

                    <center class="mt-5 mb-4"><button
                            onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idlocataire }}'); form.submit();"
                            class="btn bg-success-light mr-3 p-2 rounded text-white"><i class="fas fa-check mr-1"></i>
                            Confirmer</button> <button type="button" data-dismiss="modal" aria-label="Close"
                            class="btn bg-danger-light  p-2 rounded "><i class="fas fa-trash mr-1"></i> Annuler</button>
                    </center>
                    <form id="form2{{ $l->idlocataire }}" action="/locataire/{{ $l->idlocataire }}" method="get"
                        style="display: none;">
                        @csrf
                        @method('delete')

                    </form>

                </div>

            </div>
        </div>
    </div>

@endforeach

@push('page-js')
    <script src="/main/assets/js/jquery-2.1.0.min.js"></script>
@endpush
