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

                        <th>Nom Bailleur</th>

                        <th>Date de reception</th>

                        <th>Statut</th>

                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($invitations as $l)

                    @if($l->etat==0)

                        <tr style="font-size: 14px;">

                            @foreach ($utilisateurs as $u)

                            <td>{{ $u->nomcomplet }}</td>

                            @endforeach
            
                            <td>{{ $l->date}}</td>

                            <td>
                               
                                @if($l->etat==0) EN COURS @endif


                                @if($l->etat==1) REFUSE @endif


                            </td>

                            <td style="display:flex;flex-direction: column;"> <center> 
                                    
                                    <button title="accepter"
                                    data-toggle="modal" data-target="#acc{{ $l->idinvitation}}"
                                    class="btn btn-success w-25"><i class="fas fa-check"></i></button> 

                                    <button title="refuser"
                                    data-toggle="modal" data-target="#rej{{ $l->idinvitation}}"
                                    class="btn btn-danger w-25"><i class="fas fa-trash"></i></button> 
                                
                                </center> </td>

                        </tr>

@endif
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection

@foreach ($invitations as $l)

<div class="modal fade" id="rej{{ $l->idinvitation }}" tabindex="-1" role="dialog"
  aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog">

      <div class="modal-content">

          <div class="modal-body">

              <center>
                  <h5><img src="/internis.png" alt="logo" width="150"></h5>
              </center>

<center class="mt-2"><h4> Voulez-vous vraiment vous rejeter cette invitation ?</h4></center>

<center class="mt-5 mb-4"><button onclick="event.preventDefault; var form=document.getElementById('form{{ $l->idinvitation}}'); form.submit();"
    class="btn-success mr-3 p-2 rounded text-white" ><i class="fas fa-check mr-1"></i> Confirmer</button> <button type="button" data-dismiss="modal" aria-label="Close" class="btn-danger p-2 rounded "><i class="fas fa-trash mr-1"></i> Annuler</button></center>
    <form id="form{{ $l->idinvitation }}" action="/invitation/{{ $l->idinvitation }}/rejeter" method="post"
        style="display: none;">
        @csrf

    </form>

          </div>

      </div>
  </div>
</div>

@endforeach



@foreach ($invitations as $l)

<div class="modal fade" id="acc{{ $l->idinvitation }}" tabindex="-1" role="dialog"
  aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog">

      <div class="modal-content">

          <div class="modal-body">

              <center>
                  <h5><img src="/internis.png" alt="logo" width="150"></h5>
              </center>

<center class="mt-2"><h4> Voulez-vous vraiment vous accepter cette invitation ?</h4></center>

<center class="mt-5 mb-4"><button onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idinvitation}}'); form.submit();"
    class="btn-success mr-3 p-2 rounded text-white" ><i class="fas fa-check mr-1"></i> Confirmer</button> <button type="button" data-dismiss="modal" aria-label="Close" class="btn-danger p-2 rounded "><i class="fas fa-trash mr-1"></i> Annuler</button></center>
    <form id="form2{{ $l->idinvitation }}" action="/invitation/{{ $l->idinvitation }}/accepter" method="post"
        style="display: none;">
        @csrf

    </form>

          </div>

      </div>
  </div>
</div>

@endforeach