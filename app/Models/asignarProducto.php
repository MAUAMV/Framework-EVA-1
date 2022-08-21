<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignarProducto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'id';
    

    
    public function productos(){
        return $this->hasMany('App\Models\Producto');
    }

    
     
}



