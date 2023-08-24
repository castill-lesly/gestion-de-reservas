@extends('Plantilla.plantilla')  

@section('titulo','index') 

@section('contenido') 

<h1><center>Tabla de reserva (index)</center></h1>

<a class="btn btn-primary" style="float:right; margin-top:10px;" href= "{{route('reservas.crear')}}"><u>Crear</u></a>

<table class="table  table-bordered" >
    <thead>
        <th>Id</th>
        <th>Fecha_entrada</th>
        <th>Fecha_salida</th>
        <th>Habitacion_id</th>
        <th>Huesped_id</th>
        <th>Numero_de_huespedes</th>
        <th th colspan="2" style="text-align: center">Acciones</th> 

    </thead>
    <tbody>
        @forelse($reservas as $reserva) 
        <tr>
        <td><a href= "{{route('reservas.show', ['id'=>$reserva->id])}}" >{{$reserva->id}}</a></td>  
        <td>{{$reserva->fecha_entrada}}</td> 
        <td>{{$reserva->fecha_salida}}</td>
        <td>{{$reserva->habitacion_id}}</td>
        <td>{{$reserva->huesped_id}}</td>
        <td>{{$reserva->numero_de_huespedes}}</td>
        <td><a href= "{{route('reservas.editar', ['id'=>$reserva->id])}}" >EDITAR</a></td>  
        
        <td>
        <form  method="post" action="{{route('reservas.borrar',[$reserva->id])}}">
        @method("DELETE")
        @csrf
         <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
         
        </tr>
        @empty 
        <tr>
            <td>No hay reserva</td>
        </tr>
        @endforelse 

    </tbody>
</table>

@endsection() 