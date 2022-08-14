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
            $table->string('nombre_producto', 100);        
            $table->string('categoria', 100);        
            $table->string('sucursal', 100);        
            $table->string('descripcion', 100);        
            $table->integer('cantidad', 100);        
            $table->integer('precio', 100);        
            $table->foreignId('categoria_id')->references("id")->on('categorias');              
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
