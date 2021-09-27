@extends('admin.index')

@section('title')

    Liste de tous les utilisateurs

@endsection


@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
 
        .card:hover {
            transform: scale(1.06);

        }

    </style>

@endpush


@section('icon')

    <i class="metismenu-icon fas fa-users"></i>

@endsection

@section('bouton')

    <div class="page-title-actions">

        <div class="d-inline-block dropdown">


        </div>
    </div>


@endsection

@section('content')

    <!-- First Row [Prosucts]-->

    <!-- Default dropup button -->

    <div class="d-flex">
        <div class="dropdown m-4">

            <button class="btn bg-primary-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
    
                <i class="fas fa-filter"> Filtrer par role </i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
    
                    <a class="dropdown-item" href="/dashboard/utilisateurs/Bailleur">Bailleur</a>
    
                    <a class="dropdown-item" href="/dashboard/utilisateurs/Locataire">Locataire</a>
    
                    <a class="dropdown-item" href="/dashboard/utilisateurs/Administrateur">Administrateur</a>
    
            </div>
        </div>
    
        <div class="border p-3 ml-auto" style="width: 20%;">
    
            <form action="/utilisateurs/rechercher" method="post">
    
                @csrf
    
               <div class="d-flex">
                   
                <input type="text" name="nom" class="mr-2 mb-4" style="height:30px;" />
                
                <select name="role" style="border: none;height:30px;" class="btn bg-primary-light">
    
                   <option value="Administrateur">Administrateur</option>
    
                   <option value="Bailleur">Bailleur</option>
    
                   <option value="Locataire">Locataire</option>
    
    
                    
               </select>
    
    
              </div> 
    
    
              <center><button class="btn bg-primary-light" type="submit">
                <i class="fas fa-search"> Rechercher</i>
            </button></center>  
    
    
            </form>
    
    
        </div>

    </div>

    


    <div class="row pb-5 mb-4">

        @foreach ($users as $u)

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">

                <!-- Card-->
                <div class="card rounded shadow-sm border-0 ">

                    <div class="card-body p-4">

                        <center>

                        <img src="/locataire.jpg" alt="" class="img-fluid d-block" >


                            <p>{{ $u->nomcomplet }}</p>

                            <p>{{ $u->telephone }}</p>

                            <p>{{ $u->email }}</p>


                            <p>{{ $u->role }}</p>


                            @if($u->role=="Locataire") 
                                    
                                    @foreach ($locataires as $lo)

                                    @if($lo->idu==$u->idu)

                                    <a href="profilelocataire/{{ $lo->idlocataire }}" title="consulter"
                                        class="btn bg-primary-light mt-3"><i class="fas fa-eye"> Consulter</i></a>
                                      @endif  
                                    @endforeach



                                        @else

                                        @foreach ($bailleurs as $lo)

                                        @if($lo->idu==$u->idu) 
                                        
                                        <a href="profilebailleur/{{ $lo->idbailleur }}" title="consulter"
                                            class="btn bg-primary-light mt-3 "><i class="fas fa-eye"> Consulter</i></a>
                                            
                                            @endif  

                                            @endforeach
                                            
                                            @endif


                                            <a title="supprimer"
                                    data-toggle="modal" data-target="#supp{{ $u->idu}}"
                                        class="btn bg-danger-light mt-3"><i class="fas fa-trash"> Supprimer</i></a>
                                            
 
                        </center>
            </div>
                </div>



            </div>

        @endforeach

    </div>
    <center>{{ $users->links('pagination::bootstrap-4') }}</center>

@endsection

@push('page-js')
    <script src="/main/assets/js/jquery-2.1.0.min.js"></script>
@endpush

@foreach ($users as $l)

<div class="modal fade" id="supp{{ $l->idu }}" tabindex="-1" role="dialog"
  aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog">

      <div class="modal-content">

          <div class="modal-body">

              <center>
                  <h5><img src="/internis.png" alt="logo" width="150"></h5>
              </center>

<center class="mt-2"><h4> Voulez-vous vraiment supprimer cet utilisateur ?</h4></center>

<center class="mt-5 mb-4"><a onclick="event.preventDefault; var form=document.getElementById('form2{{ $l->idu}}'); form.submit();"
    class="btn bg-success-light mr-3 p-2 rounded text-white" ><i class="fas fa-check mr-1"></i> Confirmer</a> <a type="button" data-dismiss="modal" aria-label="Close" class="btn bg-danger-light p-2 rounded "><i class="fas fa-times"></i> Annuler</a></center>
    <form id="form2{{ $l->idu }}" action="/utilisateur/{{ $l->idu }}" method="get"
        style="display: none;">
        @csrf
        @method('delete')

    </form>

          </div>

      </div>
  </div>
</div>

@endforeach