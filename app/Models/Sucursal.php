<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $table = 'sucursales';
    protected $primaryKey = 'id';

    
    public function existencias(){
        return $this->hasMany('App\Models\Existencia');
    }
}