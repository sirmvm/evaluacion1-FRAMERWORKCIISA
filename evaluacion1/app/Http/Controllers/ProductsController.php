<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getById(){}
	public function getAll(){}
	public function create(){}
	public function delete(){}
	public function update(){}


	public function guardar(Request $request){
		return "Código producto: ". $request->input("codigo").  ",   Nombre: ". $request->input("nombre").  "   Categoria: ". $request->input("categoria").  "    Sucursal: ". $request->input("sucursal").  "    Descripción: ". $request->input("descripcion").  "  Cantidad: ". $request->input("cantidad"). "   Precio venta: ". $request->input("precio-venta");		
		
	}
}


