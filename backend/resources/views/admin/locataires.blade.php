@extends('admin.index')

@section('title')

  Liste de tous les locataires

@endsection


@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
@endpush


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

                            <td style="display:flex;flex-direction: column;"> <center> <a href="profilelocataire/{{ $l->idlocataire }}" title="consulter" class="btn bg-info-light"><i class="fas fa-eye"> Consulter</i></a>
                                    
                                    <button title="inviter"
                                    onclick="event.preventDefault; var form=document.getElementById('form{{ $l->idlocataire }}'); form.submit();"
                                    class="btn bg-danger-light"><i class="fas fa-plus"> Inviter</i></button> 
                                
                                </center> </td>
                            <form id="form{{ $l->idlocataire }}" action="/locataire/{{ $l->idlocataire }}/inviter" method="post"
                                style="display: none;">
                                @csrf

                            </form>



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
