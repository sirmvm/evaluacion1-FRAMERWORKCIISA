<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Sucursal;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
  

    public function index(){

        $sucursales = Sucursal::all();
        $categorias = Categoria::all();

        return view('modulos.productos', compact('sucursales', 'categorias'));
    }
}

