<!DOCTYPE html>
<html lang="fr">

<head>
	<title>IMMOAIS | Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('auth.check') }}" method="post">
					<span class="login100-form-title p-b-46">
						Connexion
					</span>
					<span class="login100-form-title p-b-48">
						<i class="fa fa-sign-in" aria-hidden="true" style="color:black;"></i>
					</span>
<center class="m-t-10 m-b-30">


@if(Session::get('fail'))
<div class="audun_warn">
   <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
   {{ Session::get('fail') }}
</div>
				 @endif

             <div class="text-danger">@error('emailu'){{ $message }} @enderror</div>
             <div class="text-danger">@error('mdpu'){{ $message }} @enderror</div>
	   </center>
					
				@csrf

					<div class="wrap-input100 validate-input">
						
						<input class="input100" type="text" name="emailu" value="{{ old('emailu') }}">
						<span class="focus-input100" data-placeholder="Email"></span>
						
					</div>
               

					<div class="wrap-input100 validate-input m-t-45" style="position: relative;">
					
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="mdpu">
						<span class="focus-input100" data-placeholder="Mot de passe"></span>
						
					</div>

					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							Se connecter
						</button>
					</div>

					<div class="text-center p-t-35">
						<span class="txt1">
							Pas de compte ?
						</span>

						<a href="{{ route('auth.register') }}" class="txt2">
							S'inscrire
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/js/main.js"></script>

</body>

</html>