<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title')</title>
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="/css/error.css" />
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/radio.css">
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<body>



    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>@yield('un')<span>@yield('deux')</span>@yield('trois')</h1>
            </div>
            <h2>@yield('message')</h2>
            <div class="container-login100-form-btn p-t-25">
                <a href="/">
                    <button class="login100-form-btn">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </button></a>

            </div>
        </div>
    </div>


</body>

</html>
