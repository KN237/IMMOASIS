@extends('admin.index')

@section('title')

    Informations du bien

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-home"></i>

@endsection


@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .img-thumbnail:hover,
        .equipement:hover {

            transform: scale(1.2);
        }

    </style>
@endpush


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="profile-header">
                <div class="row align-items-center">
                    <div class="col-auto profile-image">
                        <a href="#">
                            <img class="rounded-circle" alt="Image du bien" src="/house.jpg" width="100" height="100">
                        </a>
                    </div>

                    <div class="col ml-md-n2 profile-user-info">

                        <h4 class="user-name mb-0"> {{ $bien->nom }}</h4>

                    </div>

                </div>
            </div>
            <div class="profile-menu">
                <ul class="nav nav-tabs nav-tabs-solid">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#per_details_tab">A propos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mod_tab">Modifications</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#sign_tab">Galerie</a>
                    </li>

                    @foreach ($pieces as $p)

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab"
                                href="#{{ $p->nom }}_tab">{{ $p->nom }}</a>
                        </li>

                    @endforeach

                    <button class="btn bg-primary-light ml-5" title="Ajouter une pièce" data-toggle="modal"
                        data-target="#form">
                        <i class="fas fa-plus"></i>
                    </button>

                </ul>


            </div>
            <div class="tab-content profile-tab-cont">

                <!-- Personal Details Tab -->
                <div class="tab-pane fade show active" id="per_details_tab">

                    <!-- Personal Details -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body d-flex">
                                    <div class="col-lg-6">


                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Nom</p>
                                            <p class="col-sm-10">{{ $bien->nom }}</p>
                                        </div>

                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Numéro du titre
                                                foncier
                                            </p>
                                            <p class="col-sm-10">{{ $bien->numtitrefoncier }}</p>
                                        </div>

                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Numéro du permis de
                                                construire</p>

                                            <p class="col-sm-10">{{ $bien->numpermisconst }}</p>

                                        </div>

                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Description</p>

                                            <p class="col-sm-10">{{ $bien->description }}</p>

                                        </div>

                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Ville</p>

                                            <p class="col-sm-10">{{ $bien->ville }}</p>

                                        </div>

                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Quartier</p>

                                            <p class="col-sm-10">{{ $bien->quartier }}</p>

                                        </div>

                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Superficie</p>

                                            <p class="col-sm-10">{{ $bien->superficie }}</p>

                                        </div>


                                    </div>


                                    <div class="col-lg-6">

                                        <center>
                                            <h5 class="card-title">Image</h5>

                                            <img src="/storage/biens/{{ $bien->image }}" alt="image"
                                                class="img-thumbnail" width="400" height="300">
                                        </center>

                                    </div>

                                </div>
                            </div>


                        </div>







                    </div>
                    <!-- /Personal Details -->

                </div>
                <!-- /Personal Details Tab -->


                <!-- Mod Tab -->

                <div id="mod_tab" class="tab-pane fade">

                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">Modifications</h5>
                            <div class="row">
                                <div class="col-md-10 col-lg-6">


                                    <form enctype="multipart/form-data" class="m-5"
                                        action="/bien/{{ $bien->idbien }}" method="post">
                                        @csrf
                                        @method('put')

                                        <div class="position-relative form-group"><label for="examplePassword11"
                                                class="___class_+?24___">Nom</label><input name="nom" type="text"
                                                class="form-control" value="{{ $bien->nom }}"></div>



                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Numéro du permis de construire</label><input
                                                name="numpermisconst" type="text" class="form-control"
                                                value="{{ $bien->numtitrefoncier }}"></div>


                                        <div class="   position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Numéro du titre foncier</label><input
                                                name="numtitrefoncier" type="text" class="form-control"
                                                value="{{ $bien->numpermisconst }}"></div>

                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Type de bien</label>

                                            <select name="idtb" class="form-control">
                                                @foreach ($tb as $u)
                                                    <option value="{{ $u->idtb }}">{{ $u->nom }}</option>

                                                @endforeach

                                            </select>

                                        </div>


                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Description</label><input name="description"
                                                type="text" class="form-control" value="{{ $bien->description }}">
                                        </div>


                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Superficie</label><input name="superficie"
                                                type="text" class="form-control" value="{{ $bien->superficie }}"></div>

                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Ville</label><input name="ville" type="text"
                                                class="form-control" value="{{ $bien->ville }}"></div>

                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Quartier</label><input name="quartier" type="text"
                                                class="form-control" value="{{ $bien->quartier }}"></div>


                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Image</label><input name="image" type="file"
                                                class="form-control"></div>


                                        <button class="mt-2 btn btn-primary">Enregistrer</button>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /Mod Tab -->


                <!-- Sign Tab -->
                <div id="sign_tab" class="tab-pane fade">

                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">Galérie du bien</h5>
                            <div class="row">
                                <div class="col-12">

                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">

                                        <div class="carousel-inner">

                                            @if(count($photos)!=0)

                                            <div class="carousel-item active">
                                                <img src="/storage/photosbiens/{{ $photos[0]->nom }}"
                                                    class="d-block w-100" alt="photo">
                                            </div>

                                            @endif

                                            @forelse($photos as $p)

                                                <div class="carousel-item">
                                                    <img src="/storage/photosbiens/{{ $p->nom }}"
                                                        class="d-block w-100" alt="photo">
                                                </div>

                                            @empty


                                                <div class="carousel-item active">
                                                    <img src="/noimg.png" class="d-block w-100" alt="photo">
                                                </div>


                                            @endforelse

                                        </div>

                                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Précédant</span>
                                        </a>

                                        <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Suivant</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Sign Tab -->



                <!-- Piece Tab -->

                @foreach ($pieces as $p)

                    <div id="{{ $p->nom }}_tab" class="tab-pane fade">

                      
                                <div class="d-flex">
                                    <h5 class="card-title">{{ $p->nom }}</h5> <button title="Supprimer la pièce"
                                        data-toggle="modal" data-target="#supp{{ $p->idpiece }}"
                                        class="btn bg-danger-light ml-auto">x</button>
                                </div>


                                <div class="col-lg-12 d-flex">

                                    @foreach ($equipements as $e)

                                    @if($e->idpiece==$p->idpiece)

                                        <div class=" d-flex m-3">

                                            <div class="card text-center equipement" style="width:250px;">
                                                
                                                <div class="card-header">Equipement #{{ $e->idequipement }}</div>
                                                <center><img src="/tools.png" alt="photo" class="m-3" width="100"></center>

                                                <div class="card-body">
                                                    <p class="card-text">

                                                    <p class="h6"> {{ $e->nom }}</p>

                                                    </p>
                                                    <button class="btn bg-danger-light btn-lg mt-3" data-toggle="modal"
                                                        data-target="#supp2{{ $e->idequipement }}">Supprimer</button>
                                                </div>

                                                <div class="card-footer text-muted">

                                                    <div class="m-3"> Prix
                                                        {{ $e->prix }}</div>

                                                    <div> Quantite {{ $e->quantite }}</div>

                                                </div>

                                            </div>

                                        </div>

                                        @endif

                                    @endforeach

                                </div>


                                <div class="card ">
                                    <div class="card-body">

                                <div class="d-flex">


                                    <form enctype="multipart/form-data" class="m-5 form-inline d-flex" action="/equipement"
                                        method="post">
                                        @csrf

                                        <input type="hidden" name="idpiece" value="{{ $p->idpiece }}">

                                        <div class="position-relative form-group ml-3"><label for="examplePassword11"
                                                class="___class_+?24___ mr-3">Nom</label><input name="nom" type="text"
                                                class="form-control"></div>



                                        <div class="position-relative form-group ml-3"><label for="exampleAddress"
                                                class="___class_+?27___ mr-3">Prix</label><input name="prix" type="text"
                                                class="form-control"></div>


                                        <div class="   position-relative form-group ml-3"><label for="exampleAddress"
                                                class="___class_+?27___ mr-3">Quantite</label><input name="quantite"
                                                type="text" class="form-control"></div>

                                        <button class="btn btn-danger btn-lg ml-5 " title="Ajouter un equipement">
                                            Ajouter
                                        </button>
                                    </form>





                                </div>

                            </div>

                        </div>


                          


                    </div>


                @endforeach

                <!-- /PieceTab -->


            </div>
        </div>
    </div>
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

                <form class="m-5" action="/piece" method="post">

                    @csrf

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Nom de la piece </label><input name="nom" type="text"
                            class="form-control"></div>

                    <input name="idbien" value="{{ $bien->idbien }}" type="hidden" class="form-control">

                    <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                </form>

            </div>

        </div>
    </div>
</div>


@foreach ($pieces as $l)

    <div class="modal fade" id="supp{{ $l->idpiece }}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <center>
                        <h5><img src="/internis.png" alt="logo" width="150"></h5>
                    </center>

                    <center class="mt-2">
                        <h4> Voulez-vous vraiment supprimer cette pièce de votre liste ?</h4>
                    </center>

                    <center class="mt-5 mb-4"><button
                            onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idpiece }}'); form.submit();"
                            class="btn bg-success-light mr-3 p-2 rounded text-white"><i class="fas fa-check mr-1"></i>
                            Confirmer</button> <button type="button" data-dismiss="modal" aria-label="Close"
                            class="btn bg-danger-light p-2 rounded"> <i class="fas fa-times"></i>
                            Annuler</button></center>
                    <form id="form2{{ $l->idpiece }}" action="/piece/{{ $l->idpiece }}}" method="post"
                        style="display: none;">
                        @csrf
                        @method('delete')

                    </form>

                </div>

            </div>
        </div>
    </div>

@endforeach



@foreach ($equipements as $l)

    <div class="modal fade" id="supp2{{ $l->idequipement }}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <center>
                        <h5><img src="/internis.png" alt="logo" width="150"></h5>
                    </center>

                    <center class="mt-2">
                        <h4> Voulez-vous vraiment supprimer cet equipement de votre liste ?</h4>
                    </center>

                    <center class="mt-5 mb-4"><button
                            onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idequipement }}'); form.submit();"
                            class="btn bg-success-light mr-3 p-2 rounded text-white"><i class="fas fa-check mr-1"></i>
                            Confirmer</button> <button type="button" data-dismiss="modal" aria-label="Close"
                            class="btn bg-danger-light p-2 rounded"> <i class="fas fa-times"></i>
                            Annuler</button></center>
                    <form id="form2{{ $l->idequipement }}" action="/equipement/{{ $l->idequipement }}}"
                        method="post" style="display: none;">
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

    <!-- Select2 JS -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>


@endpush
