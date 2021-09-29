@extends('admin.index')

@section('title')

   Transactions

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-cash-register"></i>

@endsection

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
@endpush


@section('content')

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table id="example" style="width:100%" class="table table-borderless table-hover text-center">
                <thead>
                    <tr style="font-size: 14px;">

                        <th>Motif </th>

                        <th>Initiateur </th>

                        <th>Montant </th>

                        <th>Date </th>

                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($transactions as $t)
                    
                        <tr style="font-size: 14px;">

                            <td>{{ $t->motif }}</td>

                            @foreach($users as $u)

                            @if( $u->idu==$t->idu)

                            <td>{{ $u->nomcomplet }}</td>

                            @endif

                            @endforeach

                            <td>{{ $t->montant }}</td>

                            <td>{{ $t->date }}</td>

                            <td style="display:flex;flex-direction: column">

                                <center> <a title="supprimer"
                                    data-toggle="modal" data-target="#supp{{ $t->idtransaction}}"
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



@foreach ($transactions as $t)

<div class="modal fade" id="supp{{ $t->idtransaction}}" tabindex="-1" role="dialog"
  aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog">

      <div class="modal-content">

          <div class="modal-body">

              <center>
                  <h5><img src="/internis.png" alt="logo" width="150"></h5>
              </center>

<center class="mt-2"><h4> Voulez-vous vraiment supprimer cette transaction de votre liste?</h4></center>

<center class="mt-5 mb-4"><a onclick="event.preventDefault; var form=document.getElementById('form2{{ $t->idtransaction}}'); form.submit();"
    class="btn bg-success-light mr-3 p-2 rounded text-white" ><i class="fas fa-check mr-1"></i> Confirmer</a> <a type="button" data-dismiss="modal" aria-label="Close" class="btn bg-danger-light p-2 rounded "><i class="fas fa-times"></i> Annuler</a></center>
    <form id="form2{{ $t->idtransaction}}" action="/transaction/{{ $t->idtransaction}}" method="post"
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

