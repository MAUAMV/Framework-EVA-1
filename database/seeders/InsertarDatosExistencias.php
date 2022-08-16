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
        for($i=1;$i <= 10; $i++){
            DB::table('existencias')->insert(array(
                'producto_id' => "{$i}",
                'sucursal_id' => "{$i}",
                'precio' => $i *901,
                'cantidad' => $i *3
            ));
        }
    }
}
