<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="/favicon.ico" >

    <title>Facture</title>

    <!-- Favicon -->
    <link rel="icon" href="./images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <!-- Invoice styling -->
    <style>
        @page { size: 530pt 530pt; }

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
                                Facture Num: 00{{$facture->idfacture}}<br />
                                D??livr?? le: {{$facture->date}} <br />
                               <span style="color:red;"> A payer avant le: {{$facture->datelimite}} </span> 
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
                            <br />
                            {{$ba->nomcomplet}}<br />
                               +237 {{$ba->telephone}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        

            <tr class="heading">
                <td>Libelle</td>

                <td>Prix</td>
            </tr>

            <tr class="item">
                <td>Paiement de loyer pour la p??riode du {{$facture->datedebut}} au {{$facture->datefin}} </td>

                <td>{{$location->montant}} FCFA</td>
            </tr>

            <tr class="total">
                <td></td>

                <td>Total: {{$location->montant}} FCFA </td>
                
            </tr>
        </table>
    </div>
</body>

</html>
