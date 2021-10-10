@extends('admin.index')

@section('title')

    Configuration inventaire

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-clipboard"></i>

@endsection


@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .img-thumbnail:hover,
        .equipement:hover {

            transform: scale(1.2);
        }

    </style>
@endpush


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="profile-header">
                <div class="row align-items-center">
                    <div class="col-auto profile-image">
                        <a href="#">
                            <img class="rounded-circle" alt="Image du bien" src="/house.jpg" width="100" height="100">
                        </a>
                    </div>

                    <div class="col ml-md-n2 profile-user-info">

                        <h4 class="user-name mb-0"> {{ $bien->nom }} </h4>

                      <button class="btn btn-primary btn-lg mt-5" onclick="document.querySelector('form').submit();"> Enregistrer </button>


                    </div>

                </div>
            </div>
            <div class="profile-menu">
                <ul class="nav nav-tabs nav-tabs-solid">

                    @foreach ($pieces as $p)

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab"
                                href="#{{ $p->nom }}_tab">{{ $p->nom }}</a>
                        </li>

                    @endforeach

                </ul>


            </div>

            <form action="/etatequipement" method="post">

                @csrf

            <div class="tab-content profile-tab-cont">

                <!-- Piece Tab -->

                

                @foreach ($pieces as $p)

                    <div id="{{ $p->nom }}_tab" class="tab-pane fade">

                      

                            <div class="col-lg-12 d-flex">

                                @php

                                $i=0;
                                    
                                @endphp

                                @foreach ($equipements as $e)

                                    @if ($e->idpiece == $p->idpiece)

                                        <div class=" d-flex m-3">

                                            <div class="card text-center equipement" style="width:250px;">
                                                <center><img src="/clip.png" alt="photo" class="m-3" width="70">
                                                </center>
                                                <div class="card-body">
                                                    <p class="card-text">

                                                    <p class="h6"> {{ $e->nom}} </p>

                                                    </p>


                                                    <center>

                                                        <input type="hidden" name="inventaire[idequipement][{{$i}}]" value="{{ $e->idequipement}}">

                                                        <input type="date" name="inventaire[date][{{$i}}]" class="form-control mt-3">

                                                        <select name="inventaire[valeur][{{$i}}]" class="form-control mt-3">

                                                            <option value="0">Mauvais</option>

                                                            <option value="1">Bon</option>

                                                        </select>

                                                        <textarea class="form-control mt-3" name="inventaire[commentaire][{{$i}}]"></textarea>

                                                    </center>



                                                </div>

                                                <div class="card-footer text-muted">

                                                    <div class="m-3"> Prix
                                                        {{ $e->prix }}</div>

                                                    <div> Quantite {{ $e->quantite }}</div>

                                                </div>

                                            </div>

                                        </div>

                                    @endif

                                    @php

                                $i++;
                                    
                                @endphp

                                @endforeach

                                

                            </div>

                    </div>


                @endforeach


                


        


                <!-- /PieceTab -->


            </div>

          
        </form>

        </div>
    </div>
@endsection


@push('page-js')

    <!-- Select2 JS -->
    <script src="/main/assets/js/jquery-2.1.0.min.js"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>


@endpush
