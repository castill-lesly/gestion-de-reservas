@extends('Plantilla.plantilla')  

@section('titulo','edit') 

@section('contenido') 

<h1>Editar huesped (Edit)</h1>

@if ($errors->any())                                 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('Huespeds.Hupdate',[$huespeds->id])}}">
@method("PUT") 
@csrf 

<div>
Nombre
<input type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre" value="{{old('nombre') ?? $huespeds->nombre}}">
</div>

<br>
<div>
Apellido
<input type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido" value="{{old('apellido') ?? $huespeds->apellido}}">
</div>

<br>
<div>
Correo
<input type="text" name="correo_electronico" id="correo_electronico" placeholder="Ingrese su Correo" value="{{old('correo_electronico') ?? $huespeds->correo_electronico}}">
</div>

<br>
<div>
telefono
<input type="text" name="telefono" id="telefono" placeholder="Ingrese su telefono" value="{{old('telefono') ?? $huespeds->telefono}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection() 