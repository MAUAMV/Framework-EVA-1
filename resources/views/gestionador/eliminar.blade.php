@extends('layouts.master')
@section('content')


<br>
<form method='POST' action={{url('remover')}} >

    <label for="exampleFormControlInput1" class="form-label">Código de producto</label>
    <input type="text" name="codigo">

    <br><br>
    
    <input type="submit" value="Eliminar">


<div class="mb-3">
</div>
<div class="mb-3">
</div>

<br>

</form>
<a href="{{route('main_index')}}"> Volver</a>

@stop