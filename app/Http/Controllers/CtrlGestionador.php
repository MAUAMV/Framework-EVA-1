<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Sucursal;
use App\Models\asignarProducto;

class CtrlGestionador extends Controller
{
    public function index(){
        $productos = Producto::get();

        //dd($productos);
        return view('gestionador.index');
    }

    public function listado(){
        $productos = Producto::get();

        //dd($productos);
        return view('gestionador.listado',[
            'productos'=>$productos
        ]);
        
    }

    public function agregar(){
        $categoria = Categoria::get();
        return view('gestionador.agregar',[
            "categorias" => $categoria
        ]);
    }
    public function agregarSucursal(){
        $sucursal = Sucursal::get();
        return view('gestionador.agregarSucursal',[
            "sucursales" => $sucursal
        ]);
    }

    public function asignarProducto(){
        $asignarProducto = asignarProducto::get();
        return view('gestionador.asignarProducto',[
            "asignarProducto" => $asignarProducto
        ]);
    }

    public function asignarSucursal(){
        $asignarSucursal = asignarSucursal::get();
        return view('gestionador.asignarSucursal',[
            "asignarSucursal" => $asignarSucursal
        ]);
    }


    public function eliminar(){  
        return view('gestionador.eliminar');

    }

    public function enviar(Request $request){
        
        $this->validate($request,[
            'nombre' => 'required',
            'autor' => 'required',
            'categoria' => 'required',
            'estado' => 'required'
        ]);
        $producto = new Producto();
        $producto -> nombre = $request -> nombre;
        $producto -> autor = $request -> autor;
        $producto -> estado =  $request -> estado;
        $producto -> categoria_id =  $request -> categoria;
        

        $producto-> save();

        $productos = Producto::get();

        //dd($productos);
    }


    public function remover(Request $request){
        
        return view('gestionador.remover')->with('request',$request);
    }
}
