
@extends('layouts.master')
@section('content')

{{--@section('titulo')
Página agregar libro
@stop

@section('body')--}}

<br>
<form method='POST' action="/enviar" >
    <label for="exampleFormControlInput1" class="form-label">Nombre sucursal</label>
    <input type="text" name="nombre" id="nombre">

    <br><br>

    <label for="exampleFormControlInput1" class="form-label">Dirección</label>
    <input type="text" name="direccion" id="direccion">

    <br><br>

      </div>
      <br><br>



    <input type="submit">


<br>

</form>
<a href="{{route('main_index')}}"> Volver</a>

{{--@stop--}}
@stop