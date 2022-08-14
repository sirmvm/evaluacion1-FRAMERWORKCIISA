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
        DB::table('sucursales')->insert(array(
            [
                'nombre_sucursal' => "Buenos Vecinos",
                'dirección' => 'La montaña 4512'
            ],
            [
                'nombre_sucursal' => "Santiago",
                'dirección' => '10 de julio #12345'
            ]
            ));

        $this->command->info('Datos Agrregados Correctamente');
    }
}
