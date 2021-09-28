@extends('admin.index')

@section('title')

    Interventions

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-tools"></i>

@endsection

@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

@endpush

@section('bouton')

    <div class="page-title-actions">

        <div class="d-inline-block dropdown">

            <button type="button" class="btn-shadow btn btn-dark" data-toggle="modal" data-target="#form">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="metismenu-icon fas fa-plus"></i>
                </span>
                Ajouter une intervention
            </button><br>

        </div>
    </div>


@endsection

@section('content')

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table id="example" style="width:100%" class="table table-borderless table-hover text-center">
                <thead>
                    <tr style="font-size: 14px;">

                        <th>Libellé</th>

                        <th>Initiateur </th>

                        <th>Bien </th>

                        <th>Description </th>

                        <th>Date </th>

                        <th>Montant </th>

                        <th>Artisan </th>

                        <th>Statut </th>

                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($renovations as $l)

                        <tr style="font-size: 14px;">

                            <td>{{ $l->libelle }}</td>

                            @foreach ($users as $a)

                                @if ($a->idu == $l->idu)

                                    <td>{{ $a->nomcomplet }}</td>

                                @endif

                            @endforeach

                            @foreach ($biens as $a)

                                @if ($a->idbien == $l->idbien)

                                    <td>{{ $a->nom }}</td>

                                @endif

                            @endforeach

                            <td>{{ $l->description }}</td>

                            <td>{{ $l->date }}</td>

                            <td>{{ $l->montant }}</td>

                            @foreach ($artisans as $a)

                                @if ($a->idartisan == $l->idartisan)

                                    <td>{{ $a->nomcomplet }}</td>

                                @endif

                            @endforeach


                            @if ($l->statut == "EFFECTUé")

                            <td class="bg-success-light">{{ $l->statut }}</td>
   
                            @else

                            <td class="bg-danger-light">{{ $l->statut }}</td>
                                
                            @endif


                            <td style="display:flex;flex-direction: column">

                                <center>

                                    <a title="modifier" data-toggle="modal"
                                        data-target="#mod2{{ $l->idrenovation }}" class="btn bg-primary-light"><i
                                            class="fas fa-eye"></i> Modifier</a>

                                           

                                    <a title="supprimer" data-toggle="modal"
                                        data-target="#supp{{ $l->idrenovation }}"
                                        class="btn bg-danger-light deletebtn"><i class="fas fa-trash"></i>
                                        Supprimer</a>
                                </center>
                            </td>

                        </tr>


                    @endforeach

                </tbody>
            </table>
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

                <form class="m-5" action="/renovation" method="POST">
                    @csrf

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Libellé </label><input name="libelle" type="text"
                            class="form-control"></div>

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Bien </label>


                        <select name="idbien"
                            title="Veuillez remplir ce champs si vous avez fait appel à un de nos artisans pour cette intervention"
                            class="form-control">

                            @foreach ($biens as $b)

                                <option value="{{ $b->idbien }}">{{ $b->nom }}</option>

                            @endforeach



                        </select>

                    </div>

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Description </label><input name="description" type="text"
                            class="form-control"></div>


                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Montant </label><input name="montant" type="text"
                            class="form-control"></div>

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Date </label><input name="date" type="date"
                            class="form-control"></div>

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Statut </label>

                        <select name="statut" class="form-control">

                            <option value="EFFECTUé">EFFECTUée</option>
                            <option value="EN COURS">EN COURS</option>

                        </select>

                    </div>

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Artisan </label>


                        <select name="idartisan"
                            title="Veuillez remplir ce champs si vous avez fait appel à un de nos artisans pour cette intervention"
                            class="form-control">

                            @foreach ($artisans as $a)

                                <option value="{{ $a->idartisan }}">{{ $a->nomcomplet }}</option>

                            @endforeach



                        </select>

                    </div>

                    <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                </form>

            </div>

        </div>
    </div>
</div>



<!-- Mod-->
@foreach ($renovations as $l)

    <div class="modal fade" id="mod2{{ $l->idrenovation }}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <center>
                        <h5><img src="/internis.png" alt="logo" width="100"></h5>
                    </center>

                    <form class="m-5" action="/renovation/{{ $l->idrenovation }}" method="post">

                        @csrf
                        @method('put')

                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Libellé </label><input name="motif" type="text"
                                class="form-control" value="{{ $l->libelle }}"></div>

                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Bien </label>


                            <select name="idbien"
                                title="Veuillez remplir ce champs si vous avez fait appel à un de nos artisans pour cette intervention"
                                class="form-control">

                                @foreach ($biens as $b)

                                    <option value="{{ $b->idbien }}">{{ $b->nom }}</option>

                                @endforeach



                            </select>

                        </div>

                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Description </label><input name="description" type="text"
                                class="form-control" value="{{ $l->description }}"></div>


                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Montant </label><input name="montant" type="text"
                                class="form-control" value="{{ $l->montant }}"></div>

                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Date </label><input name="priorité" type="date"
                                class="form-control" value="{{ $l->date }}"></div>

                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Statut </label>

                            <select name="statut" class="form-control">

                                <option value="EFFECTUé">EFFECTUée</option>
                                <option value="EN COURS">EN COURS</option>

                            </select>

                        </div>

                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Artisan </label>


                            <select name="idartisan"
                                title="Veuillez remplir ce champs si vous avez fait appel à un de nos artisans pour cette intervention"
                                class="form-control">

                                @foreach ($artisans as $a)

                                    <option value="{{ $a->idartisan }}">{{ $a->nomcomplet }}</option>

                                @endforeach



                            </select>

                        </div>

                        <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                    </form>

                </div>

            </div>
        </div>
    </div>

@endforeach

@foreach ($renovations as $l)

    <div class="modal fade" id="supp{{ $l->idrenovation }}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <center>
                        <h5><img src="/internis.png" alt="logo" width="150"></h5>
                    </center>

                    <center class="mt-2">
                        <h4> Voulez-vous vraiment supprimer cette intervention de votre liste?</h4>
                    </center>

                    <center class="mt-5 mb-4"><a
                            onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idrenovation }}'); form.submit();"
                            class="btn bg-success-light mr-3 p-2 rounded text-white"><i class="fas fa-check mr-1"></i>
                            Confirmer</a> <a type="button" data-dismiss="modal" aria-label="Close"
                            class="btn bg-danger-light p-2 rounded "><i class="fas fa-times"></i> Annuler</a>
                    </center>
                    <form id="form2{{ $l->idrenovation }}" action="/renovation/{{ $l->idrenovation }}"
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
@endpush
