@extends('plantilla')
@section('title', 'Buscador')

@section('content')
<div class="content-wrapper">

    <section class="content-header">

    <h1>Gestor de categorías</h1>
    </section>
    <section class="content">
        <div class="box">
        <nav class="navbar navbar-dark float-right box-header">
                    <form class="form-inline" role="search" action="" method="get">
                        
                        <input type="text" name="keyword" class="form-control" type="search" placeholder="Busqueda" value="" aria-label="Search">

                        <!---<select name="sucursal" id="sucursal" class="name">
                            <option value="" disabled>Producto</option>
                            @if (!empty($sucursales))
                                @foreach($sucursales as $sucursal)
                                <option value="{{$sucursal -> id}}" class="value">{{$sucursal->nombre_sucursal}}</option>
                                @endforeach
                            @endif
                        </select>--->

                        <button class="btn btn-success" type="submit">Buscar</button> 
                    </form>
            </nav>
            <div class="box-body">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Código producto</th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Cantidad</th>
                            <th>Precio venta</th>
                            <th>Sucursal</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                <tbody>
                @if(!empty($stocks))
                    @foreach($stocks as $stock)
                    <tr>
                        <td>{{ $stock -> id}}</td>
                        <td>{{ $stock -> codigo_producto }}</td>
                        <td>{{ $stock -> productoName }}</td>
                        <td>{{ $stock -> categoriaName }}</td>
                        <td>{{ $stock -> cantidad }}</td>
                        <td>{{ $stock -> precio }}</td>
                        <td>{{ $stock -> sucursalName }}</td>
                        <td>{{ $stock -> descripcionName }}</td>
                    </tr>
                    @endforeach
                @endif
                </tbody>
                </table>
            </div>
        </div>
</div>
@stop