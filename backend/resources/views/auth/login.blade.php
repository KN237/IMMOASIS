<!DOCTYPE html>
<html lang="fr">

<head>
	<title> Connexion | Immo Oasis</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/main/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <link rel="stylesheet" href="/main/assets/css/style.css">
	<link rel="icon" href="/favicon.ico" >
	<!--===============================================================================================-->
</head>

<body >

	    <!-- ***** Preloader Start ***** -->
		<div id="js-preloader" class="js-preloader">
			<div class="preloader-inner">
			  <span class="dot"></span>
			  <div class="dots">
				<span></span>
				<span></span>
				<span></span>
			  </div>
			</div>
		  </div>
		  <!-- ***** Preloader End ***** -->

	<div class="limiter ">
		<div class="container-login100" >

			<a href="/" style="margin:2%;"><img src="/internis.png" alt="logo" width="150" ></a>

			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('auth.check') }}" method="post">
					<span class="login100-form-title p-b-46">
						Connexion
					</span>
					<span class="login100-form-title p-b-48">
						<i class="fa fa-sign-in" aria-hidden="true" style="color:black;"></i>
					</span>
	@csrf

					<div class="wrap-input100 validate-input">
						
						<input class="input100" type="text" name="emailu">
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
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}","Erreur"); 
        @endforeach
    @endif

	toastr.options = {
    "preventDuplicates": true
}
</script>
</body>

</html>