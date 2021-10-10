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

    <style>
 
        .card:hover {
            transform: scale(1.06);

        }

    </style>
	
@endpush


@section('content')


<!-- First Row [Prosucts]-->

<!-- Default dropup button -->

<div class="border p-3 m-4" style="width: 20%;">

    <form id="2" action="/biens/rechercher" method="post">
        @csrf
        <input type="text" name="nom" /> <button class="btn bg-primary-light" type="submit">
            <i class="fas fa-search"> Rechercher</i>
        </button>


    </form>


</div>

<div class="row pb-5 mb-4">

    @foreach ($biens as $b)

        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">

            <!-- Card-->
            <div class="card rounded shadow-sm border-0 " style="height: 390px;">

                <img src="/storage/biens/{{ $b->image }}" alt="Image"
                        class="card-img-top" style="height: 240px;">

                <div class="card-body p-4"><center>
                    

                        <p>{{ $b->nom }}</p>


                        @foreach ($tb as $u)

                            @if ($b->idtb == $u->idtb)

                                <p> {{ $u->nom }}</p>

                            @endif

                        @endforeach

                        <p>{{ $b->ville }}</p>

                        <p>{{ $b->quartier }}</p>

                        <a href="infosbien/{{ $b->idbien }}" title="consulter le profile"
                            class="btn bg-primary-light mb-3"><i class="far fa-eye"></i> Consulter</a>
                        <button title="supprimer" data-toggle="modal" data-target="#supp{{ $b->idbien }}"
                            class="btn bg-danger-light deletebtn mb-3"><i class="fas fa-trash"> Supprimer</i></button>


                    </center>
                </div>
            </div>



        </div>

    @endforeach

</div>



<center>{{ $biens->links('pagination::bootstrap-4') }}</center>

@endsection



@foreach ($biens as $l)

<div class="modal fade" id="supp{{ $l->idbien }}" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-body">

                <center>
                    <h5><img src="/internis.png" alt="logo" width="150"></h5>
                </center>

                <center class="mt-2">
                    <h4> Voulez-vous vraiment supprimer ce bien de votre liste?</h4>
                </center>

                <center class="mt-5 mb-4"><a
                        onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idbien }}'); form.submit();"
                        class="btn bg-success-light mr-3 p-2 rounded text-white"><i class="fas fa-check mr-1"></i>
                        Confirmer</a> <a type="button" data-dismiss="modal" aria-label="Close"
                        class="btn bg-danger-light p-2 rounded "><i class="fas fa-times"></i>Annuler</a>
                </center>
                <form id="form2{{ $l->idbien }}" action="/bien/{{ $l->idbien }}" method="post"
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
