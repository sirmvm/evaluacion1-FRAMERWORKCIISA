<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StocksController extends Controller
{
    public function index (){
        $stocks = Stock::get();

        dd($stocks);

        return view('stocks.productos',[
            'stocks' => $stocks
        ]);
    }

    public function create(){
        return view ('stocks.productos');
    }

    public function store(Request $request){

        $this->validate($request,[
            'codigo_producto' => 'requiered',
            'cantidad' => 'requiered',
            'precio' => 'requiered'
        ]);

        $stock = new Stock();
        $stock->codigo_producto = $request->codigo_producto;
        $stock->cantidad = $request->cantidad;
        $stock->precio = $request->precio;
        $stock->save();

        $stocks = Stock::get();

        return view('stocks.productos',[
            'stocks' => $stocks
        ]);
    }
}
