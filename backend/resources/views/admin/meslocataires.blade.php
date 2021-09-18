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

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table id="example" style="width:100%" class="table table-borderless table-hover text-center">
                <thead>
                    <tr style="font-size: 14px;">

                        <th>Nom Complet</th>

                        <th>Téléphones</th>

                        <th>Ville</th>

                        <th>Profession</th>

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
                                    <td>{{ $u->nomcomplet }}</td>
                                    <td>{{ $u->telephone }}</td>
                                @endif
                            @endforeach

                            <td>{{ $l->ville }}</td>

                            <td>{{ $l->profession }}</td>

                            <td>{{ $l->nomcompletemployeur }}</td>

                            <td>{{ $l->telemployeur }}</td>

                            <td style="display:flex;flex-direction: column">

                                <center><a href="profilelocataire/{{ $l->idlocataire }}" class="btn btn-dark"><i class="far fa-eye"></i></a>
                                    <button
                                        onclick="event.preventDefault; var form=document.getElementById('form{{ $l->idlocataire }}'); form.submit();"
                                        class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </center>
                            </td>
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


<!-- Ajout -->

<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-body">

                <center>
                    <h5><img src="/internis.png" alt="logo" width="100"></h5>
                </center>

                <form class="___class_+?15___" class="m-5" action="/utilisateur" method="post">
                    @csrf

                    <input type="hidden" name="compte" value="Locataire">
                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Nom complet</label><input name="nomcomplet" type="text"
                            class="form-control"></div>



                    <div class="position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Email</label><input name="email" type="text" class="form-control" "></div>


                            <div class="   position-relative form-group"><label for="exampleAddress"
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
