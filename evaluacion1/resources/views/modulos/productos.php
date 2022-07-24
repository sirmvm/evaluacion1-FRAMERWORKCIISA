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
                            <th>Código producto</th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Sucursal</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Precio venta</th>
                            <th></th>

                        </tr>

                    </thead>
                    
                    <tbody>

                            <tr>
                                <td>No registrado</td>

                                <td>No registrado</td>

                                <td>No registrado</td>

                                <td>No registrado</td>
                               
                                <td>No registrado</td>

                                <td>No registrado</td>

                                <td>No registrado</td>

                                <td>No registrado</td>
                                
                                <td>

                                    <button class="btn btn-success" data-toggle="modal" data-target="#EditarProducto">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    
                                    <button class="btn btn-danger EliminarProducto">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                </td>

                            </tr>

                    </tbody>

                </table>
                
            </div>

        </div>

        </section>
    
    </div>

    <div class="modal fade " id="CrearProducto" >

        <div class="modal-dialog">

            <div class="modal-content">

                <form method="post" action="{{ url('/') }}">

                    <div class="modal-body">

                        <div class="box-body">

                            <div class="form-group">

                                <h4>Código producto:</h4>
                                <input type="text" class="form-control input-md" name="marca" required=""
                                value="">
                                
                            </div>

                            <div class="form-group">

                                <h4>Nombre</h4>
                                <input type="text" class="form-control input-md" name="modelo" required="">
                                
                            </div>

                            <div class="form-group">

                                <h4>Categoría</h4>
                                <input type="text" class="form-control input-md" name="anio" required="">
                                
                            </div>

                            <div class="form-group">

                                <h4>Sucursal:</h4>

                                <select class="form-control input-md" name="" required="">

                                    <option value="">Seleccionar...</option>
                                    
                                    <option value="Sucursal-1">Sucursal 1</option>
                                    
                                    <option value="Sucursal-2">Sucursal 2</option>

                                    <option value="Sucursal-3">Sucursal 3 </option>

                                </select>

                            </div>

                            <div class="form-group">

                                <h4>Descripción</h4>
                                <input type="text" class="form-control input-md" name="descripcion" required="">
                                
                            </div>

                            <div class="form-group">

                                <h4>Cantidad</h4>
                                <input type="number" class="form-control input-md" name="cantidad" required="">
                                
                            </div>

                            <div class="form-group">

                                <h4>Precio venta</h4>
                                <input type="number" class="form-control input-md" name="precio-venta" required="">
                                
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary ">Crear</button>
                
                        <button type="button" class="btn btn-danger" data-dismiss='modal'>Cancelar</button>

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

    </div>
