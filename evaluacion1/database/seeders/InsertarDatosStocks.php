<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosStocks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert(array(
            [
                'codigo_producto' => 1,
                'cantidad' => 5,
                'precio' => 600,
                'sucursal_id'=> 1,
                'producto_id' => 1
            ],[
                'codigo_producto' => 3,
                'cantidad' => 90,
                'precio' => 1600,
                'sucursal_id'=> 2,
                'producto_id' => 3
            ],[
                'codigo_producto' => 7,
                'cantidad' => 190,
                'precio' => 31600,
                'sucursal_id'=> 3,
                'producto_id' => 2
            ]
            ));

        $this->command->info('Datos Agrregados Correctamente');
    }
}
