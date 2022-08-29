<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Sucursal;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
            'categoria_id' => 'required',
            'image'=> 'required'
        ]);

        $imagen = $request->file('imagen');
        if ($imagen){
            $imagen_path = time()."-".$imagen->getClientOriginalName();
            \Storage::disk('images')->put($imagen_path, \File::get($imagen));
        }

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
    public function getImagen($filename){
        $file = \Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }

    
    public function delete ($id){
        $productos = Producto::where('id',$id)->get();
        $categoria_id = $productos[00]->categoria_id;
       // dd($productos);

     if(\Storage::disk('images')->has($productos[0]->image)){
          \Storage::disk('images')->delete($productos[0]->image);
       }

      $productoEliminar = Producto::find($id);
      $productoEliminar->delete();
      
     
      $categorias = Categoria::where('id', $categoria_id)->get();

      $productos = Producto::where('categoria_id', $categoria_id)->get();
      

    /* return view('modulos.productos',[
       'categorias' => $categorias,
        'productos' => $productos
     ]);*/


    }

    public function update($id){
        $productos=Producto::where('id',$id)->get();
        //dd($productos);
        $categorias = Categoria::get();

        return view('modulos.edit',[
            'categorias' => $categorias,
            'productos' => $productos

        ]);

    }

    public function updateSave(Request $request){
        $this->validate($request,[
            'nombre_producto' =>'required',
            'descipcion' =>'required'
        ]);

        Producto::where('id',$request->id)
        ->update([
            'nombre_producto' =>$request->nombre_producto,
            'categoria_id' => $request->$request->input('categoria'),
            'descripcion' =>$request->descripcion
        ]);

        $categotias = Categoria::get();


        return view('modulos.productos',[
            'categorias' => $categorias,
            

        ]);
    }
}

