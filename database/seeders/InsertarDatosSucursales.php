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
        
            DB::table('sucursales')->insert(array(
                [
                'nombre' => 'Santiago',
                'direccion' => 'Agustinas 148'
                ],
                [
                'nombre' => 'Las condes',
                'direccion' => 'Rosario norte 557'
                ],

                [
                'nombre' => 'Providencia',
                'direccion' => 'Alberto Magno 147'
                ]


            ));
        
    }
}
