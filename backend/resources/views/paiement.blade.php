<!doctype html>
<html lang="en">

<head>
    <title>Souscription | Immo Oasis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/auth.css">

    <link rel="stylesheet" href="/css/main.css">

    <link rel="icon" href="/favicon.ico">

	<style> #toast-container > .toast-error { background-color: #e61721; }
    
    </style>

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
            <div class="row justify-content-center" style="z-index:2;">
                <div class="col-md-7 col-lg-5">
                    
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="/"><img src="/internis.png" alt="logo" width="200"></a>
                        <a href="#"><img src="/mom.jpg" alt="logo" width="200"></a>
                    </div>

                    <div class="login-wrap p-4 p-md-5">
                       
                        <h3 class="text-center mb-4">Paiement</h3>
                        <form class="login-form" action="/payersouscription/{{$utilisateur->idu}}/package/{{$package->idpackage}}" method="post">
                            @csrf

                            <input type="hidden" name="idpackage" value="{{$package->idpackage}}">

                            <input type="hidden" name="montant" value="{{$montant}}">

                            <input type="hidden" name="motif" value="Souscription">

                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" name="num" placeholder="Numéro à débiter">
                            </div>
    
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Effectuer le paiement</button>
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
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}","Erreur");
            @endforeach
        @endif

        toastr.options = {
            "preventDuplicates": true,
        }
    </script>

</body>

</html>
