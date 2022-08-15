@extends('plantilla')
@section('title', 'BusquedaProductos')

@section('content')

  <div align="center"> 
    <h1>Ingrese el Nombre o Codigo del Producto que desea Buscar</h1>
    <form  action="productoBuscado.php" method="get" class="form_search">
      <div class="form-group">
        <label for="nombreBusquedaProducto">Ingrese Nombre de Producto a Buscar</label>
        <input type="text" class="form-control" id="nombreBusquedaProducto" placeholder="Producto a Buscar" value="<?php echo $nombreBusquedaProducto; ?>">    
        
      </div>
      
      <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

  </div>

  
  <div align="center"> 
    <?php
    if(isset($_GET['submit'])) {
      $nombreBusquedaProducto = $_GET['nombreBusquedaProducto'];
      $sql_nombre = mysqli_query($conection,"SELECT * FROM productos WHERE (nombre_producto LIKE '%$nombreBusquedaProducto'");

      $sql_codigo = mysqli_query($conection,"SELECT * FROM stocks WHERE (codigo_producto LIKE '%$nombreBusquedaProducto'");


      while ($busqueda = mysqli_fetch_array($sql_nombre) ){ ?>
   
        <tr>
            <td> Nombre Producto: <?php echo $busqueda["nombre_producto"];?> </td>
            <td> Categoria: <?php echo $busqueda["categoria"];?> </td>
            <td> Sucursal: <?php echo $busqueda["sucursal"];?> </td>
            <td> Descripcion: <?php echo $busqueda["descripcion"];?> </td>
            <td> Cantidad: <?php echo $busqueda["cantidad"];?> </td>
            <td> Precio: <?php echo $busqueda["precio"];?> </td>
        </tr>
        <hr>

      }
      <?php 
      while ($busqueda = mysqli_fetch_array($sql_codigo)){ ?>
    
        <tr>
            <td> Producto: <?php echo $busqueda["producto_id"];?> </td>
            <td> Codigo: <?php echo $busqueda["codigo_producto"];?> </td>
            <td> Cantidad: <?php echo $busqueda["cantidad"];?> </td>
            <td> Precio: <?php echo $busqueda["precio"];?> </td>
            
        </tr>
        
        


      }





    }
 
  </div>

@stop