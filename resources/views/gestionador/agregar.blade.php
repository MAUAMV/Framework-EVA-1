
@extends('layouts.master')
@section('content')

{{--@section('titulo')
Página agregar libro
@stop

@section('body')--}}

<br>
<form method='POST' action="/enviar" >
    <label for="exampleFormControlInput1" class="form-label">Nombre producto</label>
    <input type="text" name="nombre" id="nombre">

    <br><br>

    <label for="exampleFormControlInput1" class="form-label">Autor</label>
    <input type="text" name="autor" id="autor">

    <br><br>

    Categoria
    <select name="categoria" id="categoria" class="form-select" aria-label="Default select example">
        <option selected>Seleccionar opción</option>
        @foreach($categorias as $categoria)
          <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
        @endforeach
        
      </select>
      <br><br>
    </select>
    <br><br>
    <input type="radio" id="activo" name="estado" value=1>
   <label for="activo">activo</label><br>
   <input type="radio" id="css" name="estado" value=0>
   <label for="inactivo">inactivo</label><br>
      <br><br>
      </div>
      <br><br>



    <input type="submit">


<div class="mb-3">
</div>
<div class="mb-3">
</div>

<br>

</form>
<a href="{{route('main_index')}}"> Volver</a>

{{--@stop--}}
@stop