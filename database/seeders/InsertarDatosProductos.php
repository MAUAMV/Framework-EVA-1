<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'nombre' => 'Harry Potter y el caliz de fuego',
                'autor' => 'J.K Rowling',
                'categoria_id' => 3,
                'estado' => 1

                ],

                [
                'nombre' => 'El señor de los anillos',
                'autor' => 'J.R.R. Tolkien',
                'categoria_id' => 1,
                'estado' => 1
    
                    ],

                    [
                    'nombre' => 'El resplandor',
                    'autor' => 'Stephen king',
                    'categoria_id' => 2,
                    'estado' => 1
        
                        ]






            ));
        
    }

}
