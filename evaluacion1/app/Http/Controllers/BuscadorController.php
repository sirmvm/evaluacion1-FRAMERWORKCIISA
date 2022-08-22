<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Sucursal;
use App\Models\Categoria;
use App\Models\Stock;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuscadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $stocks = DB::table('stocks');
        $productos = DB::table('productos')->get();
        $sucursales = DB::table('sucursals')->get();

        if($request->keyword != null){
            $stocks = $stocks->orWhere('stocks.codigo_producto','like','%'.$request->keyword.'%');
            $stocks = $stocks->orWhere('productos.nombre_producto','like','%'.$request->keyword.'%');
            $stocks = $stocks->orWhere('sucursals.nombre_sucursal','like','%'.$request->keyword.'%');
        }

        $stocks = $stocks
                    ->select('stocks.*','productos.nombre_producto as productoName'
                                        ,'sucursals.nombre_sucursal as sucursalName'
                                        ,'productos.categoria_id as categoriaName'
                                        ,'productos.descripcion as descripcionName')
                    ->leftJoin('productos','productos.id','stocks.producto_id')
                    ->leftJoin('sucursals','sucursals.id','stocks.sucursal_id')    
                    ->get();
        //dd($stocks);
        return view('modulos.buscador',[
            'stocks' => $stocks,
            'productos' => $productos,
            'sucursales' => $sucursales
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
