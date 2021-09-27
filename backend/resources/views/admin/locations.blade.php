@extends('admin.index')

@section('title')

    Mes locations

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-key"></i>

@endsection

@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

@endpush

@section('bouton')

    <div class="page-title-actions">

        <div class="d-inline-block dropdown">

            @if ($data->role == 'Bailleur')

                <button type="button" class="btn-shadow btn btn-dark" data-toggle="modal" data-target="#form">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="metismenu-icon fas fa-plus"></i>
                    </span>
                    Créer une location
                </button>

            @endif

        </div>
    </div>


@endsection

@section('content')

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table id="example" style="width:100%" class="table table-borderless table-hover text-center">
                <thead>
                    <tr style="font-size: 14px;">

                        <th>Utilisation </th>

                        <th>Activité</th>

                        @if ($data->role == 'Bailleur')
                            <th>Locataire</th>

                        @else
                            <th>Bailleur</th>
                        @endif
                        <th>Bien</th>

                        <th>Type de location</th>

                        <th>Durée</th>

                        <th>Montant</th>

                        <th>Montant caution</th>

                        @if ($data->role == 'Bailleur')
                            <th>Actions</th>
                        @endif

                    </tr>
                </thead>
                <tbody>

                    @foreach ($locations as $l)

                        <tr style="font-size: 14px;">

                            <td>{{ $l->utilisation }}</td>

                            <td>{{ $l->activite }}</td>

                            @if ($data->role == 'Bailleur')

                                @foreach ($locataires as $u)

                                    @if ($l->idlocataire == $u->idlocataire)

                                        @foreach ($users as $user)

                                            @if ($u->idu == $user->idu)

                                                <td>{{ $user->nomcomplet }}</td>


                                            @endif

                                        @endforeach

                                    @endif

                                @endforeach

                            @else


                                @foreach ($biens as $b)

                                    @if ($b->idbien == $l->idbien)

                                        @foreach ($bailleurs as $u)

                                            @if ($u->idbailleur == $b->idbailleur)

                                                @foreach ($users as $user)

                                                    @if ($user->idu == $u->idu)

                                                        <td>{{ $user->nomcomplet }}</td>

                                                    @endif

                                                @endforeach

                                            @endif

                                        @endforeach

                                    @endif

                                @endforeach

                            @endif


                            @foreach ($biens as $u)

                                @if ($l->idbien == $u->idbien)

                                    <td>{{ $u->nom }}</td>

                                @endif

                            @endforeach


                            @foreach ($tl as $u)

                                @if ($l->idtl == $u->idtl)

                                    <td>{{ $u->nom }}</td>

                                @endif

                            @endforeach


                            <td>{{ $l->duree }}</td>

                            <td>{{ $l->montant }}</td>

                            <td>{{ $l->montantcaution }}</td>

                            @if ($data->role == 'Bailleur')

                                <td style="display:flex;flex-direction: column">

                                    <center><a title="modifier" data-toggle="modal"
                                            data-target="#mod2{{ $l->idlocation }}" class="btn bg-primary-light"><i
                                                class="far fa-eye"></i> Modifier</a>
                                        <a title="supprimer" data-toggle="modal"
                                            data-target="#supp{{ $l->idlocation }}"
                                            class="btn bg-danger-light deletebtn"><i class="fas fa-trash">
                                                Supprimer</i></a>
                                    </center>
                                </td>

                            @endif

                        </tr>


                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

@if ($data->role == 'Bailleur')

    <!-- Ajout -->

    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <center>
                        <h5><img src="/internis.png" alt="logo" width="100"></h5>
                    </center>

                    <form  class="m-5"
                        action="/location" method="post">
                        @csrf

                        <input type="hidden" name="compte">

                        <div class="position-relative form-group"><label for="examplePassword11"
                                class="___class_+?24___">Utilisation</label><input name="utilisation" type="text"
                                class="form-control"></div>



                        <div class="position-relative form-group"><label for="exampleAddress"
                                class="___class_+?27___">Activité</label><input name="activite" type="text"
                                class="form-control"></div>



                                <div class="position-relative form-group"><label for="exampleAddress"
                                    class="___class_+?27___">Locataire</label>

                                <input type="text">

                                <select name="idlocataire" class="form-control">
                                    @foreach ($locataires as $u)

                                          @foreach ($users as $user)

                                          @if ($u->idu == $user->idu)
                                              
                                          
                                        <option value="{{ $u->idlocataire }}">{{ $user->nomcomplet }}</option>

                                        @endif

                                    @endforeach

                                    @endforeach

                                </select>

                            </div>




                        <div class="position-relative form-group"><label for="exampleAddress"
                                class="___class_+?27___">Type
                                de location</label>

                            <input type="text">

                            <select name="idtl" class="form-control">
                                @foreach ($tl as $u)
                                    <option value="{{ $u->idtl }}">{{ $u->nom }}</option>

                                @endforeach

                            </select>

                        </div>



                        <div class="position-relative form-group"><label for="exampleAddress"
                                class="___class_+?27___">Bien</label>

                            <input type="text">

                            <select name="idbien" class="form-control">
                                @foreach ($biens as $u)
                                    <option value="{{ $u->idbien }}">{{ $u->nom }}</option>

                                @endforeach

                            </select>

                        </div>


                        <div class="position-relative form-group"><label for="exampleAddress"
                                class="___class_+?27___">Durée
                                prévisionnelle</label><input name="duree" type="text" class="form-control"></div>


                        <div class="position-relative form-group"><label for="exampleAddress"
                                class="___class_+?27___">Montant</label><input name="montant" type="text"
                                class="form-control"></div>

                        <div class="position-relative form-group"><label for="exampleAddress"
                                class="___class_+?27___">MontantCaution</label><input name="montantcaution" type="text"
                                class="form-control"></div>


                        <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                    </form>

                </div>

            </div>
        </div>
    </div>




    <!-- Mod -->

    @foreach ($locations as $l)

        <div class="modal fade" id="mod2{{ $l->idlocation }}" tabindex="-1" role="dialog"
            aria-labelledby="mySmallModalLabel" aria-hidden="true">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-body">

                        <center>
                            <h5><img src="/internis.png" alt="logo" width="100"></h5>
                        </center>

                        <form  class="m-5"
                            action="/location/{{ $l->idlocation }}" method="post">
                            @csrf
                            @method('put')

                            <input type="hidden" name="compte">

                            <div class="position-relative form-group"><label for="examplePassword11"
                                    class="___class_+?24___">Utilisation</label><input name="utilisation" type="text"
                                    class="form-control" value="{{ $l->utilisation }}"></div>



                            <div class="position-relative form-group"><label for="exampleAddress"
                                    class="___class_+?27___">Activité</label><input name="activite" type="text"
                                    class="form-control" value="{{ $l->activite }}"></div>



                            <div class="position-relative form-group"><label for="exampleAddress"
                                    class="___class_+?27___">Locataire</label>

                                <input type="text">

                                <select name="idlocataire" class="form-control">
                                    @foreach ($locataires as $u)

                                          @foreach ($users as $user)

                                          @if ($u->idu == $user->idu)
                                              
                                          
                                        <option value="{{ $u->idlocataire }}">{{ $user->nomcomplet }}</option>

                                        @endif

                                    @endforeach

                                    @endforeach

                                </select>

                            </div>




                            <div class="position-relative form-group"><label for="exampleAddress"
                                    class="___class_+?27___">Type
                                    de location</label>

                                <input type="text">

                                <select name="idtb" class="form-control">
                                    @foreach ($tl as $u)
                                        <option value="{{ $u->idtl }}">{{ $u->nom }}</option>

                                    @endforeach

                                </select>

                            </div>



                            <div class="position-relative form-group"><label for="exampleAddress"
                                    class="___class_+?27___">Bien</label>

                                <input type="text">

                                <select name="idtb" class="form-control">
                                    @foreach ($biens as $u)
                                        <option value="{{ $u->idbien }}">{{ $u->nom }}</option>

                                    @endforeach

                                </select>

                            </div>


                            <div class="position-relative form-group"><label for="exampleAddress"
                                    class="___class_+?27___">Durée
                                    prévisionnelle</label><input name="duree" type="text" value="{{ $l->duree }}"
                                    class="form-control"></div>


                            <div class="position-relative form-group"><label for="exampleAddress"
                                    class="___class_+?27___">Montant</label><input name="montant" type="text"
                                    value="{{ $l->montant }}" class="form-control"></div>

                            <div class="position-relative form-group"><label for="exampleAddress"
                                    class="___class_+?27___">MontantCaution</label><input name="montantcaution"
                                    type="text" value="{{ $l->montantcaution }}" class="form-control"></div>


                            <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>

    @endforeach


    @foreach ($locations as $l)

        <div class="modal fade" id="supp{{ $l->idlocation }}" tabindex="-1" role="dialog"
            aria-labelledby="mySmallModalLabel" aria-hidden="true">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-body">

                        <center>
                            <h5><img src="/internis.png" alt="logo" width="150"></h5>
                        </center>

                        <center class="mt-2">
                            <h4> Voulez-vous vraiment supprimer cette location de votre liste ?</h4>
                        </center>

                        <center class="mt-5 mb-4"><a
                                onclick="event.preventDefault; var form=document.getElementById('form3{{ $l->idlocation }}'); form.submit();"
                                class="btn bg-success-light mr-3 p-2 rounded text-white"><i
                                    class="fas fa-check mr-1"></i>
                                Confirmer</a> <a type="button" data-dismiss="modal" aria-label="Close"
                                class="btn bg-danger-light p-2 rounded "><i class="fas fa-times"></i>
                                Annuler</a>
                        </center>
                        <form id="form3{{ $l->idlocation }}" action="/location/{{ $l->idlocation }}" method="post"
                            style="display: none;">
                            @csrf
                            @method('delete')

                        </form>

                    </div>

                </div>
            </div>
        </div>

    @endforeach

@endif

@push('page-js')
    <script src="/main/assets/js/jquery-2.1.0.min.js"></script>
@endpush
