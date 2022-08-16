<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Categoria;

class CtrlGestionador extends Controller
{
    public function index(){
        $productos = Producto::get();

        dd($productos);
        //return view('gestionador.index');
    }

    public function agregar(){
        return view('gestionador.agregar');
    }

    public function eliminar(){  
        return view('gestionador.eliminar');

    }

    public function enviar(Request $request){
        
        return view('gestionador.enviar')->with('request',$request);
    }


    public function remover(Request $request){
        
        return view('gestionador.remover')->with('request',$request);
    }
}
