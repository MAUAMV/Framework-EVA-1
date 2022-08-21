
@extends('layouts.master')
@section('content')

{{--@section('titulo')
Página agregar libro
@stop

@section('body')--}}

<br>
<h2>Listado</h2>
<br>
@foreach ($productos as $producto )
    

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$producto->name}}</h5>
      <h5 class="card-title">{{$producto->autor}}</h5>
      <h5 class="card-title">{{$producto->categoria}}</h5>
      <h5 class="card-title">{{$producto->estado}}</h5>
      <a href="#" class="btn btn-primary">Productos</a>
    </div>
  </div>
  @endforeach

<a href="{{route('main_index')}}"> Volver</a>

{{--@stop--}}
@stop