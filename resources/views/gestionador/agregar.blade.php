
@extends('layouts.master')
@section('content')

{{--@section('titulo')
Página agregar libro
@stop

@section('body')--}}

<br>
<form method='POST' action={{url('enviar')}} >
    <label for="exampleFormControlInput1" class="form-label">Nombre producto</label>
    <input type="text" name="nombre">

    <br><br>

    <label for="exampleFormControlInput1" class="form-label">Código de producto</label>
    <input type="text" name="codigo">

    <br><br>

    Categoria
    <select name="categoria" class="form-select" aria-label="Default select example">
        <option selected>Seleccionar opción</option>
        <option value="Ficción">Ficción</option>
        <option value="Histórico">Histórico</option>
        <option value="Novela">Novela</option>
        <option value="Thriller">Thriller</option>
      </select>
      <br><br>
      Sucursal en la que se encuentra
    <select name="sucursal"  class="form-select" aria-label="Default select example">
        <option selected>Seleccionar opción</option>
        <option value="Santiago">Santiago</option>
        <option value="Providencia">Providencia</option>
        <option value="Maipu">Maipú</option>
    </select>
    <br><br>
      <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
      <input type="number" name="cantidad">
      <br><br>
      <label for="exampleFormControlInput1" class="form-label">Precio</label>
      <input type="number" name="precio">
      <br><br>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descripción de libro</label>
        <br><textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" row="4" ></textarea>
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