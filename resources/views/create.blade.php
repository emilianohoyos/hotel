@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top:40px">

     
            <div class="card-header text-center">
               <h2>Formulario de suscripción</h2>
                </div>


                    <form method="post" action="">

                 <div class="col-md-22 col-md-offset-1">
                     {{ csrf_field() }}
                        {{-- TODO: Abrir el formulario e indicar el método POST --}}

                    {{-- TODO: Protección contra CSRF --}}

                    
                    <div class="col-md-6">

                    <div class="form-group">
                        <label for="nombres">Nombres y apellidos</label>
                        <input type="text" name="nombres" id="nombres" class="form-control">
                    </div>


                 <div class="form-group">
                        <label for="pais">pais</label>
                        <select name="pais" class="form-control"  id="pais" >
                            <option value="">Seleccione</option>
                            <?php foreach($pais as $country){ ?>

                        <option value="<?php echo $country['Codigo']; ?>"><?php echo $country['Pais']; ?></option>
                         <?php } ?>
                        </select>
                    </div>
                   

                     <div class="form-group">
                        <label for="ciudad">ciudad</label>
                        <select name="ciudad" class="form-control"  id="ciudad " >
                            <option value="">Seleccione</option>
                            <?php foreach($ciudad as $city){ ?>
                        <option value="<?php  echo $city['idCiudades']; ?>"><?php echo $city['Ciudad']; ?></option>
                         <?php } ?>
                        </select>
                    </div>
                     </div>
                    <div class="col-md-6">

                    <div class="form-group">

                        <label for="email">Correo electrónico</label>
                        <input name="email" id="email" class="form-control" type="email">
                        {{-- TODO: Completa el input para el poster --}}
                    </div>

                    <div class="form-group">
                        <label for="nivelacademico">nivel academico</label>
                        <select name="nivelacademico" class="form-control"  id="nivelacademico">
                            <option value="">Seleccione</option>
                            <?php foreach($nivelacademico as $nivelaca){ ?>
                        <option value="<?php echo $nivelaca['idnivelacademico']; ?>"><?php echo $nivelaca['descripcion']; ?></option>
                         <?php } ?>
                            
                        </select>
                    </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="number" name="telefono" id="telefono" class="form-control">
                        </div>



                </div>

                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            enviar informacion
                        </button>
                    </div>
                   

                    </form>

                 </div>

    @section("script")
        <script type="text/javascript">
            $("#pais").change(event => {
                $.get(`towns/${event.target.value}`, function(res, sta){
                    $("#ciudad").empty();
                    res.forEach(element => {
                        $("#town").append(`<option value=${element.id}> ${element.name} </option>`);
                     });
                });
            });
        </script>



    @endsection
@stop