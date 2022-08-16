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
        for($i=1;$i <= 10; $i++){
            DB::table('productos')->insert(array(
                'nombre' => "Producto n° {$i}",
                'autor' => "Autor n° {$i}",
                'categoria_id' => $i,
                'estado' => 1
            ));
        }
    }
}
