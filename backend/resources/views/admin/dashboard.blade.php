@extends('admin.index')

@section('title')

    Tableau de bord - {{$data->role}}

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-chart-line"></i>

@endsection

@if($data->role=="Bailleur" and $biens!=null )

@section('content')

    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading"><i class="metismenu-icon fas fa-home" style="font-size: 2rem"></i></div>
                        <div class="widget-subheading"><a href="/dashboard/biens">Nombre de biens</a></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{ $biens->count() }}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading"><i class="metismenu-icon fas fa-users" style="font-size: 2rem"></i>
                        </div>
                        <div class="widget-subheading"> <a href="/dashboard/meslocataires">Nombre de locataires</a> </div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{ $locataires->count() }}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading"><i class="metismenu-icon fas fa-wallet" style="font-size: 2rem"></i>
                        </div>
                        <div class="widget-subheading"><a href="" data-toggle="modal" data-target="#pay">Effectuer un
                                retrait</a></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>FCFA {{ $solde ?? 0 }}</span></div>
                    </div>
                </div>
            </div>
        </div>


<div class="row">


    <div class="col-12">

        <div class="card">

            <div class="card-body">

                <h1>Entrées</h1>

                <div style="width: 100%; height:600px;">
                    {!! $usersChart->container() !!}
                </div>
            </div>

        </div>

    </div>


    <div class="col-12">

        <div class="card">

            <div class="card-body">

                <h1>Retraits </h1>

                <div style="width: 100%; height:600px;">
                    {!! $usersChart2->container() !!}
                </div>
            </div>

        </div>

    </div>


</div>
       

    </div>

@endsection

@endif

@if($data->role=="Bailleur" and $biens==null)

@section('content')

<div class="card">
    <div class="card-body">

        Pour démarrer, c'est simple comme 1, 2, 3.

        <div class="row">

            <div class="col-6">

                <div class="card" style=" box-shadow:none; border:none;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item mt-3"> <div class="badge badge-danger rounded">1</div> Creer un bien</li>
                      <li class="list-group-item mt-3"><div class="badge badge-danger rounded">2</div> Ajouter un locataire</li>
                      <li class="list-group-item mt-3"><div class="badge badge-danger rounded">3</div> Creer une location </li>
                    </ul>
                  </div>
            </div>
    
    
            <div class="col-6">
    
                <img src="/ordi.png" alt="img" width="400">
    
            </div>
        </div>

        
        <center class="mt-3">

          Besoin d'aide? contactez nous.  

        </center>
        

    </div>
  </div>

  @endsection

@endif

@if($data->role=="Locataire")

@section('content')

<div class="row">

<div class="col-4">

    <div class="card">
        <div class="card-header">Locations</div>
        <div class="card-body">
    
    <div class="d-flex m-5"><i class="bg-light p-3 rounded-circle metismenu-icon fas fa-key mr-3" style="font-size: 3rem;"></i> <div style="height: 50px; width:1px;background:black;"></div> <p style="font-size:1.6rem; font-weight:bold;" class="ml-5">
        
        Locations {{ $locations->count() ?? '0' }}
    
    </p></div>
            
          <a href="/dashboard/locations" class="btn btn-secondary btn-block">Voir plus</a>
    
        </div>
      </div>
    

</div>

<div class="col-4">

    <div class="card">
        <div class="card-header">Invitations</div>
        <div class="card-body">
    
    <div class="d-flex m-5"><i class="bg-light p-3 rounded-circle metismenu-icon fas fa-location-arrow mr-3" style="font-size: 3rem;"></i> <div style="height: 50px; width:1px;background:black;"></div> <p style="font-size:1.6rem; font-weight:bold;" class="ml-5">
        
        Invitations  {{ $factures->count() ?? '0' }}
    
    </p></div>
            
          <a href="/dashboard/factures" class="btn btn-secondary btn-block">Voir plus</a>
    
        </div>
      </div>
    

</div>


<div class="col-4">

    <div class="card">
        <div class="card-header">Loyers impayés</div>
        <div class="card-body">
    
    <div class="d-flex m-5"><i class="bg-light p-3 rounded-circle metismenu-icon fas fa-exclamation-triangle mr-3" style="font-size: 3rem;"></i> <div style="height: 50px; width:1px;background:black;"></div> <p style="font-size:1.6rem; font-weight:bold;" class="ml-5">
        
        Loyers impayés  {{ $factures->count() ?? '0' }}
    
    </p></div>
            
          <a href="/dashboard/factures" class="btn btn-secondary btn-block">Voir plus</a>
    
        </div>
      </div>
    

</div>


<div class="col-4">

    <div class="card">
        <div class="card-header">Interventions</div>
        <div class="card-body">
    
    <div class="d-flex m-5"><i class="bg-light p-3 rounded-circle metismenu-icon fas fa-tools mr-3" style="font-size: 3rem;"></i> <div style="height: 50px; width:1px;background:rgb(78, 77, 77);"></div> <p style="font-size:1.6rem; font-weight:bold;" class="ml-5">
        
        Interventions {{ $renovations->count() ?? '0' }}
    
    </p></div>
            
          <a href="/dashboard/interventions" class="btn btn-secondary btn-block">Voir plus</a>
    
        </div>
      </div>
    

</div>

</div>

@endsection

@endif



@if($data->role=="Administrateur")

@section('content')

<div class="row">

<div class="col-4">

    <div class="card">
        <div class="card-header">Biens</div>
        <div class="card-body">
    
    <div class="d-flex m-5"><i class="bg-light p-3 rounded-circle metismenu-icon fas fa-home mr-3" style="font-size: 3rem;"></i> <div style="height: 50px; width:1px;background:black;"></div> <p style="font-size:1.6rem; font-weight:bold;" class="ml-5">
        
        Biens {{ $biens->count() ?? '0' }}
    
    </p></div>
            
    
        </div>
      </div>
    

</div>



<div class="col-4">

    <div class="card">
        <div class="card-header">Utilisateurs</div>
        <div class="card-body">
    
    <div class="d-flex m-5"><i class="bg-light p-3 rounded-circle metismenu-icon fas fa-users mr-3" style="font-size: 3rem;"></i> <div style="height: 50px; width:1px;background:black;"></div> <p style="font-size:1.6rem; font-weight:bold;" class="ml-5">
        
        Utilisateurs  {{ $users->count() ?? '0' }}
    
    </p></div>
            

    
        </div>
      </div>
    

</div>


<div class="col-4">

    <div class="card">
        <div class="card-header">Transactions</div>
        <div class="card-body">
    
    <div class="d-flex m-5"><i class="bg-light p-3 rounded-circle metismenu-icon fas fa-cash-register mr-3" style="font-size: 3rem;"></i> <div style="height: 50px; width:1px;background:rgb(78, 77, 77);"></div> <p style="font-size:1.6rem; font-weight:bold;" class="ml-5">
        
        Transactions {{ $transactions->count() ?? '0' }}
    
    </p></div>
            
    
        </div>
      </div>
    

</div>

</div>

@endsection

@endif

<!-- Paiement -->


<div class="modal fade" id="pay" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-body">

                <h4 class="text-center m-3">Veuillez choisir un opérateur</h4>

                <div class="d-flex">
                    <div class="card duele m-3 p-3" data-toggle="modal" data-target="#orange" style="width: 18rem;">
                        <img class="card-img-top" src="/orange.png" alt="Card image cap">
                    </div>


                    <div class="card duele m-3 p-3" data-toggle="modal" data-target="#mtn" style="width: 18rem;">
                        <img class="card-img-top" src="/mtn.png" alt="Card image cap">
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>



<!-- orange-->

<div class="modal fade" id="orange" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-body">

                <img class="card-img-top" src="/orange.png" alt="Card image cap">


                <form action="/facture/withdraw" method="POST">

                    @csrf


                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Numéro à créditer</label><input name="num" type="text"
                            class="form-control"
                            placeholder="Les transactions Orange money sont momentanément indisponibles" disabled>
                    </div>


                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Montant</label><input name="montant" type="text"
                            class="form-control"
                            placeholder="Les transactions Orange money sont momentanément indisponibles" disabled>
                    </div>

                    <button class="mt-2 btn btn-dark btn-block" type="button">Enregistrer</button>

                </form>
            </div>

        </div>
    </div>
</div>


<!-- mtn-->


<div class="modal fade" id="mtn" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-body">

                <img class="card-img-top" src="/mtn.png" alt="Card image cap">

                <form action="/facture/withdraw" method="POST">

                    @csrf

                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Numéro à créditer</label><input name="num" type="text"
                            class="form-control">
                    </div>


                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Montant</label><input name="montant" type="text"
                            class="form-control">
                    </div>

                    <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                </form>
            </div>

        </div>
    </div>
</div>



@push('page-js')
    <script src="/main/assets/js/jquery-2.1.0.min.js"></script>

    @if($data->role=="Bailleur" and $biens!=null )

    {{-- ChartScript --}}

    @if ($usersChart)
        {!! $usersChart->script() !!}
    @endif

    @if ($usersChart2)
    {!! $usersChart2->script() !!}
@endif

@endif

@endpush
