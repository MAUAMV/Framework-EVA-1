<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignarSucursal extends Model
{
    use HasFactory;
    protected $table = 'sucursales';
    protected $primaryKey = 'id';

    public function productos(){
        return $this->hasMany('App\Models\Producto');
    }

    
     
}

