<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css">
    <title>Inventaire</title>
  </head>
  <style>
    .container {
      width: 40%;
      background-color: rgba(252, 252, 252, 0.452);
      margin: 0 auto;
      padding-top: 2px;
      font-size: 14px !important;
    }

    .top {
      text-align: center;
    }

    .bottom {
      padding: 20px;
    }

    .logo {
      margin: 2%;
    }

    .titre-infos {
      width: 100%;
      height: 30px;
      background-color: #e9ecef;
      box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.623);
      padding: auto;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 2px;
    }

    .date {
      display: flex;
      justify-content: center;
    }

    .date2 {
      display: flex;
      justify-content: flex-start;
    }

    .tiret {
      border-bottom: 1px solid black;
      width: 10px;
      margin-left: 10px;
    }

    .tiret2 {
      border-bottom: 1px solid black;
      width: 150px;
      margin-left: 10px;
    }

    table {
      border-collapse: collapse;
      box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.623);
    }

    .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 1rem;
      background-color: transparent;
    }
    .table td,
    .table th {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }
    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }
    .table tbody + tbody {
      border-top: 2px solid #dee2e6;
    }
    .table .table {
      background-color: #fff;
    }
    .table-sm td,
    .table-sm th {
      padding: 0.3rem;
    }
    .table-bordered {
      border: 1px solid #dee2e6;
    }
    .table-bordered td,
    .table-bordered th {
      border: 1px solid #dee2e6;
    }
    .table-bordered thead td,
    .table-bordered thead th {
      border-bottom-width: 2px;
    }
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }
    .table-hover tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    .table-primary,
    .table-primary > td,
    .table-primary > th {
      background-color: #b8daff;
    }
    .table-hover .table-primary:hover {
      background-color: #9fcdff;
    }
    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
      background-color: #9fcdff;
    }
    .table-secondary,
    .table-secondary > td,
    .table-secondary > th {
      background-color: #d6d8db;
    }
    .table-hover .table-secondary:hover {
      background-color: #c8cbcf;
    }
    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
      background-color: #c8cbcf;
    }
    .table-success,
    .table-success > td,
    .table-success > th {
      background-color: #c3e6cb;
    }
    .table-hover .table-success:hover {
      background-color: #b1dfbb;
    }
    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
      background-color: #b1dfbb;
    }
    .table-info,
    .table-info > td,
    .table-info > th {
      background-color: #bee5eb;
    }
    .table-hover .table-info:hover {
      background-color: #abdde5;
    }
    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
      background-color: #abdde5;
    }
    .table-warning,
    .table-warning > td,
    .table-warning > th {
      background-color: #ffeeba;
    }
    .table-hover .table-warning:hover {
      background-color: #ffe8a1;
    }
    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
      background-color: #ffe8a1;
    }
    .table-danger,
    .table-danger > td,
    .table-danger > th {
      background-color: #f5c6cb;
    }
    .table-hover .table-danger:hover {
      background-color: #f1b0b7;
    }
    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
      background-color: #f1b0b7;
    }
    .table-light,
    .table-light > td,
    .table-light > th {
      background-color: #fdfdfe;
    }
    .table-hover .table-light:hover {
      background-color: #ececf6;
    }
    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
      background-color: #ececf6;
    }
    .table-dark,
    .table-dark > td,
    .table-dark > th {
      background-color: #c6c8ca;
    }
    .table-hover .table-dark:hover {
      background-color: #b9bbbe;
    }
    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
      background-color: #b9bbbe;
    }
    .table-active,
    .table-active > td,
    .table-active > th {
      background-color: rgba(0, 0, 0, 0.075);
    }
    .table-hover .table-active:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }
    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
      background-color: rgba(0, 0, 0, 0.075);
    }
    .table .thead-dark th {
      color: #fff;
      background-color: #212529;
      border-color: #32383e;
    }
    .table .thead-light th {
      color: #495057;
      background-color: #e9ecef;
      border-color: #dee2e6;
    }
    .table-dark {
      color: #fff;
      background-color: #212529;
    }
    .table-dark td,
    .table-dark th,
    .table-dark thead th {
      border-color: #32383e;
    }
    .table-dark.table-bordered {
      border: 0;
    }
    .table-dark.table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(255, 255, 255, 0.05);
    }
    .table-dark.table-hover tbody tr:hover {
      background-color: rgba(255, 255, 255, 0.075);
    }
    @media (max-width: 575.98px) {
      .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-sm > .table-bordered {
        border: 0;
      }
    }
    @media (max-width: 767.98px) {
      .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-md > .table-bordered {
        border: 0;
      }
    }
    @media (max-width: 991.98px) {
      .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-lg > .table-bordered {
        border: 0;
      }
    }
    @media (max-width: 1199.98px) {
      .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }
      .table-responsive-xl > .table-bordered {
        border: 0;
      }
    }
  </style>
  <body>
    <div class="container">
      <div class="top">
        <h2>Inventaire du mobilier et des équipements</h2>

        <div class="logo">
          <img src="internis.png" alt="logo" width="100" />
        </div>

        <div class="date">
          Le
          <div class="tiret"></div>
          /
          <div class="tiret"></div>
          /
          <div class="tiret"></div>
        </div>
      </div>

      <div class="bottom">
        <div class="titre-infos">
          <h3>INFORMATIONS GENERALES</h3>
        </div>

        <div class="infos">
          <h4>Logement</h4>

          <div class="date2">
            Situé sis
            <div class="tiret2"></div>
          </div>

          <h4>Bailleur</h4>

          <div class="date2">
            <div class="tiret2"></div>
          </div>

          <h4>Locataire</h4>

          <div class="date2">
            <div class="tiret2"></div>
          </div>
        </div>

        <div class="titre-infos" style="margin-top: 3%; margin-bottom: 3%">
          <h3>LISTE DES MEUBLES ET EQUIPEMENTS MIS A DISPOSITION</h3>
        </div>

        <h4>Nom de la Pièce</h4>

        <table class="table" style="text-align: center">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom de l'equipement</th>
              <th scope="col">Quantité</th>
              <th scope="col">Prix unitaire</th>
              <th scope="col">Etat</th>
              <th scope="col">Commentaire</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>10</td>
              <td>3000</td>
              <td>Neuf</td>
              <td>RAS</td>
            </tr>
     
          </tbody>
        </table>
<div class="signature" style="display: flex;justify-content:space-between; margin-top:5%;">

    <div class="bailleur" style="text-align: center;">
        <h4>Le bailleur</h4>
    <img src="/internis.png" alt="" width="100">
    
    </div>
    
    <div class="locataire" style="text-align: center;">
    <h4>Le locataire</h4>
        <img src="/internis.png" alt="" width="100">
    </div>

</div>


      </div>
    </div>
  </body>
</html>
