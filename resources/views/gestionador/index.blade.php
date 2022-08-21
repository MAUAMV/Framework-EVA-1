
@extends('layouts.master')
@section('content')
<h1> Gestionador de libros </h1>
<p>En esta página podrás elegir una opción para poder generar una acción</p>



<br>
<a href="{{route('gestionador_agregar')}}"> Agregar libro</a>
<br>
<a href="{{route('gestionador_agregarSucursal')}}"> Agregar sucursal</a>
<br>
<a href="{{route('gestionador_asignarProducto')}}"> Asignar producto</a>
<br>
<a href="{{route('gestionador_eliminar')}}"> Eliminar libro</a> 
<br>
<a href="{{route('main_index')}}"> Volver</a>
@stop