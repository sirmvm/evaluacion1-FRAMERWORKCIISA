<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(
            [
                'nombre' => 'Higiene'
            ],
            [
                'nombre' => 'Tecnología'
            ],
            [
                'nombre' => 'Tiempo libre'
            ],
            [
                'nombre' => 'Automotriz'
            ],
            [
                'nombre' => 'Miscelaneo'
            ]
            ));

        $this->command->info('Datos Agrregados Correctamente');
    }
}
