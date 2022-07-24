
@extends('layouts.master')
{{--@section('body')--}}
@section('content')
<br>
Nombre ingresado: {{ $request->input('nombre') }}
<br>
Código ingresado: {{ $request->input('codigo') }}
<br>
Categoría ingresada: {{ $request->post('categoria') }}
<br>
Sucursal ingresada: {{ $request->sucursal}}
<br>
Cantidad ingresada: {{ $request->input('cantidad') }}
<br>
Precio ingresado: {{ $request->input('precio') }}
<br>
Descripción ingresada: {{ $request->post('descripcion') }}
<br>

<a href="{{route('main_index')}}"> Volver</a>
<br>

@stop

