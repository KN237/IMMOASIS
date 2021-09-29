@extends('admin.index')

@section('title')

    Factures

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-money-check-alt"></i>

@endsection

@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .duele:hover,
        .duele:active {
            transform: scale(1.05);
        }

    </style>

@endpush

@if ($data->role == 'Bailleur')

    @section('bouton')

        <div class="page-title-actions">

            <div class="d-inline-block dropdown">

                <button type="button" class="btn-shadow btn btn-dark" data-toggle="modal" data-target="#form">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="metismenu-icon fas fa-plus"></i>
                    </span>
                    Ajouter une facture
                </button>

            </div>
        </div>


    @endsection

@endif

@section('content')

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table id="example" style="width:100%" class="table table-borderless table-hover text-center">
                <thead>
                    <tr style="font-size: 14px;">

                        @if ($data->role == 'Locataire')

                            <th>Bailleur</th>

                        @else

                            <th>Locataire</th>

                        @endif

                        <th>Bien</th>

                        <th>Montant</th>

                        <th>Du</th>

                        <th>Au</th>

                        <th>Date limite</th>

                        <th>Etat</th>

                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($factures as $l)

                        <tr style="font-size: 14px;">

                            @if ($data->role == 'Locataire')

                                @foreach ($locations as $location)

                                    @if ($location->idlocation == $l->idlocation)

                                        @foreach ($biens as $b)

                                            @if ($location->idbien == $b->idbien)

                                                @foreach ($bailleurs as $ba)

                                                    @if ($ba->idbailleur == $b->idbailleur)

                                                        @foreach ($users as $u)

                                                            @if ($ba->idu == $u->idu)

                                                                <td>{{ $u->nomcomplet }}</td>

                                                            @endif

                                                        @endforeach

                                                    @endif

                                                @endforeach

                                            @endif

                                        @endforeach

                                    @endif

                                @endforeach

                            @else

                                @foreach ($locations as $location)

                                    @if ($location->idlocation == $l->idlocation)

                                        @foreach ($locataires as $loc)

                                            @if ($loc->idlocataire == $location->idlocataire)

                                                @foreach ($users as $u)

                                                    @if ($loc->idu == $u->idu)

                                                        <td>{{ $u->nomcomplet }}</td>

                                                    @endif

                                                @endforeach

                                            @endif

                                        @endforeach

                                    @endif

                                @endforeach

                            @endif


                            @foreach ($locations as $location)

                                @if ($location->idlocation == $l->idlocation)

                                    @foreach ($biens as $b)

                                        @if ($b->idbien == $location->idbien)

                                            <td>{{ $b->nom }}</td>

                                        @endif

                                    @endforeach

                                @endif

                            @endforeach



                            @foreach ($locations as $location)

                                @if ($location->idlocation == $l->idlocation)

                                    <td>{{ $location->montant }}</td>

                                @endif

                            @endforeach


                            <td>{{ $l->datedebut }}</td>

                            <td>{{ $l->datefin }}</td>

                            <td>{{ $l->datelimite }}</td>

                            @if ($l->etat == 1)

                                <td>
                                    <p class="bg-success-light">Payée</p>
                                </td>

                            @else

                                <td>
                                    <p class="bg-danger-light">Non payée</p>
                                </td>

                            @endif

                            <td style="display:flex;flex-direction: column">

                                <center>

                                    <a title="exporter" href="/facture/{{ $l->idfacture }}/pdf"
                                        class="btn bg-info-light "><i class="fas fa-file-pdf"></i>
                                        Exporter</a>

                                    @if ($l->etat == 1)

                                        <a title="exporter quittance" href="/facture/{{ $l->idfacture }}/quittance/pdf"
                                            class="btn bg-warning-light "><i class="fas fa-file-pdf"></i>
                                            Exporter Quittance</a>

                                    @endif

                                    @if ($data->role != 'Bailleur' and $l->etat != 1)

                                        <a title="payer cette facture" data-toggle="modal"
                                            data-target="#pay{{ $l->idfacture }}" class="btn bg-primary-light "><i
                                                class="fas fa-money"></i>
                                            Payer </a>

                                    @endif

                                    @if ($data->role == 'Bailleur')

                                        <a title="supprimer" data-toggle="modal" data-target="#supp{{ $l->idfacture }}"
                                            class="btn bg-danger-light deletebtn"><i class="fas fa-trash"></i>
                                            Supprimer</a>

                                            @if ($l->etat != 1)

                                        <a title="marquer comme payé" onclick="event.preventDefault; var form=document.getElementById('marquer{{ $l->idfacture }}'); form.submit();"
                                            class="btn bg-primary-light deletebtn"><i class="fas fa-pen"></i>
                                            Marquer comme payé</a>

                                            <form id="marquer{{ $l->idfacture }}" action="/facture/{{ $l->idfacture }}" method="post"
                                                style="display: none;">
                                                @csrf
                                                @method('put')

                                                <input type="hidden" name="id" value="{{ $l->idfacture }}">
                        
                                            </form>
                                            
                                            @endif
                                    @endif


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

                <form class="m-5" action="/facture" method="post">
                    @csrf

                    <input type="hidden" name="date" value="{{ now() }}">

                    <input type="hidden" name="etat" value="0">

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Location</label>

                        <select name="idlocation" class="form-control">

                            @foreach ($locations as $location)

                                @foreach ($biens as $b)

                                    @if ($b->idbien == $location->idbien)

                                        <option value="{{ $location->idlocation }}">{{ $b->nom }}</option>

                                    @endif

                                @endforeach

                            @endforeach



                        </select>
                    </div>

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Date de début de location</label><input name="datedebut"
                            type="date" class="form-control">
                    </div>

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Date de fin de location</label><input name="datefin" type="date"
                            class="form-control">
                    </div>

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Date de limite de location</label><input name="datelimite"
                            type="date" class="form-control">
                    </div>

                    <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                </form>

            </div>

        </div>
    </div>
</div>


<!-- Paiement -->

@foreach ($factures as $l)

    <div class="modal fade" id="pay{{ $l->idfacture }}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <h4 class="text-center m-3">Veuillez choisir un opérateur</h4>

                    <div class="d-flex">
                        <div class="card duele m-3 p-3" data-toggle="modal" data-target="#orange{{ $l->idfacture }}"
                            style="width: 18rem;">
                            <img class="card-img-top" src="/orange.png" alt="Card image cap">
                        </div>


                        <div class="card duele m-3 p-3" data-toggle="modal" data-target="#mtn{{ $l->idfacture }}"
                            style="width: 18rem;">
                            <img class="card-img-top" src="/mtn.png" alt="Card image cap">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


@endforeach

<!-- orange-->

@foreach ($factures as $l)

    <div class="modal fade" id="orange{{ $l->idfacture }}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <img class="card-img-top" src="/orange.png" alt="Card image cap">


                    <form action="/facture/pay" method="POST">

                        @csrf

                        <input type="hidden" name="id" value="{{ $l->idfacture }}">

                        @foreach ($locations as $location)

                                    @if ($location->idlocation == $l->idlocation)

                                        @foreach ($biens as $b)

                                            @if ($location->idbien == $b->idbien)

                                                @foreach ($bailleurs as $ba)

                                                    @if ($ba->idbailleur == $b->idbailleur)

                                                            <input type="hidden" name="idbailleur" value="{{ $ba->idbailleur }}">

                                                    @endif

                                                @endforeach

                                            @endif

                                        @endforeach

                                    @endif

                                @endforeach


                        <input type="hidden" name="montant" value="{{ $location->montant }}">

                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Numéro à débiter</label><input name="num" type="text"
                                class="form-control"
                                placeholder="Les transactions Orange money sont momentanément indisponibles" disabled>
                        </div>

                        <button class="mt-2 btn btn-dark btn-block" type="button">Enregistrer</button>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endforeach



<!-- mtn-->

@foreach ($factures as $l)

    @foreach ($locations as $location)

        @if ($l->idlocation == $location->idlocation)

            <div class="modal fade" id="mtn{{ $l->idfacture }}" tabindex="-1" role="dialog"
                aria-labelledby="mySmallModalLabel" aria-hidden="true">

                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-body">

                            <img class="card-img-top" src="/mtn.png" alt="Card image cap">


                            <form action="/facture/pay" method="POST">

                                @csrf

                                <input type="hidden" name="id" value="{{ $l->idfacture }}">


                                @foreach ($locations as $location)

                                @if ($location->idlocation == $l->idlocation)

                                    @foreach ($biens as $b)

                                        @if ($location->idbien == $b->idbien)

                                            @foreach ($bailleurs as $ba)

                                                @if ($ba->idbailleur == $b->idbailleur)

                                                        <input type="hidden" name="idbailleur" value="{{ $ba->idbailleur }}">

                                                @endif

                                            @endforeach

                                        @endif

                                    @endforeach

                                @endif

                            @endforeach


                                <input type="hidden" name="montant" value="{{ $location->montant }}">

                                <div class="position-relative form-group"><label for="examplePassword11"
                                        class="___class_+?24___">Numéro à débiter</label><input name="num" type="text"
                                        class="form-control">
                                </div>

                                <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

        @endif

    @endforeach

@endforeach



@foreach ($factures as $l)

    <div class="modal fade" id="supp{{ $l->idfacture }}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <center>
                        <h5><img src="/internis.png" alt="logo" width="150"></h5>
                    </center>

                    <center class="mt-2">
                        <h4> Voulez-vous vraiment supprimer cette facture de votre liste?</h4>
                    </center>

                    <center class="mt-5 mb-4"><a
                            onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idfacture }}'); form.submit();"
                            class="btn bg-success-light mr-3 p-2 rounded text-white"><i class="fas fa-check mr-1"></i>
                            Confirmer</a> <a type="button" data-dismiss="modal" aria-label="Close"
                            class="btn bg-danger-light p-2 rounded "><i class="fas fa-times"></i> Annuler</a></center>
                    <form id="form2{{ $l->idfacture }}" action="/facture/{{ $l->idfacture }}" method="post"
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
