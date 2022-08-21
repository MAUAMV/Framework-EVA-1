
@extends('layouts.master')
@section('content')

{{--@section('titulo')
Página agregar libro
@stop

@section('body')--}}

<br>
<form method='POST' action="/enviar" >
    
    <br><br>
 
      Seleccionar sucursal 
      <br><br>
      <select name="sucursal" id="sucursal" class="form-select" aria-label="Default select example">
          <option selected>Seleccionar opción</option>
          @foreach($asignarSucursal as $asignarSucursal)
            <option value="{{$asignarSucursal->id}}">{{$asignarSucursal->nombre}}</option>
           
          @endforeach
          
        </select>
        <br><br>
      
      <br><br>
      <label for="exampleFormControlInput1" class="form-label">Precio</label>
    <input type="number" name="precio" id="precio">
      <br><br>

      <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
    <input type="number" name="cantidad" id="cantidad">
      <br><br>

      </div>
      <br><br>



    <input type="submit">


<br>

</form>
<a href="{{route('main_index')}}"> Volver</a>

{{--@stop--}}
@stop