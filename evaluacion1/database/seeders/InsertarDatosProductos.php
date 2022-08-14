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
                'codigo_producto' => '0011',
                'nombre_producto' => 'Pasta de Dientes',
                'categoria' => 'Higiene',
                'sucursal' => 'Santiago',
                'descripcion' => 'Pasta de Dientes',
                'cantidad'=> '45',
                'precio'=> '990',
                'categoria_id'=> 1
            ],
            [
                'codigo_producto' => '0011',
                'nombre_producto' => 'Pasta magica',
                'categoria' => 'Higiene',
                'sucursal' => 'Santiago',
                'descripcion' => 'Pasta de magica',
                'cantidad'=> '85',
                'precio'=> '1990',
                'categoria_id'=> 2
            ]
            ));

        $this->command->info('Datos Agrregados Correctamente');
    }
}
