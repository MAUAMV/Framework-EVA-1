<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                   'nombre' => 'Ficción',
                   'descripcion' => 'Es un género narrativo que se basa especialmente en elementos principalmente de fantasía como fenómenos sobrenaturales, magia o criaturas extraordinarias. '

                ],

                [    
                    'nombre' => 'Terror',
                    'descripcion' => 'Es un subgénero dentro de la novela, que es a su vez un subgénero de la épica o narrativa.Su principal característica y rasgo distintivo es el cultivo del miedo y sus emociones asociadas como principal objetivo literario. '
    
                ],

                [    
                    'nombre' => 'Fantasía',
                    'descripcion' => 'Cualquier relato en que participan fenómenos sobrenaturales y extraordinarios, como la magia o la intervención de criaturas inexistentes.'
        
                ]

            ));
        
    }


}
