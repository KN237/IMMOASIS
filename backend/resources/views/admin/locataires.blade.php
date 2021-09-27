@extends('admin.index')

@section('title')

  Liste de tous les locataires

@endsection


@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <style>
 
        .card:hover {
            transform: scale(1.06);

        }

    </style>
	
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


    <!-- First Row [Prosucts]-->

    <!-- Default dropup button -->

    <div class="border p-3 m-4" style="width: 20%;">

        <form action="/locataires/rechercher" method="post">
            @csrf
            <input type="text" name="nom" /> <button class="btn bg-primary-light" type="submit">
                <i class="fas fa-search"> Rechercher</i>
            </button>


        </form>


    </div>

    <div class="row pb-5 mb-4">

        @foreach ($locataires as $l)

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">

                <!-- Card-->
                <div class="card rounded shadow-sm border-0 ">
                    <div class="card-body p-4"><img src="/locataire.jpg" alt="" class="img-fluid d-block">
                        <center>

                        @foreach ($users as $u)
                                @if ($l->idu == $u->idu)
                                    <p class="h4 bold text-center">{{ $u->nomcomplet }}</p>
                                    <p class="h5 bold text-center">{{ $u->telephone }}</p>
                                @endif
                            @endforeach

                            <p>{{ $l->ville }}</p>

                            <p>{{ $l->profession }}</p>

                            <a href="profilelocataire/{{ $l->idlocataire }}" title="consulter" class="btn bg-primary-light mt-3"><i class="fas fa-eye"> Consulter</i></a>

                            <a title="inviter"
                                    onclick="event.preventDefault; var form=document.getElementById('form{{ $l->idlocataire }}'); form.submit();"
                                    class="btn bg-info-light mt-3"><i class="fas fa-plus"> Inviter</i></a> 
                                
                            <form id="form{{ $l->idlocataire }}" action="/locataire/{{ $l->idlocataire }}/inviter" method="post"
                                style="display: none;">
                                @csrf

                            </form>
                                            
                                    </p>


                        </center>

                    </div>
                </div>



            </div>

        @endforeach

    </div>
    <center>{{ $locataires->links('pagination::bootstrap-4') }}</center>

@endsection

@push('page-js')
<script src="/main/assets/js/jquery-2.1.0.min.js"></script>
@endpush
