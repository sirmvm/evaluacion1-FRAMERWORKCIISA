@extends('plantilla')
@section('title', 'Mis Productos')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Gestor de Productos</h1>
        </section>
        <section class="content">
        <div class="box">
            <div class="box-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#CrearProducto" >Ingresar nuevo producto</button>
            </div>

            <div class="box-body">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Descripción</th>
                            <th>Edicion</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto -> id}}</td>
                            <td>{{ $producto -> nombre_producto }}</td>
                            <td>{{ $producto -> categoria -> nombre }}</td>
                            <td>{{ $producto -> descripcion }}</td>
                            <td>
                                <button class="btn btn-success" data-toggle="modal" data-target="#EditarProductos">
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
            </div>
        </div>
        </section>
    </div>
    <div class="modal fade " id="CrearProducto" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="">
                    
                    @csrf
                    <div class="modal-body">
                        <div class="box-body">                            
                            <div class="form-group">
                                <h4>Nombre</h4>
                                <input type="text" class="form-control input-md" name="nombre_producto" id="nombre_producto" required="">                  
                            </div>

                            <div class="form-group">
                                <h4>Descripción</h4>
                                <input type="text" class="form-control input-md" name="descripcion" id="descripcion">
                            </div>

                            <div class="form-group">
                                <h4>Categoría</h4>
                                <select name="categoria_id" class="form-control input-lg" name="categoria_id" id="categoria_id" require="">
                                <option value=""> Seleccionar... </option>                                
                                @foreach($categorias as $categoria)                                
                                    <option value="{{ $categoria -> id }}">{{  $categoria -> nombre }}</option>                                
                                @endforeach
                                </select>       
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                   <a href= "">      
                        <button type="submit" class="btn btn-primary" >Crear</button>
                        <button type="button" class="btn btn-danger" data-dismiss='modal'>Cancelar</button>
                    </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="EditarProducto" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST">
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <h4>Nombre</h4>
                                <input type="text" class="form-control input-md" name="modelo" required="">                                
                            </div>

                            <div class="form-group">
                                <h4>Precio venta</h4>
                                <input type="number" class="form-control input-md" name="precio-venta" required="">                                
                            </div>

                            
                            <div class="form-group">
                                <h4>Descripción</h4>
                                <input type="text" class="form-control input-md" name="descripcion" required="">                                
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