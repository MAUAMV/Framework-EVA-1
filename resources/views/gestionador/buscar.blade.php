
@extends('layouts.master')
@section('content')

{{--@section('titulo')
Página agregar libro
@stop

@section('body')--}}

<br>

<div class="mb-3">
    <form method='POST' action="/buscarProducto" >
    <label for="exampleFormControlInput1" class="form-label">Escriba palabra Buscada</label>
    <input type="text" name="busqueda" id="busqueda">
    <input type="submit">
    @foreach ($productos as $producto ) 
    <div class="card">
        <div class="card-body">
            <br>
            <label class="form-label">Nombre Producto: {{$producto->nombre}}</label>
            <br>
            <label class="form-label">Nombre Autor: {{$producto->autor}}</label>
            <br>
            <img src="{{$producto->image}}" class="card-imag-top" alt="...">
            <br>
            <br>
            <a href="/deleteProducto/{{ $producto->id }}" class = "btn btn-danger"> Borrar </a>
            <a href="/update/{{ $producto->id }}" class = "btn btn-warning"> Editar </a>  
        </div>
    </div>
    @endforeach
    </form>
</div>
<br>
<a href="{{route('main_index')}}"> Volver</a>

{{--@stop--}}
@stop