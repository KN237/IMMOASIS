@extends('admin.index')

@section('title')

    Informations du bien

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-home"></i>

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
                            <img class="rounded-circle" alt="User Image" src="/house.png">
                        </a>
                    </div>

                    <div class="col ml-md-n2 profile-user-info">

                        <h4 class="user-name mb-0"> {{ $bien->nom }}</h4>

                    </div>

                </div>
            </div>
            <div class="profile-menu">
                <ul class="nav nav-tabs nav-tabs-solid">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#per_details_tab">A propos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mod_tab">Modifications</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#sign_tab">Galerie</a>
                    </li>
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
                                        <p class="col-sm-10">{{ $bien->nom }}</p>
                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Numéro du titre foncier
                                        </p>
                                        <p class="col-sm-10">{{ $bien->numtitrefoncier }}</p>
                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Numéro du permis de
                                            construire</p>

                                        <p class="col-sm-10">{{ $bien->numpermisconst }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Description</p>

                                        <p class="col-sm-10">{{ $bien->description }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Ville</p>

                                        <p class="col-sm-10">{{ $bien->ville }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Quartier</p>

                                        <p class="col-sm-10">{{ $bien->quartier }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Superficie</p>

                                        <p class="col-sm-10">{{ $bien->superficie }}</p>

                                    </div>

                                </div>
                            </div>


                        </div>


                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Image</h5>

                                    <img src="/storage/biens/{{ $bien->image }}" alt="image">

                                </div>
                            </div>


                        </div>




                    </div>
                    <!-- /Personal Details -->

                </div>
                <!-- /Personal Details Tab -->


                <!-- Mod Tab -->

                <div id="mod_tab" class="tab-pane fade">

                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">Modifications</h5>
                            <div class="row">
                                <div class="col-md-10 col-lg-6">


                                    <form enctype="multipart/form-data" class="m-5"
                                        action="/bien/{{$bien->idbien}}" method="post">
                                        @csrf
                                        @method('put')

                                        <div class="position-relative form-group"><label for="examplePassword11"
                                                class="___class_+?24___">Nom</label><input name="nom" type="text"
                                                class="form-control" value="{{ $bien->nom }}"></div>



                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Numéro du permis de construire</label><input
                                                name="numpermisconst" type="text" class="form-control" value="{{ $bien->numtitrefoncier }}"></div>


                                        <div class="   position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Numéro du titre foncier</label><input
                                                name="numtitrefoncier" type="text" class="form-control" value="{{ $bien->numpermisconst }}"></div>

                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Type de bien</label>

                                            <select name="idtb" class="form-control">
                                                @foreach ($tb as $u)
                                                    <option value="{{ $u->idtb }}" >{{ $u->nom }}</option>

                                                @endforeach

                                            </select>

                                        </div>


                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Description</label><input name="description"
                                                type="text" class="form-control" value="{{ $bien->description }}"></div>


                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Superficie</label><input name="superficie"
                                                type="text" class="form-control" value="{{ $bien->superficie }}"></div>

                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Ville</label><input name="ville" type="text"
                                                class="form-control" value="{{ $bien->ville }}"></div>

                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Quartier</label><input name="quartier" type="text"
                                                class="form-control" value="{{ $bien->quartier }}"></div>


                                        <div class="position-relative form-group"><label for="exampleAddress"
                                                class="___class_+?27___">Image</label><input name="image" type="file"
                                                class="form-control"></div>


                                        <button class="mt-2 btn btn-primary">Enregistrer</button>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /Mod Tab -->


                <!-- Sign Tab -->
                <div id="sign_tab" class="tab-pane fade">

                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">Galérie du bien</h5>
                            <div class="row">
                                <div class="col-12">

                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">

                                        <div class="carousel-inner">

                                            @forelse($photos as $p)

                                                <div class="carousel-item active">
                                                    <img src="/storage/photosbiens/{{ $p->nom }}"
                                                        class="d-block w-100" alt="photo">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="/storage/photosbiens/{{ $p->nom }}"
                                                        class="d-block w-100" alt="photo">
                                                </div>

                                            @empty


                                                <div class="carousel-item active">
                                                    <img src="/noimg.png" class="d-block w-100" alt="photo">
                                                </div>


                                            @endforelse

                                        </div>

                                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Précédant</span>
                                        </a>

                                        <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Suivant</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Sign Tab -->


                </div>
            </div>
        </div>
    @endsection

    @push('page-js')

        <!-- Select2 JS -->
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="/main/assets/js/jquery-2.1.0.min.js"></script>

    @endpush
