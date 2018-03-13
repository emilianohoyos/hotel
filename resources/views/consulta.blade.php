@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top:40px">


        <div class="card-header text-center">
            <h2>consulta de suscripción</h2>
        </div>


        <form method="post" action="">

            <div class="col-md-22 col-md-offset-1">
                {{ csrf_field() }}
                <div class="col-md-6">
                    <div class="form-group">

                        <label for="email">Correo electrónico</label>
                        <input name="email" id="email" class="form-control" type="email">
                        {{-- TODO: Completa el input para el poster --}}
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    consultar suscripcion
                </button>
            </div>
        </form>
    </div>
    <br>
    @if(isset($error))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Este correo electronico no esta registrado</strong> por favor verifica si es correcto o intenta registrarte de nuevo
            <a href="/create">registrarse</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(isset($consulta))
    <div class="col-md-22 col-md-offset-1">
        {{ csrf_field() }}
        {{-- TODO: Abrir el formulario e indicar el método POST --}}

        {{-- TODO: Protección contra CSRF --}}
        @foreach($consulta as $datos)
        <div class="col-md-6">

            <div class="form-group">
                <label for="nombres">Nombres y apellidos</label>
                <input type="text" name="nombres" id="nombres" class="form-control" value="{{$datos->nombres}}">
            </div>


            <div class="form-group">
                <label for="pais">pais</label>
                <input name="pais" class="form-control"  id="pais" value="{{$datos->pais}}" >


            </div>


            <div class="form-group">
                <label for="ciudad">ciudad</label>
                <input name="ciudad" class="form-control"  id="ciudad" value="{{$datos->ciudad}}" >

            </div>
        </div>
        <div class="col-md-6">

            <div class="form-group">

                <label for="email">Correo electrónico</label>
                <input name="email" id="email" class="form-control" type="email" value="{{$datos->email}}">
                {{-- TODO: Completa el input para el poster --}}
            </div>

            <div class="form-group">
                <label for="nivelacademico">nivel academico</label>
                <input name="nivelacademico" class="form-control"  id="nivelacademico" value="{{$datos->nivelacademico}}">
                </input>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="number" name="telefono" id="telefono" class="form-control" value="{{$datos->telefono}}">
            </div>

        @endforeach

        </div>



    </div>


    </form>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="padding:8px 100px;margin-top:25px;">
            Eliminar informacion
        </button>

    </div>

    @endif
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cancelar suscripcion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Al dar clic en aceptar su informacion sera eliminada de los servidores de Hotel Medellin Comfort
                </div>
                <div class="modal-footer">
                    @if(isset($consulta))
                        @foreach($consulta as $mod)
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                    <form action="" method="PUT">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}



                    <input type="text" hidden value="{{$mod->email}}" name="correo">
                            @endforeach
                        @endif
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@section("script")
    <script type="text/javascript">
        $('.alert').alert();

        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>



@endsection
@stop