 @extends('layouts.app')

@section('content')
@if (!empty($success))
    {{ $success }}
@endif
<style>
    .form-inline {

        display: list-item !important;
    }
</style>

 <h2 class="sub-header">Usuarios</h2>  

  <div class="table-responsive">
                        <!-- Añadimos un botón para el diálogo modal -->
                                           <br>
                                <br>
                <div class="dataTable_wrapper">
                    <br><br><br>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" class="col-md-12">
                          <!--  <table class="table table-striped"> -->

                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombres</th>
                            <th>pais</th>
                            <th>ciudad</th>
                            <th>correo</th>
                            <th>telefono</th>
                            {{--<th>Acciones</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        <form role="form" method="post" action="" >
                            {{ csrf_field() }}
                            <?php
                            try {
                            foreach ($usuario as $user) {
                            ?>
                            <tr>
                                <td><?php print($user->idusuarios); ?></td>
                                <td><?php print($user->nombres); ?></td>
                                <td><?php print($user->email); ?></td>
                                <td><?php print($user->pais); ?></td>
                                <td><?php print($user->ciudad); ?></td>
                                <td><?php print($user->telefono); ?></td>
                                {{--<td>--}}
                                {{--<button id="edit-rol"   name="edit-rol" type="button" --}}
                                {{--class="btn btn-primary"--}}
                                {{--onclick="location.href='{{ url('/editar_usuario/'.$user->id_usuario)}}'"--}}
                                {{--><span alt="Editar" class="menu-icon fa fa-pencil"></span> </button>--}}
                                {{--<button type="button" class="btn btn-danger" alt="Eliminar" data-toggle="modal" data-target="#exampleModal">--}}
                                {{--<span class="menu-icon fa fa-eraser"></span>--}}
                                {{--</button> --}}
                                {{--</td>--}}
                            </tr>

                            <?php
                            }
                            } catch (Exception $exception) {
                                echo 'Error hacer la consulta: ' . $exception;
                            }
                            ?>
                        </form>
                        </tbody>
                    </table>

                        <div> <!-- fin de datatable -->
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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

                        

                     <!--   <script type="text/javascript">
                            $('#myModal').on('shown.bs.modal', function () {
                                 $('#myInput').trigger('focus')
                            })
                        </script> -->
@stop