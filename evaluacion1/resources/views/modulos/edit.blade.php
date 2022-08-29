@extends('plantilla')
@section('title', 'Mis Productos')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Gestor de Productos</h1>
        </section>
        <section class="content">
        <div class="box">
            
            
        </div>
        </section>
    </div>
    
    <div action='/updateProductos' class="modal fade" enctype='multipart/form-data' id="updateProducto" >
       
            <div class="">
                <form method="post">
                @csrf  
                
                        <div class="box-body">
                            <div class="form-group">
                                <h4>Nombre</h4>
                                <input type="hidden" class="form-control input-md" name="id" required="" value="{{ $productos[0] -> id }}">          
                                <input type="text" class="form-control input-md" name="nombre_producto" required="" value="{{ $productos[0] -> nombre_producto }}">                                
                            </div>

                            <div class="form-group">
                                <h4>Descripción</h4>
                                <input type="text" class="form-control input-md" name="descripcion" id="descripcion" required="" value="{{ $productos[0] -> descripcion }}">                                
                            </div>

                            <div class="form-group">
                                <h4>Categoría</h4>
                                <select name="categoria_id" class="form-control input-lg" name="categoria_id" id="categoria_id" require="">
                                <option value=""> Seleccionar... </option>                                
                                @foreach($categorias as $categoria)   
                                @if($categoria->id == $productos[0]->categoria_id)                                                           
                                    <option value="{{ $categoria -> id }}"selected >{{  $categoria -> nombre }}</option> 
                                @else
                                <option value="{{ $categoria -> id }}" >{{  $categoria -> nombre }}</option> 
                                @endif
                                @endforeach
                                </select>                                 
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