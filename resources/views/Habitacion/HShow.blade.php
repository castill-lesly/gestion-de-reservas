@extends('Plantilla.plantilla')  

@section('titulo','show') 

@section('contenido') 

<h1><center>Mostrar habitaciones Individuales (SHOW)</center></h1>
<div style="margin:10px;">
<h6><b>ID</b></h6>
<p>{{$habitacions->id}}</p>

<h6><b>nuemero</b></h6>
<p>{{$habitacions->numero}}</p>

<h6><b>tipo</b></h6>
<p>{{$habitacions->tipo}}</p>

<h6><b>precio</b></h6>
<p>{{$habitacions->precio}}</p>
</div>

@endsection()