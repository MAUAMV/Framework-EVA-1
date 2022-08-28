<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        $productos = Producto::where('nombre', 'LIKE', '%'.$request->busqueda.'%')
        ->OrWhere('id', '=',$request->busqueda)
        ->get();
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

        $results= Existencia::join('productos', 'producto_id', '=', 'productos.id')->
                                    join('sucursales', 'sucursal_id', '=', 'sucursales.id')
                                    ->where('existencias.id','=',$existencia->id)
                                    ->select(
                                        'productos.nombre as productoName', 
                                        'sucursales.nombre as sucursalName',
                                        'existencias.precio',
                                        'existencias.cantidad'
                                        )
                                    ->get();
        
        //dd($results);
        return view('gestionador.enviarExistencia',[
            "resultados"=>$results
           
        ]);
        
        
        
    }


    public function asignarSucursal(){
        $asignarSucursal = asignarSucursal::get();
        return view('gestionador.asignarSucursal',[
            "asignarSucursal" => $asignarSucursal
        ]);
    }

    public function deleteProducto($id){
        $producto = Producto::find($id);
        $producto->delete();
        $productos = Producto::get();
        return view('gestionador.buscar',[
            "productos" => $productos
        ]);
    }

    public function update($id){
        $producto = Producto::find($id);
        $existencias = Existencia::where('producto_id',$id)->get();
        return view('gestionador.update',[
            "producto" => $producto,
            "existencias" => $existencias
        ]);
    }

    public function updateProducto(Request $request){
        $this->validate($request,[
            'nombre' => 'required',
            'autor' => 'required',
            'precio' => 'required',
        ]);
        Producto::where('id',$request->idProducto)
        ->update([
            "nombre" => $request->nombre,
            "autor" => $request->autor
            ]);
        Existencia::where('id',$request->idExistencia)
        ->update([
            "precio" => $request->precio
            ]);
        $productos = Producto::get();
        return view('gestionador.buscar',[
            "productos" => $productos
        ]);
    }

    public function enviar(Request $request){
        
        $this->validate($request,[
            'nombre' => 'required',
            'autor' => 'required',
            'categoria' => 'required',
            'image' => 'required',
            'estado' => 'required'
        ]);

        $image = $request->file('image');

        if($image){
            $imagen_path = time()."-".$image->getClientOriginalName();
            \Storage::disk('images')->put($imagen_path, \File::get($image));
        }

        $producto = new Producto();
        $producto -> nombre = $request -> nombre;
        $producto -> autor = $request -> autor;
        $producto -> image = $imagen_path;
        $producto -> estado =  $request -> estado;
        $producto -> categoria_id =  $request -> categoria;
        

        $producto-> save();

        $productos = Producto::get();
        return view('gestionador.listado',[
            'productos'=>$productos
        ]);
    }

    public function getImagen($filename){
        $file = \Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }
}
