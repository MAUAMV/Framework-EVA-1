
@extends('layouts.master')
@section('content')

{{--@section('titulo')
Página agregar libro
@stop

@section('body')--}}

<br>
<h2>Listado</h2>
<br>
<div class="row">
@foreach ($productos as $producto )

    


    <form  >
      <label class="form-label">Nombre Producto: {{$producto->nombre}}</label>
        
      <br><br>
  
      <label class="form-label">Nombre Autor: {{$producto->autor}}</label>
  
      <br><br>

      <label class="form-label">Categoria ID: {{$producto->categoria_id}}</label>
  
      <br><br>

      <label class="form-label">Estado: {{$producto->estado}}</label>
  
      <br><br>

      
      <p class="card-text"></p>


    </form>
    @endforeach


<a href="{{route('main_index')}}"> Volver</a>

{{--@stop--}}
@stop