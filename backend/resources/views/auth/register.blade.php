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
   <link rel="stylesheet" type="text/css" href="/css/radio.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('auth.save') }}" method="post">
					<span class="login100-form-title p-b-16">
						Inscription
					</span>
					<span class="login100-form-title p-b-18">
						<i class="fa fa-plus-circle" aria-hidden="true" style="color:black;"></i>
					</span>
<center class="m-t-10 m-b-30">


@if(Session::get('fail'))
<div class="audun_warn">
   <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
   {{ Session::get('fail') }}
</div>
				 @endif

                 @if(Session::get('success'))
<div class="audun_success">
   <i class="fa fa-check-circle" aria-hidden="true"></i>
   {{ Session::get('success') }}
</div>
				 @endif

             <div class="text-danger">@error('nomu'){{ $message }} @enderror</div>
             <div class="text-danger">@error('nomcompletu'){{ $message }} @enderror</div>
             <div class="text-danger">@error('telephoneu'){{ $message }} @enderror</div>
             <div class="text-danger">@error('emailu'){{ $message }} @enderror</div>
             <div class="text-danger">@error('mdpu'){{ $message }} @enderror</div>
             <div class="text-danger">@error('mdpuc'){{ $message }} @enderror</div>

	   </center>
					
				@csrf

      <label class="container">Je suis Bailleur
  <input type="radio" name="compte" value="bailleur">
  <span class="checkmark"></span>
</label>
<label class="container">Je suis Locataire
  <input type="radio" name="compte" value="locataire">
  <span class="checkmark"></span>
</label>
            <div style="display: flex; justify-content:space-between;" class="m-t-40">
               
            <div class="wrap-input100 validate-input">
						
						<input class="input100" type="text" name="nomu" value="{{ old('nomu') }}">
						<span class="focus-input100" data-placeholder="Nom d'utilisateur"></span>
						
					</div>



                    <div class="wrap-input100 validate-input">
						
						<input class="input100" type="text" name="nomcompletu" value="{{ old('nomcompletu') }}">
						<span class="focus-input100" data-placeholder="Nom complet"></span>
						
					</div>

            </div>

 
<div style="display: flex; justify-content:space-between;">

<div class="wrap-input100 validate-input">
						
						<input class="input100" type="text" name="emailu" value="{{ old('emailu') }}">
						<span class="focus-input100" data-placeholder="Email"></span>
						
					</div>

					<div class="wrap-input100 validate-input">
						
						<input class="input100" type="text" name="telephoneu" value="{{ old('telephoneu') }}">
						<span class="focus-input100" data-placeholder="Téléphone"></span>
						
					</div>

</div>

               

       <div class="wrap-input100 validate-input" style="position: relative;">
					
               <span class="btn-show-pass">
                  <i class="zmdi zmdi-eye"></i>
               </span>
               <input class="input100" type="password" name="mdpu">
               <span class="focus-input100" data-placeholder="Mot de passe"></span>
               
            </div>

                 <div class="wrap-input100 validate-input" style="position: relative;">
            
               <span class="btn-show-pass">
                  <i class="zmdi zmdi-eye"></i>
               </span>
               <input class="input100" type="password" name="mdpuc">
               <span class="focus-input100" data-placeholder="Confirmez votre mot de passe"></span>
               
            </div>
 

					

					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							S'inscrire
						</button>
					</div>

					<div class="text-center p-t-35">
						<span class="txt1">
							Déja inscrit ?
						</span>

						<a href="{{ route('auth.login') }}" class="txt2">
							Se connecter
						</a>
					</div>

					<div class="text-center p-t-15">En vous inscrivant, vous reconnaissez avoir lu et accepté <br> <a href="" class="txt2">les Conditions d'utilisation </a> et <a href="" class="txt2">la Politique de confidentialité</a> .</div>

				</form>
			</div>
			
		</div>

	
	</div>


	
	<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/js/main.js"></script>

</body>

</html>