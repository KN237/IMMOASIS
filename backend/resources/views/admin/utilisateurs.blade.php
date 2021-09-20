@extends('admin.index')

@section('title')

    Liste de tous les utilisateurs

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-users"></i>

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

                        <th>Nom Complet</th>

                        <th>Téléphones</th>

                        <th>Email</th>

                        <th>Role</th>

                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($u as $l)
                        <tr style="font-size: 14px;">

                            <td>{{ $l->nomcomplet }}</td>

                            <td>{{ $l->telephone }}</td>

                            <td>{{ $l->email }}</td>

                            <td>{{ $l->role }}</td>


                            <td style="display:flex;flex-direction: column;">

                                <center> @if($l->role=="Locataire") 
                                    
                                    @foreach ($locataires as $lo)

                                    @if($lo->idu==$l->idu)

                                    <a href="profilelocataire/{{ $lo->idlocataire }}" title="consulter"
                                        class="btn bg-info-light"><i class="fas fa-eye"> Consulter</i></a>
                                      @endif  
                                    @endforeach



                                        @else

                                        @foreach ($bailleurs as $lo)

                                        @if($lo->idu==$l->idu) 
                                        
                                        <a href="profilebailleur/{{ $lo->idbailleur }}" title="consulter"
                                            class="btn bg-info-light "><i class="fas fa-eye"> Consulter</i></a>
                                            
                                            @endif  

                                            @endforeach
                                            
                                            @endif

                                    <button title="supprimer"
                                    data-toggle="modal" data-target="#supp{{ $l->idu}}"
                                        class="btn bg-danger-light"><i class="fas fa-trash"> Supprimer</i></button>

                                </center>
                            </td>
 
                        </tr>


                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection

@push('page-js')
    <script src="/main/assets/js/jquery-2.1.0.min.js"></script>
@endpush

@foreach ($u as $l)

<div class="modal fade" id="supp{{ $l->idu }}" tabindex="-1" role="dialog"
  aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog">

      <div class="modal-content">

          <div class="modal-body">

              <center>
                  <h5><img src="/internis.png" alt="logo" width="150"></h5>
              </center>

<center class="mt-2"><h4> Voulez-vous vraiment supprimer cet utilisateur ?</h4></center>

<center class="mt-5 mb-4"><button onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idu}}'); form.submit();"
    class="btn bg-success-light mr-3 p-2 rounded text-white" ><i class="fas fa-check mr-1"></i> Confirmer</button> <button type="button" data-dismiss="modal" aria-label="Close" class="btn bg-danger-light p-2 rounded "><i class="fas fa-trash mr-1"></i> Annuler</button></center>
    <form id="form2{{ $l->idu }}" action="/utilisateur/{{ $l->idu }}" method="get"
        style="display: none;">
        @csrf
        @method('delete')

    </form>

          </div>

      </div>
  </div>
</div>

@endforeach