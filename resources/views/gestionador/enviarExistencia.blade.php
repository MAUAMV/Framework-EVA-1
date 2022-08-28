
@extends('layouts.master')
{{--@section('body')--}}
@section('content')
<br>
Nombre ingresado: {{ $resultados[0]->productoName}}
<br>


Sucursal ingresada: {{ $resultados[0]->sucursalName}}
<br>
Cantidad ingresada: {{ $resultados[0]->cantidad}}
<br>
Precio ingresado: {{ $resultados[0]->precio}}
<br>

<a href="{{route('main_index')}}"> Volver</a>
<br>

@stop

