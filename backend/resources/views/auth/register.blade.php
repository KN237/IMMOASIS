<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Inscription | Immo Oasis</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="/css/main.css">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="css/auth.css" />

	<link rel="stylesheet" href="css/radio.css" />

	<style> #toast-container > .toast-error { background-color: #e61721; } 
	
	#toast-container > .toast-success { background-color: #1fbb46; } </style>

    <link rel="icon" href="/favicon.ico" />
  </head>
  <body>
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

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center"></div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            
            <div class="d-flex align-items-center justify-content-center">
              <a href="/"
                ><img src="internis.png" alt="logo" width="200"
              /></a>
            </div>

            <div class="login-wrap p-4 p-md-5">
              <h3 class="text-center mb-4">Inscription</h3>
              <form
                class="login-form"
                action="{{ route('auth.save') }}"
                method="post"
              >
                @csrf

                <label class="container2"
                  >Je suis Bailleur
                  <input type="radio" name="compte" value="bailleur" />
                  <span class="checkmark2"></span>
                </label>
                <label class="container2"
                  >Je suis Locataire
                  <input type="radio" name="compte" value="locataire" />
                  <span class="checkmark2"></span>
                </label>
                <div class="row mt-4">
                  <div class="col-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control rounded-left"
                        name="nomcomplet"
                        placeholder="Nom complet"
                        value="{{ old('nomcompletu') }}"
                      />
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control rounded-left"
                        name="telephone"
                        placeholder="Téléphone"
                        value="{{ old('telephoneu') }}"
                      />
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input
                    type="text"
                    class="form-control rounded-left"
                    name="email"
                    placeholder="Email"
                    value="{{ old('emailu') }}"
                  />
                </div>

                <div class="form-group d-flex">
                  <span class="btn-show-pass">
                    <i class="zmdi zmdi-eye"></i>
                  </span>
                  <input
                    type="password"
                    class="form-control rounded-left"
                    name="mdp"
                    placeholder="Mot de passe"
                  />
                </div>

                <div class="form-group d-flex">
                  <span class="btn-show-pass">
                    <i class="zmdi zmdi-eye"></i>
                  </span>
                  <input
                    type="password"
                    class="form-control rounded-left"
                    name="mdpc"
                    placeholder="Confirmez votre mot de passe"
                  />
                </div>

                <div class="form-group">
                  <button
                    type="submit"
                    class="form-control btn btn-primary rounded submit px-3"
                  >
                    Se connecter
                  </button>
                </div>
                <div class="form-group d-flex" style="justify-content: center">
                  <div
                    class="text-md-right d-flex mt-3"
                    style="justify-content: space-between"
                  >
                    <p>Déja inscrit ?</p>
                    <a href="{{ route('auth.login') }}" class="ml-2">
                      Connectez-vous
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="/js/main.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
