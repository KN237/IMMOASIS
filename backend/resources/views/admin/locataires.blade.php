@extends('admin.index')

@section('title')

    Mes locataires

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-users"></i>

@endsection

@section('bouton')

    <div class="page-title-actions">

        <div class="d-inline-block dropdown">

            <button type="button" class="btn-shadow btn btn-dark"  data-toggle="modal" data-target="#form">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="metismenu-icon fas fa-plus"></i>
                </span>
                Créer un locataire
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
                        <th>Nom Complet</th>
                        <th>Téléphones</th>
                        <th>Adresse</th>
                        <th>Date Naissance</th>
                        <th>Sexe</th>
                        <th>Numéro de CNI</th>
                        <th>Profession</th>
                        <th>Exemplaire de signature</th>
                        <th>Nom de son employeur</th>
                        <th>Téléphone de son employeur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($locataires as $l)
                        <tr style="font-size: 14px;">
                            @foreach ($users as $u)
                                @if ($l->idu == $u->idu)
                                    <td>{{ $u->nomcompletu }}</td>
                                    <td>{{ $u->telephoneu }}/{{ $l->telephonesecloc }}</td>
                                @endif
                            @endforeach

                            <td>{{ $l->paysloc }},{{ $l->villeloc }},{{ $l->quartierloc }}</td>
                            <td>{{ $l->datenaissloc }}</td>
                            <td>{{ $l->sexeloc }}</td>
                            <td>{{ $l->numcniloc }}</td>
                            <td>{{ $l->professionloc }}</td>
                            <td> @if ($l->signatureLoc != null) <img src="/{{ $l->signatureLoc }}" alt="signature locataire" width="50"> @else Pas encore de signature enregistrée @endif</td>
                            <td>{{ $l->nomcompletemployeurloc }}</td>
                            <td>{{ $l->telemployeurloc }}</td>

                            <td style="display:flex;flex-direction: column"> <button class="btn btn-dark"
                                    data-toggle="modal" data-target="#modal{{ $l->idlocataire }}"><i class="far fa-edit"></i></button> <button
                                    onclick="event.preventDefault; var form=document.getElementById('form{{ $l->idlocataire }}'); form.submit();"
                                    class="btn btn-danger mt-1"><i class="fas fa-trash"></i></button> </td>
                            <form id="form{{ $l->idlocataire }}" action="/locataire/{{ $l->idlocataire }}" method="post"
                                style="display: none;">
                                @csrf
                                @method('delete')



                            </form>



                        </tr>


                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection

@foreach ($locataires as $l)
@foreach ($users as $u)
@if ($l->idu == $u->idu)

    <!-- Modif -->

    <div class="modal fade" id="modal{{ $l->idlocataire }}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">

                    <center>
                        <h5><img src="/internis.png" alt="logo" width="100"></h5>
                    </center>

                    <form class="___class_+?15___" class="m-5" action="/utilisateur/{{$u->idu}}" method="post">
@csrf
@method('put')

                                <div class="position-relative form-group"><label for="examplePassword11"
                                        class="___class_+?24___">Nom complet</label><input name="nomcompletu" type="text"
                                        class="form-control" value="{{ $u->nomcompletu }}"></div>


       
                        <div class="position-relative form-group"><label for="exampleAddress"
                                class="___class_+?27___">Email</label><input name="emailu" type="text" class="form-control"  value="{{ $u->emailu }}"></div>


                                <div class="position-relative form-group"><label for="exampleAddress"
                                    class="___class_+?27___">Téléphone</label><input name="telephoneu" type="text" class="form-control"  value="{{ $u->telephoneu }}"></div>

                                    <div class="position-relative form-group"><label for="exampleAddress"
                                        class="___class_+?27___">Mot de passe</label><input name="mdpu" type="text" class="form-control"></div>


                        <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                    </form>

                </div>

            </div>
        </div>
    </div>


    @endif
@endforeach
@endforeach


  <!-- Ajout -->

  <div class="modal fade" id="form" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-body">

                <center>
                    <h5><img src="/internis.png" alt="logo" width="100"></h5>
                </center>

                <form class="___class_+?15___" class="m-5" action="/utilisateur" method="post">
@csrf


                            <div class="position-relative form-group"><label for="examplePassword11"
                                    class="___class_+?24___">Nom complet</label><input name="nomcompletu" type="text"
                                    class="form-control" ></div>


   
                    <div class="position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Email</label><input name="emailu" type="text" class="form-control"  "></div>


                            <div class="position-relative form-group"><label for="exampleAddress"
                                class="___class_+?27___">Téléphone</label><input name="telephoneu" type="text" class="form-control"></div>

                                <div class="position-relative form-group"><label for="exampleAddress"
                                    class="___class_+?27___">Mot de passe</label><input name="mdpu" type="text" class="form-control"></div>


                    <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                </form>

            </div>

        </div>
    </div>
</div>
