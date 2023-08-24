@extends('Plantilla.plantilla')  

@section('titulo','index') 

@section('contenido') 

<h1><center>Tabla de huespeds (index)</center></h1>

<a class="btn btn-primary" style="float:right; margin-top:10px;" href= "{{route('Huesped.Hucrear')}}"><u>Crear</u></a>

<table class=" table table-bordered">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo_electronico</th>
        <th>Numero de Telefono</th>
        <th colspan="2" style="text-align: center">Acciones</th> 

    </thead>
    <tbody>
        @forelse($huespeds as $huespeds) 
        <tr>
        <td><a href= "{{route('Huesped.Hushow', ['id'=>$huespeds->id])}}" >{{$huespeds->id}}</a></td>  
        <td>{{$huespeds->nombre}}</td> 
        <td>{{$huespeds->apellido}}</td>
        <td>{{$huespeds->correo_electronico}}</td>
        <td>{{$huespeds->telefono}}</td>
        <td><a href= "{{route('Huesped.Hueditar', ['id'=>$huespeds->id])}}" >EDITAR</a></td>  
        
        <td>
        <form  method="post" action="{{route('Huespeds.Borrar',['id'=>$huespeds->id])}}">
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