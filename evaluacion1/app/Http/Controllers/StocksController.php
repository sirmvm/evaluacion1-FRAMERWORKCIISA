<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Sucursal;
use App\Models\Categoria;
use App\Models\Stock;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    public function index (Request $request){
        $productos = Producto::all();
        $sucursales = Sucursal::all();
        $categorias = Categoria::all();
        $stocks = Stock::all();
        

       return view('modulos.stocks',[
            'stocks' => $stocks,
            'categorias' => $categorias,
            'sucursales' => $sucursales,
            'productos' => $productos

        ]);
    }

    public function show(){
        $productos = Producto::get();
        $sucursales = Sucursal::get();
        $categorias = Categoria::get();
        $stocks = Stock::get();

        return view('modulos.stocks',[
            'stocks' => $stocks,
            'categorias' => $categorias,
            'sucursales' => $sucursales,
            'productos' => $productos
        ]);
    }

    public function create() {
        $sucursales = Sucursal::get();
        $productos = Producto::get();
        $categorias = Categoria::get();

        return view ('modulos.stocks',[
            'sucursales' => $sucursales,
            'productos' => $productos,
            'categorias' => $categorias
        ]);

    }

    public function store(Request $request){

        $this->validate($request,[
            'codigo_producto' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'sucursal_id' => 'required',
            'producto_id' => 'required'
        ]);

        $stock = new Stock();
        $stock->codigo_producto = $request->codigo_producto;
        $stock->cantidad = $request->cantidad;
        $stock->precio = $request->precio;
        $stock->sucursal_id = $request->sucursal_id;
        $stock->producto_id = $request->producto_id;
        $stock->save();

        $productos = Producto::get();
        $sucursales = Sucursal::get();
        $stocks = Stock::get();

        return view('modulos.stocks',[
            'stocks' => $stocks,
            'productos' => $productos,
            'sucursales' => $sucursales
        ]);
    }
}
