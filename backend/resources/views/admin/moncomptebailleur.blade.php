@extends('admin.index')

@section('title')

    Mon profile

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-user"></i>

@endsection


@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
        rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

    <style>
        .kbw-signature {
            width: 1904px;
            height: 200px;
        }

    </style>

@endpush


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="profile-header">
                <div class="row align-items-center">
                    <div class="col-auto profile-image">
                        <a href="#">
                            <img class="rounded-circle" alt="User Image" src="/avatar.png">
                        </a>
                    </div>
                    <div class="col ml-md-n2 profile-user-info">
                        <h4 class="user-name mb-0">{{ $data->nomcomplet }}</h4>

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
                        <a class="nav-link" data-toggle="tab" href="#mod2_tab">Modifications supplémentaires</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#sign_tab">Signature</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#fact_tab">Souscriptions</a>
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
                                        <p class="col-sm-10">{{ $data->nomcomplet }}</p>
                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
                                        <p class="col-sm-10">{{ $data->email }}</p>
                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-mdatated text-sm-right mv-0 mb-sm-3">Téléphone</p>

                                        <p class="col-sm-10">{{ $data->telephone }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Ville</p>

                                        <p class="col-sm-10">{{ $l->ville }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Quartier</p>

                                        <p class="col-sm-10">{{ $l->quartier }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Date de naissance</p>

                                        <p class="col-sm-10">{{ $l->datenaiss }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Numéro CNI</p>

                                        <p class="col-sm-10">{{ $l->numcni }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Nom du représentant</p>

                                        <p class="col-sm-10">{{ $l->nomrep }}</p>

                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Téléphone du représentant
                                        </p>

                                        <p class="col-sm-10">{{ $l->telrep }}</p>

                                    </div>

                                </div>
                            </div>


                        </div>


                    </div>
                    <!-- /Personal Details -->

                </div>
                <!-- /Personal Details Tab -->


                <!-- Mod Tab -->

                <div id="fact_tab" class="tab-pane fade">

                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">Mes souscriptions</h5>
                            <div class="row">
                                <div class="col-md-10 col-lg-6">

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Plan(s) actuel(s)</p>

                                        <p class="col-sm-10 "> @foreach($package as $p) <span class="bg-primary-light p-2">{{$p->nom}}</span>  @endforeach</p>
                                        
                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Soucris le</p>
                                        <p class="col-sm-10">{{$plan->datesous}}</p>
                                    </div>

                                    <div class="row">
                                        <p class="col-sm-2 text-mdatated text-sm-right mv-0 mb-sm-3">Valide jusqu'au</p>

                                        <p class="col-sm-10">{{$plan->dateexp}}</p>

									</div>


                                </div>
                            </div>
                        </div>
                    </div>

					<div class="card ">
                        <div class="card-body">
							<h5 class="card-title">Récapitulatifs</h5>

					<table id="example" style="width:100%"
					class="table table-borderless table-hover text-center">
					<thead>
						<tr style="font-size: 14px;">

							<th>souscription</th>

							<th>Date souscription </th>

							<th>Date expiration </th>

							<th>Prix </th>

						</tr>
					</thead>
					<tbody>

                        @foreach($plans as $p)

						<tr style="font-size: 14px;">

                            @foreach($packages as $b)

                            @if($b->idpackage==$p->idpackage)


							<td class="bg-primary-light">{{$b->nom}}</td>

                            @endif

                            @endforeach

							<td>{{$p->dateexp}} </td>

							<td>{{$p->datesous}} </td>

                            @foreach($packages as $b)

                            @if($b->idpackage==$p->idpackage)

							<td>{{$b->montant}} FCFA </td>

                            @endif

                            @endforeach


						</tr>

                        @endforeach

					</tbody>
				</table>

			</div>
		</div>


                </div>

                <!-- /Mod Tab -->


                <!-- Mod Tab -->

                <div id="mod_tab" class="tab-pane fade">

                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">Modification de mon compte</h5>
                            <div class="row">
                                <div class="col-md-10 col-lg-6">

                                    <form method="POST" action="/utilisateur/{{ $data->idu }}">
                                        @csrf
                                        <div class="row form-row">

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Nom complet</label>
                                                    <input class="form-control" name="nomcomplet" type="text"
                                                        value="{{ $data->nomcomplet }}">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" name="email" type="text"
                                                        value="{{ $data->email }}">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Téléphone</label>
                                                    <input class="form-control" name="telephone" type="text"
                                                        value="{{ $data->telephone }}">
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



                <!-- Mod Tab -->

                <div id="mod2_tab" class="tab-pane fade">

                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">Modification de mes informations supplémentaires</h5>
                            <div class="row">
                                <div class="col-md-10 col-lg-6">

                                    <form method="POST" enctype="multipart/form-data"
                                        action="/locataire/{{ $l->idlocataire }}">
                                        @csrf
                                        <div class="row form-row">

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Ville</label>
                                                    <input class="form-control" name="ville " type="text"
                                                        value="{{ $l->ville }}">
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Quartier</label>
                                                    <input class="form-control" name="quartier" type="text"
                                                        value="{{ $l->quartier }}">
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Numéro CNI</label>
                                                    <input class="form-control" name="numcni" type="text"
                                                        value="{{ $l->numcni }}">
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Nom du représentant</label>
                                                    <input class="form-control" name="nomrep" type="text"
                                                        value="{{ $l->nomrep }}">
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Téléphone du représentant</label>
                                                    <input class="form-control" name="telrep" type="text"
                                                        value="{{ $l->telrep }}">
                                                </div>
                                            </div>



                                        </div>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
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
                            <h5 class="card-title">Signature</h5>
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <form method="POST" action="/bailleur/sign/{{ $l->idbailleur }}"
                                        class="d-flex" style="flex-direction: column;">
                                        @csrf

                                        <div id="sig"></div>
                                        <textarea id="signature64" name="signed" style="display: none"></textarea>

                                        <center style="transform: translateX(30%)">
                                            <div><button class="btn btn-secondary btn-lg m-5 w-25">Enregistrer</button>
                                                <button id="clear" class="btn btn-danger btn-lg m-5 w-25">Effacer</button>
                                            </div>
                                        </center>
                                    </form>


                                </div>

                                <div class="col-md-6 col-lg-6 m-5">

                                    <center style="transform: translateX(25%)">

                                        <h4 class="mb-4">Ancienne signature</h4>

                                        <img style="transform: translateX(10%)"
                                            src="/storage/signatures/{{ $l->signature }}"
                                            alt="{{ $l->signature || 'Pas encore de signature ' }}" width="800"
                                            class="ml-5">


                                    </center>

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
    <script type="text/javascript">
        var sig = $('#sig').signature({
            syncField: '#signature64',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>

@endpush
