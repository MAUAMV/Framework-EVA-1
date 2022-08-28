
@extends('layouts.master')
@section('content')
<h1> Gestionador de libros </h1>
<p>En esta página podrás elegir una opción para poder generar una acción</p>



<br>
<a href="{{route('gestionador_agregar')}}"> Agregar libro</a>
<br>
<a href="{{route('gestionador_buscar')}}"> Buscar libro</a>

<br>
<a href="{{route('gestionador_agregarExistencia')}}"> Asignar Existencia</a>
<br>
<a href="{{route('gestionador_listado')}}"> Listado de productos</a>

<br>
<a href="{{route('main_index')}}"> Volver</a>
@stop