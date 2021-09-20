@extends('admin.index')

@section('title')

    Mes biens

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-home"></i>

@endsection

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
@endpush

@section('bouton')

    <div class="page-title-actions">

        <div class="d-inline-block dropdown">

            <button type="button" class="btn-shadow btn btn-dark" data-toggle="modal" data-target="#form">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="metismenu-icon fas fa-plus"></i>
                </span>
                Créer un bien
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

                        <th>Nom </th>

                        <th>Type de bien</th>

                        <th>Ville</th>

                        <th>Quartier</th>

                        <th>Image</th>

                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($biens as $l)
                    
                        <tr style="font-size: 14px;">

                            <td>{{ $l->nom }}</td>

                            @foreach ($tb as $u)

                                @if ($l->idtb == $u->idtb)

                                    <td>{{ $u->nom }}</td>

                                @endif
                                
                            @endforeach


                            <td>{{ $l->ville }}</td>

                            <td>{{ $l->quartier }}</td>

                            <td>{{ $l->image }}</td>

                            <td style="display:flex;flex-direction: column">

                                <center><a href="profilelocataire/{{ $l->idbien }}"  title="consulter le profile" class="btn bg-info-light"><i class="far fa-eye"></i> Consulter</a>
                                    <button title="supprimer"
                                    data-toggle="modal" data-target="#supp{{ $l->idbien}}"
                                        class="btn bg-danger-light deletebtn"><i class="fas fa-trash"> Supprimer</i></button>
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

                <form class="___class_+?15___" enctype="multipart/form-data" class="m-5" action="/bien" method="post">
                    @csrf

                    <input type="hidden" name="compte">

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Nom</label><input name="nom" type="text"
                            class="form-control"></div>



                    <div class="position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Numéro du permis de construire</label><input name="numpermisconst" type="text" class="form-control"></div>


                            <div class="   position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Numéro du titre foncier</label><input name="numtitrefoncier" type="text"
                            class="form-control"></div>

                    <div class="position-relative form-group"><label for="exampleAddress" class="___class_+?27___">Type de bien</label>
                    
                    <input  type="text">
                    
                    <select name="idtb" class="form-control">
@foreach($tb as $u)
                    <option value="{{$u->idtb}}">{{$u->nom}}</option>

 @endforeach

                    </select>
                    
                    </div>


                    <div class="position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Description</label><input name="description" type="text"
                            class="form-control"></div>


                             <div class="position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Superficie</label><input name="superficie" type="text"
                            class="form-control"></div>

                             <div class="position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Ville</label><input name="ville" type="text"
                            class="form-control"></div>

                             <div class="position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Quartier</label><input name="quartier" type="text"
                            class="form-control"></div>


                             <div class="position-relative form-group"><label for="exampleAddress"
                            class="___class_+?27___">Image</label><input name="image" type="file"
                            class="form-control"></div>


                    <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                </form>

            </div>

        </div>
    </div>
</div>

@foreach ($biens as $l)

<div class="modal fade" id="supp{{ $l->idbien }}" tabindex="-1" role="dialog"
  aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog">

      <div class="modal-content">

          <div class="modal-body">

              <center>
                  <h5><img src="/internis.png" alt="logo" width="150"></h5>
              </center>

<center class="mt-2"><h4> Voulez-vous vraiment vous supprimer ce bien de votre liste?</h4></center>

<center class="mt-5 mb-4"><button onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idbien}}'); form.submit();"
    class="btn bg-success-light mr-3 p-2 rounded text-white" ><i class="fas fa-check mr-1"></i> Confirmer</button> <button type="button" data-dismiss="modal" aria-label="Close" class="btn bg-danger-light p-2 rounded "><i class="fas fa-trash mr-1"></i> Annuler</button></center>
    <form id="form2{{ $l->idbien }}" action="/bien/{{ $l->idbien }}" method="get"
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

