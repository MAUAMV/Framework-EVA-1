
@extends('layouts.master')
@section('content')

{{--@section('titulo')
Página agregar libro
@stop

@section('body')--}}


<div class="d-flex justify-content-center">
    <div class="card" style="width: 50rem;">
        <form method='POST' action="/enviar" enctype="multipart/form-data" >
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <label for="exampleInputEmail1">Nombre producto</label>
                <input type="text" class="form-control"  name="nombre" id="nombre" placeholder="Nombre del Libro">
            </li>
            <li class="list-group-item">
                <label for="exampleInputEmail1">Autor</label>
                <input type="text" name="autor" id="autor" class="form-control" placeholder="Autor">
            </li>
            <li class="list-group-item">
              <label for="inputAddress">Categoria</label>
              <select name="categoria" id="categoria" class="form-select" aria-label="Default select example">
                <option selected>Seleccionar Categoria</option>
                @foreach($categorias as $categoria)
                  <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
              </select>
            </li>

            <li class="list-group-item">
              <label for="image" class="form-label">Imagen</label>
              <input type="file" class="form-control" name="image" id="image" accept=".png, .jpg, .jpeg">
            </li>

            <li class="list-group-item">
              <legend class="col-form-label col-sm-2 pt-0">Estado</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="estado" id="activo" value="1" checked>
                  <label class="form-check-label" for="gridRadios1">
                    activo
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="estado" id="css" value="0">
                  <label class="form-check-label" for="gridRadios3">
                    inactivo
                  </label>
                </div>
              </div>
            </li>
            <input type="submit">
        </ul>
    </div>
    </form>
</div>

<a href="{{route('main_index')}}"> Volver</a>

{{--@stop--}}
@stop