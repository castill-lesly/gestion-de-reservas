@extends('Plantilla.plantilla')  

@section('titulo','show') 

@section('contenido') 

<h1><center>Mostrar reservas Individuales (SHOW)</center></h1>
<div style="margin:10px;">
    
<h6><b>ID</b></h6>
<p>{{$reservas->id}}</p>

<h6><b>fecha_entrada</b></h6>
<p>{{$reservas->fecha_entrada}}</p>

<h6><b>fecha_salida</b></h6>
<p>{{$reservas->fecha_salida}}</p>

<h6><b>habitacion_id</b></h6>
<p>{{$reservas->habitacion_id}}</p>

<h6><b>huesped_id</b></h6>
<p>{{$reservas->huesped_id}}</p>

<h6><b>numero_de_huespedes</b></h6>
<p>{{$reservas->numero_de_huespedes}}</p>
</div>
@endsection()