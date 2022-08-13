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
                'sucursale_id'=> 1,
                'producto_id' => 1
            ]
            ));

        $this->command->info('Datos Agrregados Correctamente');
    }
}
