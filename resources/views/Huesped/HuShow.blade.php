@extends('Plantilla.plantilla')  

@section('titulo','show') 

@section('contenido') 

<h1><center>Mostrar huesped Individuales (SHOW)</center></h1>
<div style="margin:10px;">
<h6><b>ID</b></h6>
<p>{{$huespeds->id}}</p>

<h6><b>Nombre</b></h6>
<p>{{$huespeds->nombre}}</p>

<h6><b>Apellido</b></h6>
<p>{{$huespeds->apellido}}</p>

<h6><b>Correo</b></h6>
<p>{{$huespeds->correo_electronico}}</p>

<h6><b>Telefono</b></h6>
<p>{{$huespeds->telefono}}</p>
</div>

@endsection()