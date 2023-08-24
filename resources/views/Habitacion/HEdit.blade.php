@extends('Plantilla.plantilla')
@section('titulo','Editar')
@section('contenido') 

<h1>Editar Reserva (Edit)</h1>

@if ($errors->any())                                 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('Habitacion.update',['id'=>$Habitacions->id])}}">
@method("PUT") 
@csrf 

<div>
Numero
<input type="number" name="numero" id="numero" placeholder=" numero de habitacion " value="{{old('numero') ?? $Habitacions->numero}}">
</div>

<br>
<div>
tipo
<input type="text" name="tipo" id="tipo" placeholder="tipo de habitacion" value="{{old('tipo') ?? $Habitacions->tipo}}">
</div>

<br>
<div>
numero
<input type="number" name="precio" id="precio" placeholder=" precio" value="{{old('precio') ?? $Habitacions->precio}}">
</div>



<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection() 