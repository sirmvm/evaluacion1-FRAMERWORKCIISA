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
                'dirección' => 'En la montaña 4512'
            ]
            ));

        $this->command->info('Datos Agrregados Correctamente');
    }
}
