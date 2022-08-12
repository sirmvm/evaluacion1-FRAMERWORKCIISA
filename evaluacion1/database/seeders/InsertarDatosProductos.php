<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [
                'codigo_producto' => '1115',
                'nombre_producto' => 'Pasta de Dientes',
                'descripción'=> 'Pasta en tubo para laverse los dientes',
                'precio'=> 456,
                'sucursal_id'=> 1,
                'categoria_id'=> 1,
                'stock_id'=> 2

            ]
            ));

        $this->command->info('Datos Agrregados Correctamente');
    }
}
