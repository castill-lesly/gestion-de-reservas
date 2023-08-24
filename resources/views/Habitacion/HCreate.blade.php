@extends('Plantilla.plantilla')  

@section('titulo','create') 

@section('contenido') 

<h1>Habitacion de Reserva (CREATE)</h1>

@if ($errors->any())                                              
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('Habitacion.store')}}">
@csrf 

<div>
numero
<input type="number" name="numero" id="numero" placeholder="numero de habitacion " value="{{old('numero')}}">
</div>

<br>
<div>
tipo
<input type="text" name="tipo" id="tipo" placeholder=" tipo de habitacion " value="{{old('tipo')}}">
</div>

<br>
<div>
precio
<input type="number" name="precio" id="precio" placeholder="precio" value="{{old('precio')}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()