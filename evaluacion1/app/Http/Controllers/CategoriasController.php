<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index(){
    $categorias = Categoria::all();
    
    return view('modulos.categorias', [
        'categorias' => $categorias  
    ]);
    }

    public function create() {
        return view('modulos.categorias');
    }

    public function show(){
        $categorias = Categoria::get();

        return view('modulos.categorias',[
            'categorias' => $categorias
        ]);
    }


    public function store(Request $request){

        $this -> validate($request, [
             'nombre' => 'required'
        ]);

        $categoria = new Categoria();
        $categoria -> nombre = $request -> nombre;
        $categoria -> save();

        $categorias = Categoria::get();

        return view('modulos.categorias', [
            'categorias' => $categorias  
        ]);

    }


}
