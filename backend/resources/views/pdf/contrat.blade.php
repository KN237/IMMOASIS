<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="/favicon.ico">

    <title>Contrat de bail</title>

    <!-- Favicon -->
    <link rel="icon" href="./images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <!-- Invoice styling -->
    <style>
        @page {
            size: 700pt 700pt;
        }

        body {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            text-align: center;
            color: #777;
        }

        body h1 {
            font-weight: 300;
            margin-bottom: 0px;
            padding-bottom: 0px;
            color: #000;
        }

        body h3 {
            font-weight: 300;
            margin-top: 10px;
            margin-bottom: 20px;
            font-style: italic;
            color: #555;
        }

        body a {
            color: #06f;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        .heading {
            margin: 1000px;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

    </style>
</head>

<body>



    <div class="invoice-box">

        <img src="internis.png" alt="Company logo" style="width: 100px;" />

        <h4 class="mb-2">CONTRAT DE BAIL</h4>

        <h6 class="mb-4">Le </h6>

        <table>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Entre
                                M./Mme @foreach ($users as $u) @if ($u->idu == $locataire->idu) {{ $u->nomcomplet }} @endif @endforeach n??(e) le {{ $locataire->datenaiss }} <br />
                                Titulaire de la CNI N# {{ $locataire->numcni }} <br />
                                T??l??phone @foreach ($users as $u) @if ($u->idu == $locataire->idu) {{ $u->telephone }} @endif @endforeach<br />
                            </td>

                            <td>
                                Et<br />
                                M./Mme @foreach ($users as $u) @if ($u->idu == $bailleur->idu) {{ $u->nomcomplet }} @endif @endforeach n??(e) le {{ $bailleur->datenaiss }} <br />
                                Titulaire de la CNI N# {{ $bailleur->numcni }}<br />
                                T??l??phone @foreach ($users as $u) @if ($u->idu == $bailleur->idu) {{ $u->telephone }} @endif @endforeach <br />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            <tr>
                <td>Il a ??t?? convenu le pr??sent contrat de bail stipulant :</td>
            </tr>



            <tr class="heading">
                <td>Article 1</td>

                <td>OBJET DU CONTRAT</td>
            </tr>

            <tr class="item">
                <td>Le propri??taire du logement M./Mme @foreach ($users as $u) @if ($u->idu == $bailleur->idu) {{ $u->nomcomplet }} @endif @endforeach, met ?? titre de location, ?? la disposition de M./Mme @foreach ($users as $u) @if ($u->idu == $locataire->idu) {{ $u->nomcomplet }} @endif @endforeach un local au quartier
                    {{ $bien->quartier }} ?? {{ $bien->ville }}, d???une superficie de {{ $bien->superficie }}
                    afin que
                    ce dernier y effectue ses activit??s. </td>
            </tr>


            <tr class="heading">
                <td>Article 2</td>

                <td>MONTANT DU LOYER</td>
            </tr>

            <tr class="item">
                <td> Le montant du loyer mensuel convenu est fix?? ?? {{ $location->montant }} FCFA </td>
            </tr>


            <tr class="heading">
                <td>Article 3</td>

                <td>MODALITE DE PAIEMENTS</td>
            </tr>

            <tr class="item">
                <td> Chaque loyer est payable la fin du mois. </td>
            </tr>


            <tr class="heading">
                <td>Article 4</td>

                <td>DROIT DU PROPRIETAIRE</td>
            </tr>

            <tr class="item">
                <td>Le propri??taire a le droit de reprendre le logement pour sa convenance et pour quelque raison que ce
                    soit avec un pr??avis de trois mois. </td>
            </tr>

            <tr class="heading">
                <td>Article 5</td>

                <td>ENTRETIEN ET REPARATION</td>
            </tr>

            <tr class="item">
                <td>Les entretiens et r??parations sont ?? la charge du locataire

                </td>
            </tr>


            @for($i=0;$i<count($articles);$i++)

                <tr class="heading">
                    <td>Article {{$i+6}}</td>

                    <td>{{ $articles[$i]->titre }}</td>
                </tr>

                <tr class="item">
                    <td>{{ $articles[$i]->description }}

                    </td>
                </tr>

            @endfor

        </table>

        <h5>Le pr??sent contrat de bail est ??tabli pour servir et valoir ce que de droit.</h5>



        <div class="signature">

            <div class="bailleur">

                <h4>Le bailleur</h4>
                @if ($location->signbailleur == 1)

                    <center><img src="storage/signatures/{{ $bailleur->signature }}" alt="signature" width="500"
                            style="transform: translateX(20%);"></center>

                @else

                    <p>Pas encore sign??</p>

                @endif

            </div>

            <div class="locataire">

                <h4>Le locataire</h4>

                @if ($location->signlocataire == 1)

                    <center><img src="storage/signatures/{{ $locataire->signature }}" alt="signature" width="500"
                            style="transform: translateX(20%);"></center>

                @else

                    <p>Pas encore sign??</p>

                @endif

            </div>
        </div>

    </div>
</body>

</html>
