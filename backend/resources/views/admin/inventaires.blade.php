@extends('admin.index')

@section('title')

    Inventaires

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-clipboard"></i>

@endsection

@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .nav-item .nav-link {
            color: black;
        }

        .nav-item .active {
            background-color: #343a40 !important;
            color: white !important;
        }

    </style>

@endpush

@section('bouton')

    <div class="page-title-actions">

        <div class="d-inline-block dropdown">

            <button type="button" class="btn-shadow btn btn-dark" data-toggle="modal" data-target="#form">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="metismenu-icon fas fa-plus"></i>
                </span>
                Créer un inventaire
            </button>

        </div>
    </div>


@endsection

@section('content')

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table id="example" style="width:100%" class="table table-borderless table-hover text-center">
                <thead>
                    <tr style="font-size: 14px;">

                        <th>Bien</th>


                        <th>Description</th>


                        <th>Date</th>


                        <th> Signé par le bailleur ?</th>


                        <th> Signé par le locataire ?</th>


                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($inventaires as $l)

                        <tr style="font-size: 14px;">



                            @foreach ($biens as $b)

                                @if ($b->idbien == $l->idbien)

                                    <td>{{ $b->nom }}</td>

                                @endif

                            @endforeach

                            <td>{{ $l->description }}</td>

                            <td>{{ $l->date }}</td>


                                @if ($l->signbailleur == 0)

                                    <td>Non</td>

                                @else

                                    <td>Oui</td>
                                @endif



                                @if ($l->signlocataire == 0)

                                    <td>Non</td>


                                @else

                                    <td>Oui</td>

                                @endif

                            <td style="display:flex;flex-direction: column">

                                <center>

                                    @if($data->role=="Bailleur")

                                    <a href="/dashboard/configinventaire/{{ $l->idinventaire }}" title="configurer"
                                        class="btn bg-primary-light "><i class="fas fa-edit"></i> Configurer </a>

                                     @endif   



                                    <a title="exporter" href="/inventaire/pdf/{{ $l->idinventaire }}" class="btn bg-info-light "><i class="fas fa-file-pdf"></i>
                                        Exporter</a>

                                        @if($data->role=="Bailleur")

                                    <a title="signer" href="/inventaire/bailleur/sign/{{ $l->idinventaire }}" class="btn bg-warning-light "><i class="fas fa-signature"></i>
                                        Signer</a>
   
                                        @else

                                        <a title="signer" href="/inventaire/locataire/sign/{{ $l->idinventaire }}" class="btn bg-warning-light "><i class="fas fa-signature"></i>
                                            Signer</a>
                                            
                                        @endif

                                        @if($data->role=="Bailleur")

                                    <a title="modifier" data-toggle="modal" data-target="#mod{{ $l->idinventaire }}"
                                        class="btn bg-primary-light "><i class="fas fa-eye"></i> modifier </a>

                                    <a title="supprimer" data-toggle="modal"
                                        data-target="#supp{{ $l->idinventaire }}" class="btn bg-danger-light deletebtn"><i
                                            class="fas fa-trash"></i>
                                        Supprimer</a>

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

                <form class="m-5" action="/inventaire" method="post">
                    @csrf

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Description </label><input name="description" type="text"
                            class="form-control"></div>


                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Date</label><input name="date" type="date" class="form-control">
                    </div>


                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Bien</label>

                        <select name="idbien" class="form-control">

                            @foreach ($biens as $b)

                                <option value="{{ $b->idbien }}"> {{ $b->nom }}</option>

                            @endforeach

                        </select>

                    </div>
                    <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                </form>

            </div>

        </div>
    </div>
</div>


@foreach ($inventaires as $l)

    <!-- Mod -->

    <div class="modal fade" id="mod{{ $l->idinventaire }}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <center>
                        <h5><img src="/internis.png" alt="logo" width="100"></h5>
                    </center>

                    <form class="m-5" action="/inventaire/{{ $l->idinventaire }}" method="post">
                        @csrf
                        @method('put')

                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Description </label><input name="description" type="text"
                                class="form-control" value="{{ $l->description }}"></div>


                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Date</label><input name="date" type="date"
                                class="form-control" value="{{ $l->date }}"></div>


                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Bien</label>

                            <select name="idbien" class="form-control">

                                @foreach ($biens as $b)

                                    <option value="{{ $b->idbien }}"> {{ $b->nom }}</option>

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


@foreach ($inventaires as $l)

    <div class="modal fade" id="supp{{ $l->idinventaire }}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <center>
                        <h5><img src="/internis.png" alt="logo" width="150"></h5>
                    </center>

                    <center class="mt-2">
                        <h4> Voulez-vous vraiment supprimer cet inventaire de votre liste?</h4>
                    </center>

                    <center class="mt-5 mb-4"><button
                            onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idinventaire }}'); form.submit();"
                            class="btn bg-success-light mr-3 p-2 rounded text-white"><i class="fas fa-check mr-1"></i>
                            Confirmer</button> <button type="button" data-dismiss="modal" aria-label="Close"
                            class="btn bg-danger-light p-2 rounded "><i class="fas fa-times"></i>
                            Annuler</button></center>
                    <form id="form2{{ $l->idinventaire }}" action="/inventaire/{{ $l->idinventaire }}"
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
