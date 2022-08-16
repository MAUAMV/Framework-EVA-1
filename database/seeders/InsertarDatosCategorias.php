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
        
        for($i=1;$i <= 15; $i++){
            DB::table('categorias')->insert(array(
                'nombre' => "Categoría n° {$i}",
                'descripcion' => "Descripción n° {$i}"
            ));
        }
    }
}
