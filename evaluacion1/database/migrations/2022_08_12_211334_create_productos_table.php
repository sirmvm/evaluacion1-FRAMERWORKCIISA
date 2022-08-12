<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo_producto');
            $table->string('nombre_producto', 20);        
            $table->string('descripción', 50);    
            $table->integer('precio');   
            $table->foreignId('sucursal_id')->references("id")->on('sucursales');
            $table->foreignId('categoria_id')->references("id")->on('categorias');
            $table->foreignId('stock_id')->references("id")->on('stock');                   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
