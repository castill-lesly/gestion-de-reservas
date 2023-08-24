<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 
use App\Models\Alumno ;
use App\Models\Habitacion;

class HabitacionController extends Controller
{
    public function index() // 
    {
        $Habitacions= Habitacion::all(); 
        return view('Habitacion.HIndex')->with('Habitacions',$Habitacions);
    }

    public function create() 
    {  
         return view('Habitacion.HCreate'); }

    public function store(Request $request)
    {
       $request->validate([
            'numero'=>'required|regex:/[0-9]/',
            'tipo'=>'required|regex:/[A-Z][a-z]+/i',
            'precio'=>'required|regex:/[0-9]/',
            
       ],[
            'numero.required' => 'Numero de habitacion no puede estar vacia',
            'numero.regex'=> 'numero de habitacion  es numerica',
           

            'tipo.required' => ' El tipo de habitación  no puede estar vacia',
            'tipo.regex'=> ' el tipo de habitación (individual, doble, suite, etc ',

           'precio.required' => 'El precio de la habitacion  no puede estar vacia',
            'precio.regex'=> 'El precio de la habitacion   es numerica',
           
        ]);
       
        $habitacions= new Habitacion(); 
        $habitacions->numero=$request->input('numero');
        $habitacions->tipo=$request->input('tipo');
        $habitacions->precio=$request->input('precio');
      
        $habitacions->save(); 

        return redirect()->route('Habitacion.index');
    }

    public function show ($id)
    {
        //         
        $habitacions = Habitacion::findOrfail($id); 
        return view('Habitacion.HShow' , compact('habitacions'));
    }


    public function edit( $id)
    {
        $Habitacions = Habitacion::findOrfail($id); 
        return view('Habitacion.HEdit')->with('Habitacions',$Habitacions);

    }
    

     
    public function update(Request $request, string $id)
    {
    $habitacions = habitacion::findOrfail($id); 
   
  
    
        $request->validate([
            'numero'=>'required|regex:/[0-9]/',
            'tipo'=>'required|regex:/[A-Z][a-z]+/i',
            'precio'=>'required|regex:/[0-9]/',
            
    
    ],[
        'numero.required' => 'Numero de habitacion no puede estar vacia',
        'numero.regex'=> 'numero de habitacion  es numerica',
       

        'tipo.required' => ' el tipo de habitación puede estar vacia',
        'tipo.regex'=> ' el tipo de habitación (individual, doble, suite, etc ',

       'precio.required' => 'El precio de la habitacion  no puede estar vacia',
        'precio.regex'=> 'El precio de la habitacion   es numerica',
       
    ]); 
    
        $habitacions-> numero=$request->input('numero');
        $habitacions-> tipo=$request->input('tipo');
        $habitacions-> precio=$request->input('precio');

        $habitacions->save(); 

        return redirect()->route('Habitacion.index');
       
    }

          public function destroy( $id)
    {
       Habitacion::destroy($id);

        return redirect()->route('Habitacion.index');
    }
}



