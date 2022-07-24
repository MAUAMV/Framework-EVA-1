gestionador/agregar.blade


<form method='POST' action={{url('enviar')}} >
    <input type="text" name="dato">
    <input type="submit">
</form>

<a href="{{route('main_index')}}"> Volver</a>