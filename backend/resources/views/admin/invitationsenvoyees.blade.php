@extends('admin.index')

@section('title')

  Mes invitations

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-location-arrow"></i>

@endsection

@section('bouton')

    <div class="page-title-actions">

        <div class="d-inline-block dropdown">


        </div>
    </div>


@endsection

@section('content')

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table id="example" style="width:100%" class="table table-borderless table-hover text-center">
                <thead>

                    <tr style="font-size: 14px;">

                        <th>Nom Locataire</th>

                        <th>Date d'envoi</th>

                        <th>Statut</th>

                        <th>Actions</th>

                    </tr>

                </thead>
                <tbody>

                    @foreach ($invitations as $l)

                        <tr style="font-size: 14px;">

                            @foreach ($locataires as $i)

                            @if($i->idlocataire==$l->idlocataire)

                            @foreach ($utilisateurs as $u)

                            @if($u->idu==$i->idu)


                            <td>{{ $u->nomcomplet }}</td>

                            @endif

                            @endforeach

                            @endif

                            @endforeach

                            <td>{{ $l->date}}</td>

                            <td>
                               
                                @if($l->etat==0) EN COURS @endif


                                @if($l->etat==1) REFUSéE @endif


                                @if($l->etat==2) ACCEPTéE @endif


                            </td>

                            <td style="display:flex;flex-direction: column;"> <center> 
                                    
                                    <a title="supprimer"
                                    data-toggle="modal" data-target="#supp{{ $l->idinvitation}}"
                                    class="btn bg-danger-light"><i class="fas fa-trash"> Supprimer</i></a> 
                                
                                </center> </td>
                        </tr>
                        
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection


@foreach ($invitations as $l)

<div class="modal fade" id="supp{{ $l->idinvitation }}" tabindex="-1" role="dialog"
  aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog">

      <div class="modal-content">

          <div class="modal-body">

              <center>
                  <h5><img src="/internis.png" alt="logo" width="150"></h5>
              </center>

<center class="mt-2"><h4> Voulez-vous vraiment supprimer cette invitation ?</h4></center>

<center class="mt-5 mb-4"><a onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idinvitation}}'); form.submit();"
    class="btn bg-success-light mr-3 p-2 rounded text-white" ><i class="fas fa-check mr-1"></i> Confirmer</a> <a type="button" data-dismiss="modal" aria-label="Close" class="btn bg-danger-light p-2 rounded "><i class="fas fa-times"></i> Annuler</a></center>
    <form id="form2{{ $l->idinvitation }}" action="/invitation/{{ $l->idinvitation }}/supprimer" method="post"
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