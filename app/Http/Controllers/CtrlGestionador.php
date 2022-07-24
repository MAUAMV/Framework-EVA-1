<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlGestionador extends Controller
{
    public function index(){
        return view('gestionador.index');
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
}
