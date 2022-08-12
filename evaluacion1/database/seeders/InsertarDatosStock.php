<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosStock extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock')->insert(array(
            [
                'cantidad' => 5,
                'sucursal_id'=> 1

            ]
            ));

        $this->command->info('Datos Agrregados Correctamente');
    }
}
