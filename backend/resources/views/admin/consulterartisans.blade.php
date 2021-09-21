@extends('admin.index')

@section('title')

    Artisans

@endsection


@section('icon')

    <i class="metismenu-icon fas fa-hard-hat"></i>

@endsection

@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .social-link:hover,
        .social-link:focus {
            background: #ddd;
            text-decoration: none;
            color: #555;
        }

        .progress {
            height: 10px;
        }

        .card:hover{
transform: scale(1.1);

        }

    </style>

@endpush



@section('content')


    <!-- First Row [Prosucts]-->
 
    <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <i class="m-3 fas fa-filter"></i></p>

    <div class="row pb-5 mb-4">

        @foreach($artisans as $a)

        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">

       

            <!-- Card-->
            <div class="card rounded shadow-sm border-0 ">
                <div class="card-body p-4"><img src="/worker.jpg" alt="" class="img-fluid d-block">
                 <center><a href="#" class="h4 bold text-center">{{$a->nomcomplet}}</a>

                    <p class="h5 text-muted font-italic mt-2"> {{$a->profession}}</p>

                    <p class="h6 text-muted font-italic mt-2">+237{{$a->telephone}}</p>

                 </center>
                 
                    <ul class="list-inline small mt-3">
                        <li class="list-inline-item m-0"><i class="fa fa-star text-danger"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-danger"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-danger"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-danger"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-danger"></i></li>
                    </ul>
                </div>
            </div>

           

        </div>

        @endforeach

    </div>

@endsection



@push('page-js')
    <script src="/main/assets/js/jquery-2.1.0.min.js"></script>
@endpush
