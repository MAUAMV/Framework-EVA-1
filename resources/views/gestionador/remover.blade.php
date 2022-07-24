
@extends('layouts.master')
@section('content')
<br>

Código removido: {{ $request->input('codigo') }}
<br>

<a href="{{route('main_index')}}"> Volver</a>
<br>

@stop
