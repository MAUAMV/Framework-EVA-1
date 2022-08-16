<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        for($i=1;$i <= 5; $i++){
            DB::table('sucursales')->insert(array(
                'nombre' => "Sucursal n° {$i}",
                'direccion' => "Calle n° {$i} Chile"
            ));
        }
    }
}
