@extends('plantilla')
@section('title', 'Categorias')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

    <h1>Gestor de categorías</h1>

    </section>

    <section class="content">

        <div class="box">

        <div class="box-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#CrearCategoria" >Ingresar nueva categoría</button>
             
        </div>

            <div class="box-body">

            <table class="table table-bordered table-hover table-striped">

<thead>

    <tr>

        <th>ID</th>
        <th>Nombre Categoría</th>
        <th></th>

    </tr>

</thead>

<tbody>
    
    @foreach($categorias as $categoria)
        <tr>
            <td>{{ $categoria -> id}}</td>

            <td>{{ $categoria -> nombre }}</td>
            
            <td>

                <button class="btn btn-success" data-toggle="modal" data-target="#EditarCategoria">
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

<div class="modal fade " id="CrearCategoria" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="">

                    @csrf

                    <div class="modal-body">
                        <div class="box-body">

                        <h2>Crear Nueva Categoría</h2>
                            
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control input-md" name="nombre" id="nombre" required="">                  
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

<div class="modal fade" id="EditarCategoria" >

        <div class="modal-dialog">

            <div class="modal-content">

                <form method="GET">

                    <div class="modal-body">

                        <div class="box-body">

                        <h2>Editar Categoría</h2>


                            <div class="form-group">

                                <h4>Nombre</h4>
                                <input type="text" class="form-control input-md" name="modelo" required="">
                                
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




