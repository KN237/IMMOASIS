@extends('admin.index')

@section('title')

    Artisans

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-hard-hat"></i>

@endsection


@section('bouton')

@if($data->role=="Administrateur")

    <div class="page-title-actions">

        <div class="d-inline-block dropdown">

            <button type="button" class="btn-shadow btn btn-dark" data-toggle="modal" data-target="#form">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="metismenu-icon fas fa-plus"></i>
                </span>
                Ajouter un artisan
            </button>


        </div>
    </div>
@endif

@endsection





@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
 
        .card:hover {
            transform: scale(1.06);

        }

    </style>

@endpush



@section('content')


    <!-- First Row [Prosucts]-->

    <!-- Default dropup button -->
    <div class="dropdown m-4">
        <button class="btn bg-primary-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-filter"> Filtrer par profession </i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

            @foreach ($domaines as $d)

                <a class="dropdown-item" href="/dashboard/artisans/{{ $d }}">{{ $d }}</a>

            @endforeach

        </div>
    </div>

    <div class="row pb-5 mb-4">

        @foreach ($artisans as $a)

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">

                <!-- Card-->
                <div class="card rounded shadow-sm border-0 ">
                    <div class="card-body p-4"><img src="/worker.jpg" alt="" class="img-fluid d-block">
                        <center>
                            <p class="h4 bold text-center">{{ $a->nomcomplet }} <br>
                                
                                <a
                                    href="/dashboard/artisan/{{ $a->idartisan }} " class="btn bg-primary-light btn-lg mt-3"> <i
                                        class="far fa-edit"></i> @if ($data->role == 'Administrateur') Modifier @else Consulter le profile @endif </a>
                                        @if ($data->role == 'Administrateur')
                                        <button onclick="event.preventDefault; var form=document.getElementById('form2{{ $a->idartisan }} '); form.submit();"
                                            class="btn bg-danger-light mr-3 p-2 rounded text-white mt-3" ><i class="fas fa-trash mr-1"></i> Supprimer</button> 
                                            <form id="form2{{ $a->idartisan }} " action="/artisan/{{ $a->idartisan }} " method="post"
                                                style="display: none;">
                                                @csrf
                                                @method('delete')
                                        
                                            </form> 
                                            @endif
                                    </p>

                            <p class="h5 text-muted  mt-2"> {{ $a->profession }}</p>

                        </center>

                        <h4 class="text-center mt-2 mt-4">

                            @for ($i = 0; $i < 5; $i++)

                                @php
                                    
                                    $totalnotes = 0;
                                    
                                    $count = 0;
                                    
                                    $moyenne = 0;
                                    
                                    foreach ($notes as $b) {
                                        if ($b->idartisan == $a->idartisan) {
                                            $count += 1;
                                    
                                            $totalnotes += $b->valeur;
                                        }
                                    }
                                    
                                    if ($count != 0) {
                                        $moyenne = $totalnotes / $count;
                                    }
                                    
                                @endphp

                                @if ($moyenne > $i)
                                    <i class="fas fa-star text-warning star-light mr-1 main_star"></i>
                                @else
                                    <i class="fas fa-star  star-light mr-1 main_star"></i>
                                @endif

                            @endfor
                        </h4>
                    </div>
                </div>



            </div>

        @endforeach

    </div>

    <center>{{ $artisans->links('pagination::bootstrap-4') }}</center>

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

                <form class="m-5" action="/artisan" method="post">
                    @csrf

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Nom </label><input name="nomcomplet" type="text" class="form-control">
                    </div>

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Téléphone </label><input name="telephone" type="text"
                            class="form-control"></div>

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Profession </label><input name="profession" type="text"
                            class="form-control"></div>


                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Ville </label><input name="ville" type="text"
                            class="form-control"></div>


                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Quartier</label><input name="quartier" type="text"
                            class="form-control"></div>

                    <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                </form>

            </div>

        </div>
    </div>
</div>

@push('page-js')

    <script src="/main/assets/js/jquery-2.1.0.min.js"></script>


@endpush
