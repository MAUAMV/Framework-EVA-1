
@extends('layouts.master')
{{--@section('body')--}}
@section('content')
<br>
Nombre ingresado: {{ $existencias->nombre}}
<br>


Sucursal ingresada: {{ $existencias->sucursal}}
<br>
Cantidad ingresada: {{ $existencias->cantidad}}
<br>
Precio ingresado: {{ $existencias->precio}}
<br>

<a href="{{route('main_index')}}"> Volver</a>
<br>

@stop

