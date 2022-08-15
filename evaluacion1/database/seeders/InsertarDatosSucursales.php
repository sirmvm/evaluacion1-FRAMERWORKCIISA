<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursals')->insert(array(
            [
                'nombre_sucursal' => "Buenos Vecinos",
                'comuna' => "Santiago",
                'direccion' => 'La montaña 4512'
            ],
            [
                'nombre_sucursal' => "Santiago",
                'comuna' => "Santiago",
                'direccion' => '10 de julio #12345'
            ],
            [
                'nombre_sucursal' => "Rancagua",
                'comuna' => "Rancagua",
                'direccion' => 'calle x #12345'
            ],
            [
                'nombre_sucursal' => "Serena",
                'comuna' => "Serena",
                'direccion' => 'calle y #12345'
            ]
            ));

        $this->command->info('Datos Agrregados Correctamente');
    }
}
