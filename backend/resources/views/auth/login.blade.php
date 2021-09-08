<!doctype html>
<html lang="en">

<head>
    <title>Connexion | Immo Oasis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/auth.css">

    <link rel="stylesheet" href="/css/main.css">

    <link rel="icon" href="/favicon.ico">

	<style> #toast-container > .toast-error { background-color: #e61721; } </style>

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
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="/"><img src="internis.png" alt="logo" width="200"></a>
                        </div>
                        <h3 class="text-center mb-4">Connexion</h3>
                        <form class="login-form" action="{{ route('auth.check') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" name="emailu" placeholder="Email">
                            </div>
                            <div class="form-group d-flex">
                                <span class="btn-show-pass">
                                    <i class="zmdi zmdi-eye"></i>
                                </span>
                                <input type="password" class="form-control rounded-left" name="mdpu"
                                    placeholder="Mot de passe">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Se
                                    connecter</button>
                            </div>
                            <div class="form-group d-flex" style="justify-content: space-between;">
                                <div class="">
	            		<label class="checkbox-wrap checkbox-primary">Se souvenir
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div>

                                    <div class="text-md-right">
                                        <a href="#">Mot de passe oublié ?</a>
                                    </div>

                                    <div class="text-md-right d-flex" style="justify-content: space-between;">
                                        <p>Pas de compte ?</p> <a href="{{ route('auth.register') }}"
                                            class="ml-2"> S'inscrire </a>
                                    </div>

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

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>


    {!! Toastr::message() !!}
	
    <script>
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}","Erreur");
            @endforeach
        @endif

        toastr.options = {
            "preventDuplicates": true
        }
    </script>

</body>

</html>
