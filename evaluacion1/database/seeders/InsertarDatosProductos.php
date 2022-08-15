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
                'descripcion' => 'Pasta de Dientes',
                'categoria_id'=> 1
            ],
            [
                'nombre_producto' => 'Cloro',
                'descripcion' => 'Limpiador',
                'categoria_id'=> 2
            ],
            [
                'nombre_producto' => 'Rueda',
                'descripcion' => 'Accesorio',
                'categoria_id'=> 3
            ],
            [
                'nombre_producto' => 'Microfono',
                'descripcion' => 'Comunicaciones',
                'categoria_id'=> 3
            ],
            [
                'nombre_producto' => 'Zapato',
                'descripcion' => 'Vestimenta',
                'categoria_id'=> 2
            ],
            [
                'nombre_producto' => 'Chaleco',
                'descripcion' => 'Vestimenta de invierno',
                'categoria_id'=> 1
            ]
            ));

        $this->command->info('Datos Agrregados Correctamente');
    }
}
