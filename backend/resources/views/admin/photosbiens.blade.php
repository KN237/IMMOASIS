@extends('admin.index')

@section('title')

   Photos

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-home"></i>

@endsection

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
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

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table id="example" style="width:100%" class="table table-borderless table-hover text-center">
                <thead>
                    <tr style="font-size: 14px;">

                        <th>Numéro du bien </th>

                        <th>Photo </th>

                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($photos as $p)
                    
                        <tr style="font-size: 14px;">

                            <td>{{ $p->idbien }}</td>

                            <td> <img src="/storage/photosbiens/{{ $p->nom }}" alt="photo" width="100" height="100"></td>

                            <td style="display:flex;flex-direction: column">

                                <center> <button title="supprimer"
                                    data-toggle="modal" data-target="#supp{{ $p->idphoto}}"
                                        class="btn bg-danger-light deletebtn"><i class="fas fa-trash"></i> Supprimer</button>
                                </center>
                            </td>

                        </tr>


                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



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

<center class="mt-2"><h4> Voulez-vous vraiment vous supprimer cette photo de votre liste?</h4></center>

<center class="mt-5 mb-4"><button onclick="event.preventDefault; var form=document.getElementById('form2{{ $p->idphoto}}'); form.submit();"
    class="btn bg-success-light mr-3 p-2 rounded text-white" ><i class="fas fa-check mr-1"></i> Confirmer</button> <button type="button" data-dismiss="modal" aria-label="Close" class="btn bg-danger-light p-2 rounded "><i class="fas fa-trash mr-1"></i> Annuler</button></center>
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

 