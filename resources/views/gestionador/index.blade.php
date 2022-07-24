
@extends('layouts.master')
@section('content')
<h1> Gestionador de libros </h1>

<a href="{{route('gestionador_agregar')}}"> Agregar libro</a>
<br>
<a href="{{route('gestionador_eliminar')}}"> Eliminar libro</a> 
<br>
<a href="{{route('main_index')}}"> Volver</a>
@stop