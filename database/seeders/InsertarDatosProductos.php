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
                'image' => 'https://i0.wp.com/feriachilenadellibro.cl/wp-content/uploads/2022/04/9789878000138.jpg?w=200&ssl=1',
                'categoria_id' => 3,
                'estado' => 1
                

                ],

                [
                'nombre' => 'El señor de los anillos',
                'autor' => 'J.R.R. Tolkien',
                'image' => 'https://assets.lectulandia.co/b/J.%20R.%20R.%20Tolkien/El%20Senor%20de%20los%20Anillos%20(2990)/big.jpg ',
                'categoria_id' => 1,
                'estado' => 1
                
               
    
                    ],

                    [
                    'nombre' => 'El resplandor',
                    'autor' => 'Stephen king',
                    'image' => 'https://images.cdn3.buscalibre.com/fit-in/360x360/7c/c2/7cc2d89ff2df8d15fe52b511d8197a3f.jpg',
                    'categoria_id' => 2,
                    'estado' => 1
                    
        
                        ]



            ));
        
    }

}
