@extends('Plantilla.plantilla')  

@section('titulo','edit') 

@section('contenido') 

<h1>Editar Reserva (EDIT)</h1>

@if ($errors->any())                                              
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('reservas.update',[$reservas->id])}}">
@method("PUT") 
@csrf 


<div>
fecha_entrada
<input type="text" name="fecha_entrada" id="fecha_entrada" placeholder="fecha de entrada" value="{{old('fecha_entrada',$reservas->fecha_entrada)}}">
</div>

<br>
<div>
fecha_salida
<input type="date" name="fecha_salida" id="fecha_salida" placeholder="fecha de salida" value="{{old('fecha_salida',$reservas->fecha_salida)}}">
</div>

<br>
<div>
habitacion_id
<input type="text"name="habitacion_id" id="habitacion_id" placeholder="id de habitacion" value="{{old('habitacion_id',$reservas->habitacion_id)}}">
</div>

<br>
<div>
huesped_id
<input type="text" name="huesped_id" id="huesped_id" placeholder="Id huesped" value="{{old('huesped_id',$reservas->huesped_id)}}">
</div>

<br>
<div>
numero de huespedes
<input type="text" name="numero_de_huespedes" id="numero_de_huespedes" placeholder="numero de huespedes" value="{{old('numero_de_huesped',$reservas->numero_de_huespedes)}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()