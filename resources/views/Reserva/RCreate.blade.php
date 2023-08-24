@extends('Plantilla.plantilla')  

@section('titulo','create') 

@section('contenido') 

<h1>Creacion de Reserva (CREATE)</h1>

@if ($errors->any())                                              
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('reservas.store')}}">
@csrf 

<div>
fecha_entrada
<input type="date" name="fecha_entrada" id="fecha_entrada" placeholder="fecha de entrada" value="{{old('fecha_entrada')}}">
</div>

<br>
<div>
fecha_salida
<input type="date" name="fecha_salida" id="fecha_salida" placeholder="fecha de salida" value="{{old('fecha_salida')}}">
</div>

<br>
<div>
habitacion_id
<input type="text" name="habitacion_id" id="habitacion_id" placeholder="id de habitacion" value="{{old('habitacion_id')}}">
</div>

<br>
<div>
huesped_id
<input type="text" name="huesped_id" id="huesped_id" placeholder="Id huesped" value="{{old('huesped_id')}}">
</div>

<br>
<div>
numero de huespedes
<input type="text" name="numero_de_huespedes" id="numero_de_huespedes" placeholder="numero de huespedes" value="{{old('numero_de_huesped')}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()