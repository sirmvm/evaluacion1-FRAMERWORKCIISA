@extends('plantilla')
@section('title', 'Sucursales')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

    <h1>Gestor de Sucursales</h1>

    </section>

    <section class="content">

        <div class="box">

        <div class="box-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#CrearSucursal" >Ingresar nueva sucursal</button>
             
        </div>

            <div class="box-body">

            <table class="table table-bordered table-hover table-striped">

<thead>

    <tr>

        <th>ID</th>
        <th>Nombre Sucursal</th>
        <th>Direccion</th>
        <th></th>
    </tr>

</thead>

<tbody>
    
    @foreach($sucursales as $sucursal)
        <tr>
            <td>{{ $sucursal -> id}}</td>
            <td>{{ $sucursal -> nombre_sucursal }} </td>
            <td>{{ $sucursal -> dirección }} </td>
            
            <td>

                <button class="btn btn-success" data-toggle="modal" data-target="#EditarSucursal">
                    <i class="fa fa-pencil"></i>
                </button>
                
                <button class="btn btn-danger Eliminar">
                    <i class="fa fa-trash"></i>
                </button>

            </td>

        </tr>
    @endforeach

</tbody>

</table>

    </section>

</div>

<div class="modal fade " id="CrearSucursal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="">

                    @csrf

                    <div class="modal-body">
                        <div class="box-body">

                        <h2>Crear Nueva Sucursal</h2>
                            
                            <div class="form-group">
                                <label for="nombre_sucursal" class="form-label">Nombre de la sucursal</label>
                                <input type="text" class="form-control input-md" name="nombre_sucursal" id="nombre_sucursal" required="">                  
                            </div>
                            <div class="form-group">
                                <label for="dirección" class="form-label">Direccion</label>
                                <input type="text" class="form-control input-md" name="dirección" id="dirección" required="">                  
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">
                     
                        
                        <button type="submit" class="btn btn-primary"">Crear</button>
                        
                        <button type="button" class="btn btn-danger" data-dismiss='modal'>Cancelar</button>
                    
                    </div>

                </form>

            </div>

        </div>

    </div>

<div class="modal fade" id="EditarSucursal" >

        <div class="modal-dialog">

            <div class="modal-content">

                <form method="GET">

                    <div class="modal-body">

                        <div class="box-body">

                        <h2>Editar Sucursal</h2>


                            <div class="form-group">

                                <h4>Nombre</h4>
                                <input type="text" class="form-control input-md" name="nombre_sucursal" required="">
                                
                            </div>
                            <div class="form-group">

                                <h4>Direccion</h4>
                                <input type="text" class="form-control input-md" name="direccion" required="">
                                
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary ">Guardar los cambios</button>
                        
                        <button type="button" class="btn btn-danger" data-dismiss='modal'>Cancelar</button>

                    </div>

                </form>

            </div>

        </div>

@stop




