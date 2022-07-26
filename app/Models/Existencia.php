<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Existencia extends Model
{
  
    use HasFactory;
    protected $table = 'existencias';
    protected $primaryKey = 'id';


    
    public function productos(){
        return $this->hasMany('App\Models\Producto');
    }
}
