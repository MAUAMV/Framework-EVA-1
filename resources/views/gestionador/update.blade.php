
@extends('layouts.master')
@section('content')

{{--@section('titulo')
Página agregar libro
@stop

@section('body')--}}

<div class="d-flex justify-content-center">
    <div class="card" style="width: 50rem;">
        <form method='POST' action="/updateProducto" >
        <input type="hidden" name="idProducto" value="{{$producto->id}}"/>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <label for="exampleInputEmail1">Nombre producto</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder = "{{$producto->nombre}}" value="{{$producto->nombre}}">
            </li>
            <li class="list-group-item">
                <label for="exampleInputEmail1">Autor</label>
                <input type="text" class="form-control" name="autor" id="autor" placeholder = "{{$producto->autor}}" value="{{$producto->autor}}"">
            </li>
            <li class="list-group-item">
                @foreach ($existencias as $existencia ) 
                    <input type="hidden" name="idExistencia" value="{{$existencia->id}}"/>
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="number" class="form-control" name="precio" id="precio" placeholder = {{$existencia->precio}} value="{{$existencia->precio}}">
                @endforeach
            </li>
            <input type="submit">
        </ul>
    </div>
    </form>
</div>
{{--@stop--}}
@stop