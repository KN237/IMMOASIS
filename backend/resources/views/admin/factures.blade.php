@extends('admin.index')

@section('title')

   Factures

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-money-check-alt"></i>

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
                Ajouter
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

                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($tl as $l)
                    
                        <tr style="font-size: 14px;">

                            <td>{{ $l->nom }}</td>

                            <td style="display:flex;flex-direction: column">

                                <center> <a title="supprimer"
                                    data-toggle="modal" data-target="#supp{{ $l->idtl}}"
                                        class="btn bg-danger-light deletebtn"><i class="fas fa-trash"></i> Supprimer</a>
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

                <form  class="m-5" action="/type_de_location" method="post">
                    @csrf

                    <input type="hidden" name="compte" value="Locataire">
                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Nom </label><input name="nom" type="text"
                            class="form-control"></div>

                    <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                </form>

            </div>

        </div>
    </div>
</div>

@foreach ($tl as $l)

<div class="modal fade" id="supp{{ $l->idtl }}" tabindex="-1" role="dialog"
  aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog">

      <div class="modal-content">

          <div class="modal-body">

              <center>
                  <h5><img src="/internis.png" alt="logo" width="150"></h5>
              </center>

<center class="mt-2"><h4> Voulez-vous vraiment supprimer cette facture de votre liste?</h4></center>

<center class="mt-5 mb-4"><a onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idtl}}'); form.submit();"
    class="btn bg-success-light mr-3 p-2 rounded text-white" ><i class="fas fa-check mr-1"></i> Confirmer</a> <a type="button" data-dismiss="modal" aria-label="Close" class="btn bg-danger-light p-2 rounded "><i class="fas fa-times"></i> Annuler</a></center>
    <form id="form2{{ $l->idtl }}" action="/type_de_location/{{ $l->idtl }}" method="post"
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

