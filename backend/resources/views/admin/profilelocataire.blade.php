@extends('admin.index')

@section('title')

  Profile Locataire

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-user"></i>

@endsection


@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endpush


@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="profile-header">
			<div class="row align-items-center">
				<div class="col-auto profile-image">
					<a href="#">
						<img class="rounded-circle" alt="User Image" src="/locataire.jpg">
					</a>
				</div>
				<div class="col ml-md-n2 profile-user-info">
					<h4 class="user-name mb-0">{{ $u->nomcomplet }}</h4>
					
				</div>

			</div>
		</div>
		<div class="profile-menu">
			<ul class="nav nav-tabs nav-tabs-solid">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#per_details_tab">A propos</a>
				</li>

                <li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#sign_tab">Signature</a>
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
									<p class="col-sm-10">{{ $u->nomcomplet }}</p>
								</div>

								<div class="row">
									<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
									<p class="col-sm-10">{{ $u->email }}</p>
								</div>

								<div class="row">
									<p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Téléphone</p>

									<p class="col-sm-10">{{ $u->telephone }}</p>

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
									<p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Sexe</p>

									<p class="col-sm-10">{{ $l->sexe }}</p>

								</div>

                                <div class="row">
									<p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Profession</p>

									<p class="col-sm-10">{{ $l->profession }}</p>

								</div>

                                <div class="row">
									<p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Nom employeur</p>

									<p class="col-sm-10">{{ $l->nomemployeur }}</p>

								</div>


                                <div class="row">
									<p class="col-sm-2 text-muted text-sm-right mv-0 mb-sm-3">Telephone employeur</p>

									<p class="col-sm-10">{{ $l->telemployeur }}</p>

								</div>

							</div>
						</div>
	

					</div>


				</div>
				<!-- /Personal Details -->

			</div>
			<!-- /Personal Details Tab -->


            	<!-- Sign Tab -->
			<div id="sign_tab" class="tab-pane fade">

				<div class="card ">
					<div class="card-body">
						<h5 class="card-title">Exemplaire de la signature de {{ $u->nomcomplet }}</h5>
						<div class="row">
							<div class="col-md-10 col-lg-6">

								<img src="/storage/signatures/{{$l->signature}}" alt="{{ $l->signature ?? 'Pas encore de signature'}}" width="400">
						
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
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
	<script src="{{asset('js/app.js')}}"></script>
	<script src="/main/assets/js/jquery-2.1.0.min.js"></script>

@endpush

