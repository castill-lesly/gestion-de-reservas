@extends('Plantilla.plantilla')  

@section('titulo','index') 

@section('contenido') 

<h1><center>Tabla de habitacion(index)</center></h1>

<a class="btn btn-primary" style="float:right; margin-top:10px;" href= "{{route('Habitacion.crear')}}"><u>Crear</u></a>

<table class="table table-bordered" >
    <thead>  
        <th>Id</th>
        <th>Numero</th>
        <th>Tipo</th>
        <th>Precio</th>
        <th colspan="2" style="text-align: center">Acciones </th> 

    </thead>
    <tbody>
        @forelse($Habitacions as $Habitacions) 
        <tr>
        <td><a href= "{{route('Habitacion.show', ['id'=>$Habitacions->id])}}" >{{$Habitacions->id}}</a></td>  
        <td>{{$Habitacions->numero}}</td> 
        <td>{{$Habitacions->tipo}}</td>
        <td>{{$Habitacions->precio}}</td>
        <td><a href= "{{route('Habitacion.editar', ['id'=>$Habitacions->id])}}" >EDITAR</a></td>  
        
        <td>
        <form  method="post" action="{{route('Habitacion.borrar',[$Habitacions->id])}}">
        @method("DELETE")
        @csrf
         <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
         
        </tr>
        @empty 
        <tr>
            <td>No hay habitacion </td>
        </tr>
        @endforelse
        
    </tbody>
</table>
      
@endsection() 