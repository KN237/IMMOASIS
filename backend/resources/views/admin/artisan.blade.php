@extends('admin.index')

@section('title')

    Artisan {{ $artisan->nomcomplet }}

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-hard-hat"></i>

@endsection


@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="profile-header">
                <div class="row align-items-center">
                    <div class="col-auto profile-image">
                        <a href="#">
                            <img class="rounded-circle" alt="User Image" src="/worker.jpg">
                        </a>
                    </div>
                    <div class="col ml-md-n2 profile-user-info">

                        <h4 class="user-name mb-0">{{ $artisan->nomcomplet }}</h4>

                        @if ($notes->count() == 0)

                            <h1 class="text-warning mt-4 mb-4" style="color: rgb(247, 75, 75) !important;">
                                <b><span id="average_rating">0.0</span> / 5</b>
                            </h1>
                            <div class="mb-3">
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                            </div>

                            <h3><span id="total_review">0</span> Avis</h3>

                        @else

                            @php
                                
                                $totalnotes = 0;
                                
                                $moyenne = 0;
                                
                                foreach ($notes as $b) {
                                    $totalnotes += $b->valeur;
                                }
                                
                                $moyenne = $totalnotes / $notes->count();
                                
                            @endphp

                            <h1 class="text-warning mt-4 mb-4" style="color: rgb(247, 75, 75) !important;">
                                <b><span id="average_rating">{{ $moyenne }}</span> / 5</b>
                            </h1>
                            <div class="mb-3">

                                @for ($i = 0; $i < 5; $i++)



                                    @if ($moyenne > $i)
                                        <i class="fas fa-star text-warning star-light mr-1 main_star"></i>
                                    @else
                                        <i class="fas fa-star  star-light mr-1 main_star"></i>
                                    @endif

                                @endfor

                            </div>
                            <h3><span id="total_review">{{ $notes->count() }}</span> Avis</h3>



                        @endif

                        @if($data->role!="Administrateur")

                        <button class="btn bg-primary-light mt-3" data-toggle="modal" data-target="#note">Attribuer une
                            note</button>
                       @endif
                    </div>

                </div>
            </div>
            <div class="profile-menu">
                <ul class="nav nav-tabs nav-tabs-solid">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#per_details_tab">A propos</a>
                    </li>

                    @if($data->role=="Administrateur") <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mod_tab">Modifications</a>
                    </li>
                    @endif

                </ul>
            </div>
            <div class="tab-content profile-tab-cont">

                <!-- Personal Details Tab -->
                <div class="tab-pane fade show active" id="per_details_tab">

                    <!-- Personal Details -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Nom</p>
                                        <p class="col-sm-10">{{ $artisan->nomcomplet }}</p>
                                    </div>



                                    <div class="row">
                                        <p class="col-sm-2 text-martisanted text-sm-right mv-0 mb-sm-3">Téléphone</p>

                                        <p class="col-sm-10">{{ $artisan->telephone }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Ville</p>

                                        <p class="col-sm-10">{{ $artisan->ville }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Quartier</p>

                                        <p class="col-sm-10">{{ $artisan->quartier }}</p>

                                    </div>


                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Profession</p>

                                        <p class="col-sm-10">{{ $artisan->profession }}</p>

                                    </div>


                                </div>
                            </div>


                        </div>


                    </div>
                    <!-- /Personal Details -->

                </div>
                <!-- /Personal Details Tab -->

                @if($data->role=="Administrateur")
                <!-- Mod Tab -->

                <div id="mod_tab" class="tab-pane fade">

                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">Modification</h5>
                            <div class="row">
                                <div class="col-md-10 col-lg-6">

                                    <form method="POST" action="/artisan/{{ $artisan->idartisan }}">
                                        @csrf
                                        @method('put')
                                        <div class="row form-row">

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input class="form-control" name="nomcomplet" type="text"
                                                        value="{{ $artisan->nomcomplet }}">
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Téléphone</label>
                                                    <input class="form-control" name="telephone" type="text"
                                                        value="{{ $artisan->telephone }}">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Ville</label>
                                                    <input class="form-control" name="ville" type="text"
                                                        value="{{ $artisan->ville }}">
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Quartier</label>
                                                    <input class="form-control" name="quartier" type="text"
                                                        value="{{ $artisan->quartier }}">
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Profession</label>
                                                    <input class="form-control" name="profession" type="text"
                                                        value="{{ $artisan->profession }}">
                                                </div>
                                            </div>


                                        </div>
                                        <button type="submit" class="btn btn-primary ">Enregistrer</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /Mod Tab -->
@endif

            </div>
        </div>
    </div>
@endsection

<div id="note" class="modal m-5" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <center> <img class="rounded-circle" alt="User Image" src="/worker.jpg" width="200"></center>


                <h4 class="text-center mt-2 mb-4">

                    <p class="mb-3 h4 bold text-center"> {{ $artisan->nomcomplet }}</p>

                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"
                        onclick="document.getElementById('form1').submit();">

                        <form action="/artisan/{{ $artisan->idartisan }}/note" method="post" id="form1">

                            @csrf


                            <input type="hidden" name="valeur" value="1">

                        </form>

                    </i>


                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"
                        onclick="document.getElementById('form2').submit();">

                        <form action="/artisan/{{ $artisan->idartisan }}/note" method="post" id="form2">

                            @csrf


                            <input type="hidden" name="valeur" value="2">

                        </form>

                    </i>


                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"
                        onclick="document.getElementById('form3').submit();">

                        <form action="/artisan/{{ $artisan->idartisan }}/note" method="post" id="form3">

                            @csrf


                            <input type="hidden" name="valeur" value="3">

                        </form>

                    </i>



                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"
                        onclick="document.getElementById('form4').submit();">

                        <form action="/artisan/{{ $artisan->idartisan }}/note" method="post" id="form4">

                            @csrf


                            <input type="hidden" name="valeur" value="4">

                        </form>

                    </i>


                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"
                        onclick="document.getElementById('form5').submit();">

                        <form action="/artisan/{{ $artisan->idartisan }}/note" method="post" id="form5">

                            @csrf


                            <input type="hidden" name="valeur" value="5">

                        </form>

                    </i>


                </h4>

            </div>
        </div>
    </div>
</div>




@push('page-js')

    <script src="/main/assets/js/jquery-2.1.0.min.js"></script>

    <script>
        var rating_data = 0;

        $(document).on('mouseenter', '.submit_star', function() {

            var rating = $(this).data('rating');

            reset_background();

            for (var count = 1; count <= rating; count++) {

                $('#submit_star_' + count).addClass('text-warning');

            }

        });

        function reset_background() {
            for (var count = 1; count <= 5; count++) {

                $('#submit_star_' + count).addClass('star-light');

                $('#submit_star_' + count).removeClass('text-warning');

            }
        }

        $(document).on('mouseleave', '.submit_star', function() {

            reset_background();

            for (var count = 1; count <= rating_data; count++) {

                $('#submit_star_' + count).removeClass('star-light');

                $('#submit_star_' + count).addClass('text-warning');
            }

        });
    </script>
@endpush
