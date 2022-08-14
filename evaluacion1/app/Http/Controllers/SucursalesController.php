<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalesController extends Controller
{
    public function index(){
    $sucursales = Sucursal::get();
    
    return view('modulos.sucursales', [
        'sucursales' => $sucursales   
    ]);
    }

    public function create() {
        return view('modulos.sucursales');
    }

    public function store(Request $request){

        $this -> validate($request, [
             'nombre_sucursal' => 'required',
             'dirección' => 'required'

           
        ]);

        $sucursal = new Sucursal();
        $sucursal -> nombre_sucursal = $request -> nombre_sucursal;
        $sucursal -> dirección = $request -> dirección;
        $sucursal -> save();

        $sucursales = Sucursal::get();

        return view('modulos.sucursales', [
            'sucursales' => $sucursales  
        ]);

    }


}
