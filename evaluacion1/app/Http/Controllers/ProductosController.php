<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Sucursal;
use App\Models\Stock;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $productos = Producto::all();
        $categorias = Categoria::all();

        return view('modulos.productos',[
            'categorias' => $categorias,
            'productos' => $productos
        ]);
    }
    
    public function show(){
        $productos = Producto::get();
        $categorias = Categoria::get();

        return view('modulos.productos',[
            'categorias' => $categorias,
            'productos' => $productos
        ]);
    }

    public function create() {
        $sucursales = Sucursal::get();
        $categorias = Categoria::get();

        return view('modulos.productos',[
            'sucursales' => $sucursales,
            'categorias' => $categorias
        ]);

    }

    public function store(Request $request){

        $this->validate($request,[
            'nombre_producto' => 'required',
            'descripcion' => 'required',
            'categoria_id' => 'required'
        ]);

        $producto = new Producto();
        $producto -> nombre_producto = $request->nombre_producto;
        $producto -> descripcion = $request->descripcion;
        $producto -> categoria_id = $request->categoria_id;
        $producto -> save();
        
        $categorias = Categoria::get();
        $productos = Producto::get();

        return view('modulos.productos',[
            'categorias' => $categorias,
            'productos' => $productos
        ]);
    }
}

