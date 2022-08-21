
@extends('layouts.master')
@section('content')

{{--@section('titulo')
Página agregar libro
@stop

@section('body')--}}

<br>
<form method='POST' action="/enviarExistencia" >
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Elija un Producto</label>
    <select name="producto" id="producto" class="form-select" aria-label="Default select example">
        <option selected>Seleccionar un Producto</option>
        @foreach($productos as $producto)
          <option value="{{$producto->id}}">{{$producto->nombre}}</option>
        @endforeach
    </select>
    <br><br>
    <label for="exampleFormControlInput1" class="form-label">Elija una Sucursal</label>
    <select name="sucursal" id="sucursal" class="form-select" aria-label="Default select example">
        <option selected>Seleccionar una sucursal</option>
        @foreach($sucursales as $sucursal)
          <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
        @endforeach
    </select>
    <br><br>
    <label for="exampleFormControlInput1" class="form-label">Precio</label>
    <input type="number" name="precio" id="precio">
      <br><br>
    <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
    <input type="number" name="cantidad" id="cantidad">
      <br><br>
    <input type="submit">
</div>
<br>
</form>
<a href="{{route('main_index')}}"> Volver</a>

{{--@stop--}}
@stop