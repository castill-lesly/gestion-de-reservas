<?php

namespace App\Http\Controllers;

use App\Models\Huesped;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReservaController extends Controller
{
    public function index() // 
    {
        $reservas= Reserva::all(); 
        return view('Reserva.Rindex')->with('reservas',$reservas);
    }

    public function create() 
    {  
         return view('Reserva.RCreate'); }

    public function store(Request $request)
    {
       $request->validate([
            'fecha_entrada'=>'required|regex:/[0-9]/',
            'fecha_salida'=>'required|regex:/[0-9]/',
            'habitacion_id'=>'required|regex:/[0-9]/',
            'huesped_id'=>'required|regex:/[0-9]/',
            'numero_de_huespedes'=>'required|regex:/[0-9]/'
           
       ],[
            'fecha_entrada.required' => 'La fecha  entrada no puede estar vacia',
            'fecha_entrada.regex'=> 'la fecha entrada  es numerica',
           

            'fecha_salida.required' => 'La fecha  entrada no puede estar vacia',
            'fecha_salida.regex'=> 'la fecha  salida es numerica',

           'habitacion_id.required' => 'El habitación_id no puede estar vacia',
            'habitacion_id.regex'=> 'El habitación_id    es numerica',
           

            'huesped_id.required' => 'El huésped_id no puede estar vacia',
            'huesped_id.regex'=> 'El  huésped_id es numerica',

            'numero_de_huespedes.required' => 'El número_de_huéspedes no puede estar vacia',
            'numero_de_huespedes.regex'=> 'El número_de_huéspedes es numerica',
        ]);
       
        $reservas= new Reserva(); 
        $reservas->fecha_entrada=$request->input('fecha_entrada');
        $reservas->fecha_salida=$request->input('fecha_salida');
        $reservas->habitacion_id=$request->input('habitacion_id');
        $reservas->huesped_id=$request->input('huesped_id');
        $reservas->numero_de_huespedes=$request->input('numero_de_huespedes');


        $reservas->save(); 

        return redirect()->route('Reserva.Rindex');
    }

    public function show ($id)
    {
        //         
        $reservas = Reserva::findOrfail($id); 
        return view('Reserva.RShow' , compact('reservas'));
    }


    public function edit( $id)
    {
        $reservas = Reserva::findOrfail($id); 
        return view('Reserva.REdit')->with('reservas',$reservas);
    }

   
    public function update(Request $request,  $id)
    {

        $reservas = Reserva::findOrfail($id); 

        $request->validate([
            'fecha_entrada'=>'required|regex:/[0-9]/',
            'fecha_salida'=>'required|regex:/[0-9]/',
            'habitacion_id'=>'required|regex:/[0-9]/',
            'huesped_id'=>'required|regex:/[0-9]/',
            'numero_de_huespedes'=>'required|regex:/[0-9]/'
           
          
        ],[
            'fecha_entrada.required' => 'La fecha  entrada no puede estar vacia',
            'fecha_entrada.regex'=> 'la fecha entrada  es numerica',
           

            'fecha_salida.required' => 'La fecha  entrada no puede estar vacia',
            'fecha_salida.regex'=> 'la fecha  salida es numerica',

           'habitacion_id.required' => 'El habitación_id no puede estar vacia',
            'habitacion_id.regex'=> 'El habitación_id    es numerica',
           

            'huesped_id.required' => 'El huésped_id no puede estar vacia',
            'huesped_id.regex'=> 'El  huésped_id es numerica',

            'numero_de_huespedes.required' => 'El número_de_huéspedes no puede estar vacia',
            'numero_de_huespedes.regex'=> 'El número_de_huéspedes es numerica',
        ]); 
        
        $reservas->fecha_entrada=$request->input('fecha_entrada');
        $reservas->fecha_salida=$request->input('fecha_salida');
        $reservas->habitacion_id=$request->input('habitacion_id');
        $reservas->huesped_id=$request->input('huesped_id');
        $reservas->numero_de_huespedes=$request->input('numero_de_huespedes');

        $reservas->save(); 

        return redirect()->route('Reserva.Rindex');
       
    }

    public function destroy( $id)
    {
       Reserva::destroy($id);

        return redirect()->route('Reserva.Rindex');
    }
}
