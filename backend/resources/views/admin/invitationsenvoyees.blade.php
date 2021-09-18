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
                                    
                                    <button title="supprimer"
                                    onclick="event.preventDefault; var form=document.getElementById('form{{ $l->idinvitation }}'); form.submit();"
                                    class="btn btn-danger w-25"><i class="fas fa-trash"></i></button> 
                                
                                </center> </td>

                            <form id="form{{ $l->idinvitation }}" action="/invitation/{{ $l->idinvitation }}/supprimer" method="post"
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

