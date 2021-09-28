<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="/favicon.ico" >

    <title>Quittance</title>

    <!-- Favicon -->
    <link rel="icon" href="./images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <!-- Invoice styling -->
    <style>
        @page {
            size: 650pt 650pt;
        }

        body {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;

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
            background-color: #e9ecef;
          
            font-weight: bold;
           
        }

        .invoice-box table tr.heading  {
            
      box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.623);
    
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
            margin: 20%;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
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
        <table>
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="internis.png" alt="Company logo" style="width: 100px;" />
                            </td>

                            <td>
                                Quittance Num: 00{{$quittance->idquittance}} <br />
                               Relative à la facture Num : 00{{$facture->idfacture}} <br />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                        <td>
                                A<br/>
                                {{$loc->nomcomplet}}<br />
                                {{$locataire->quartier}},{{$locataire->ville}}<br />
                                +237 {{$loc->telephone}}
                            </td>

                            <td>
                            De<br/>
                            {{$ba->nomcomplet}}<br />
                            +237 {{$ba->telephone}}
                            </td>
                        </tr>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Libelle</td>

                <td>Prix</td>
            </tr>

            <tr class="item">
            <td>Paiement de loyer pour la période du {{$facture->datedebut}} au {{$facture->datefin}} </td>

            <td>{{$location->montant}} FCFA</td>

            </tr>

            <tr class="total">
                <td></td>

                <td>Total: {{$location->montant}} FCFA </td>

            </tr>
        </table>
<div class="note" style="text-align:center;">
    <p> Cette quittance annule toutes les factures qui auraient pu etre transmise en cas de paiement de le présente échéance</p>
</div>
        <div class="bailleur" style="text-align:center;">

            <h3 style="z-index: 2;"> Le bailleur </h3>

            <img src="storage/signatures/{{$bailleur->signature}}" style="transform: translateX(10%);" alt="image" width="450">


        </div>
    </div>
</body>

</html>
