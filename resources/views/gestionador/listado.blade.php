
@extends('layouts.master')
@section('content')

{{--@section('titulo')
Página agregar libro
@stop

@section('body')--}}
<h2>Listado</h2>
<div class="d-flex justify-content-center">
  
  @foreach ($productos as $producto )
  <div class="card">
    <div class="card-header">
      {{$producto->nombre}}
    </div>
    <div class="card-body">
      <h5 class="card-title">Escrito por {{$producto->autor}}</h5>
      <p class="card-text">Categoria ID: {{$producto->categoria_id}}</p>
      <p class="card-text">Estado: {{$producto->estado}}</p>
      <p class="card-text text muted">{{FormatTime::LongTimeFilterCreated($producto->created_at)}}</p>
      <p class="card-text text muted">{{FormatTime::LongTimeFilterUpdated($producto->updated_at)}}</p>

    </div>
  </div>
  @endforeach
</div>
<div class="d-flex justify-content-center">
  <a href="{{route('main_index')}}" class="btn btn-primary">Volver</a>
</div>
{{--@stop--}}
@stop