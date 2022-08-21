<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'id';

    //Foreign Key de productos
    public function categorias(){
        return $this->belongsTo('App\Models\Categoria','categoria_id');
    }

    public function existencias(){
        return $this->belongsTo('App\Models\Existencia','existencia_id');
    }

}
