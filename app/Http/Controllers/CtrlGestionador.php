<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Sucursal;
use App\Models\Existencia;
use App\Models\asignarProducto;
use App\Models\asignarSucursal;

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

    public function buscar(){
        $productos = Producto::get();
        return view('gestionador.buscar',[
            "productos" => $productos
        ]);
    }

    public function buscarProducto(Request $request){
        $productos = Producto::where('nombre', 'LIKE', '%'.$request->busqueda.'%')->get();
        return view('gestionador.buscar',[
            "productos" => $productos
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

    public function agregarExistencia(){

        $productos = Producto::get();
        $sucursales = Sucursal::get();
        return view('gestionador.agregarExistencia',[
            "productos" => $productos,
            "sucursales" => $sucursales
        ]);
    }


    public function enviarExistencia(Request $request){
        $this->validate($request,[
            'producto' => 'required',
            'sucursal' => 'required',
            'precio' => 'required',
            'cantidad' => 'required'
        ]);
        $existencia = new Existencia();
        $existencia -> producto_id = $request -> producto;
        $existencia -> sucursal_id = $request -> sucursal;
        $existencia -> precio =  $request -> precio;
        $existencia -> cantidad =  $request -> cantidad;
        $existencia-> save();

        $existencias = Existencia::get();
        dd($existencias);
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
        return view('gestionador.listado',[
            'productos'=>$productos
        ]);
    }


    public function remover(Request $request){
        
        return view('gestionador.remover')->with('request',$request);
    }
}
