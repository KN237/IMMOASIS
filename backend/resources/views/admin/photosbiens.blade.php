@extends('admin.index')

@section('title')

   Photos

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-home"></i>

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

@section('bouton')

    <div class="page-title-actions">

        <div class="d-inline-block dropdown">

            <button type="button" class="btn-shadow btn btn-dark" data-toggle="modal" data-target="#form">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="metismenu-icon fas fa-plus"></i>
                </span>
               Ajouter une photo
            </button>

        </div>
    </div>
@endsection

    @section('content')

    <!-- First Row [Prosucts]-->

    <!-- Default dropup button -->
    <div class="dropdown m-4">
        <button class="btn bg-primary-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-filter"> Filtrer par bien </i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

            @foreach ($biens as $d)

                <a class="dropdown-item" href="/dashboard/photosbien/{{ $d->idbien }}"> {{ $d->nom }} / {{ $d->quartier }} </a>

            @endforeach

        </div>
    </div>


    <div class="row pb-5 mb-4">

        @foreach ($photos as $b)

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">

                <!-- Card-->
                <div class="card rounded shadow-sm border-0 ">

                    <img src="/storage/photosbiens/{{ $b->nom }}" alt="photo" class="card-img-top" style="height: 240px;">

                    <div class="card-body p-4">

                        <center>

                        @foreach ($biens as $u)

                          @if ($b->idbien == $u->idbien)

                            <p> {{ $u->nom }} / {{ $u->quartier }} / {{ $u->ville }}</p>

                          @endif

                        @endforeach

                            <p class="m-3">{{ $b->nom }}</p>


                            <a title="supprimer"
                                    data-toggle="modal" data-target="#supp{{ $b->idphoto}}"
                                        class="btn bg-danger-light deletebtn"><i class="fas fa-trash"></i> Supprimer</a>
                                            
 
                        </center>
            </div>
                </div>



            </div>

        @endforeach

    </div>

    <center>{{ $photos->links('pagination::bootstrap-4') }}</center>

@endsection


<!-- Ajout -->

<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-body">

                <center>
                    <h5><img src="/internis.png" alt="logo" width="100"></h5>
                </center>

                <form class="___class_+?15___" enctype="multipart/form-data" class="m-5" action="/photo" method="post">
                    @csrf
  
                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="___class_+?24___">Bien </label>
                            
                            <select name="idbien" class="form-control">

                                @foreach($biens as $b)
                                                    <option value="{{$b->idbien}}">{{$b->nom}}</option>
                                
                                 @endforeach
                                
                            </select>
                             
                        </div>


                          
                    <div class="position-relative form-group"><label for="examplePassword11"
                        class="___class_+?24___">Photo </label>
                           
                        <input type="file" name="nom" class="form-control">
                        
                    </div>

                    <button class="mt-2 btn btn-dark btn-block">Enregistrer</button>

                </form>

            </div>

        </div>
    </div>
</div>

@foreach ($photos as $p)

<div class="modal fade" id="supp{{ $p->idphoto }}" tabindex="-1" role="dialog"
  aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog">

      <div class="modal-content">

          <div class="modal-body">

              <center>
                  <h5><img src="/internis.png" alt="logo" width="150"></h5>
              </center>

<center class="mt-2"><h4> Voulez-vous vraiment supprimer cette photo de votre liste?</h4></center>

<center class="mt-5 mb-4"><a onclick="event.preventDefault; var form=document.getElementById('form2{{ $p->idphoto}}'); form.submit();"
    class="btn bg-success-light mr-3 p-2 rounded text-white" ><i class="fas fa-check mr-1"></i> Confirmer</a> <a type="button" data-dismiss="modal" aria-label="Close" class="btn bg-danger-light p-2 rounded "><i class="fas fa-times"></i> Annuler</a></center>
    <form id="form2{{ $p->idphoto }}" action="/photo/{{ $p->idphoto }}" method="post"
        style="display: none;">
        @csrf
        @method('delete')

    </form>

          </div>

      </div>
  </div>
</div>

@endforeach

@push('page-js')
<script src="/main/assets/js/jquery-2.1.0.min.js"></script>
@endpush

 