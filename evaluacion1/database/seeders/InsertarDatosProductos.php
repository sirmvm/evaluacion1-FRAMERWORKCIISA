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
                'categoria_id'=> 1,
                'image'=> 'https://c8.alamy.com/compes/2hwrfe1/pasta-dental-colgate-2hwrfe1.jpg'
            ],
            [
                'nombre_producto' => 'Cloro',
                'descripcion' => 'Limpiador',
                'categoria_id'=> 2,
                'image'=>'https://image.shutterstock.com/image-vector/cleaning-disinfection-product-elimination-viruses-260nw-1718597395.jpg'
            ],
            [
                'nombre_producto' => 'Rueda',
                'descripcion' => 'Accesorio',
                'categoria_id'=> 3,
                'image'=>'https://image.shutterstock.com/image-photo/new-car-wheel-isolated-on-260nw-1682499250.jpg'
            ],
            [
                'nombre_producto' => 'Microfono',
                'descripcion' => 'Comunicaciones',
                'categoria_id'=> 3,
                'image'=>'https://image.shutterstock.com/image-photo/retro-style-microphone-isolated-on-260nw-1721445463.jpg'
            ],
            [
                'nombre_producto' => 'Zapato',
                'descripcion' => 'Vestimenta',
                'categoria_id'=> 2,
                'image'=>'https://media.revistagq.com/photos/5fd1e868dfba54732a24bbf0/master/w_2560,h_1800,c_limit/Blucher.jpg'
            ],
            [
                'nombre_producto' => 'Chaleco',
                'descripcion' => 'Vestimenta de invierno',
                'categoria_id'=> 1,
                'image'=>'https://image.shutterstock.com/image-vector/vest-design-blueblack-black-edging-260nw-754363573.jpg'
            ]
            ));

        $this->command->info('Datos Agregados Correctamente');
    }
}
