<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    public function index(){
    $sucursales = Sucursal::all();
    
    return view('modulos.sucursales', [
        'sucursales' => $sucursales   
    ]);
    }

    public function show(){
        $sucursals = Sucursal::get();

        return view('modulos.sucursales',[
            'sucursales' => $sucursales
        ]);
    }

    public function create() {
        return view('modulos.sucursales');
    }

    public function store(Request $request){

        $this -> validate($request, [
             'nombre_sucursal' => 'required',
             'comuna' => 'required',
             'direccion' => 'required'
        ]);

        $sucursal = new Sucursal();
        $sucursal -> nombre_sucursal = $request -> nombre_sucursal;
        $sucursal -> comuna = $request -> comuna;
        $sucursal -> direccion = $request -> direccion;
        $sucursal -> save();
        
        $sucursales = Sucursal::get();

        return view('modulos.sucursales', [
            'sucursales' => $sucursales  
        ]);
    }
}
