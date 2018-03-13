<!doctype html>
<html lang="{{ app()->getLocale() }}">

@if(isset($mensaje))

    <script type="text/javascript">
            alert('gracias por sus datos');

            });
    </script>
    @endif
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotel Medellin Comfort</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        @section('scripts')
            <script type="text/javascript">


            </script>
    @endsection
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: white;
               /* font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
                height: 100vh;
                margin: 0;

            }
            body{background-image: url({{ asset('/img/cover.jpg') }})!important}

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    @extends('layouts.app')

    @section('content')
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Hotel Medellin Comfort
                </div>


                <div class="container text-center">
                    <div class="row">


                    <div class="col-md-12">
                        <h1>
                            Tu hotel personalizado
                        </h1>

                        <p class="tagline">
                            Somos la empresa hotelera que te ha de brindar los mejores servicios para que tu experiencia sea innolvidable
                        </p>
                        <a class="btn btn-primary" href="/create">Dejanos tus datos</a>
                        <br>
                        <br>
                        <p  class="btn btn-dark">Si deseas verificar tu registro haz <a href="/consulta">clic Aqui</a> </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    $(document).ready(function () {
    $("#mostrarmodal").modal("show");
    });
    @endsection