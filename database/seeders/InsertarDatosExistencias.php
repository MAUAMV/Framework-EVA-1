<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosExistencias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            DB::table('existencias')->insert(array(
                [
                    'precio' => 15000  ,
                    'cantidad' => 1,
                    'producto_id' => 1,
                    'sucursal_id' => 1

                ],

                [
                    'precio' => 10000  ,
                    'cantidad' => 2,
                    'producto_id' => 2,
                    'sucursal_id' => 2

                ],

                [
                    'precio' => 20000  ,
                    'cantidad' => 10,
                    'producto_id' => 3,
                    'sucursal_id' => 3

                ]

                
            ));
        
    }
}
