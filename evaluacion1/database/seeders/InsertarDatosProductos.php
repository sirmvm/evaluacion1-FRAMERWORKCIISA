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
                'nombre_producto' => 'Pasta de Dientes',
                'descripción'=> 'Pasta en tubo para laverse los dientes',
                'categoria_id'=> 1,
            ]
            ));

        $this->command->info('Datos Agrregados Correctamente');
    }
}
