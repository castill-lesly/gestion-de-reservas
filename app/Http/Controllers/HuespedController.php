<?php

namespace App\Http\Controllers;

use App\Models\Huesped;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HuespedController extends Controller
{
    public function index() // 
    {
        $huespeds= Huesped::all(); 
        return view('Huesped.HuIndex')->with('huespeds',$huespeds);
    }

    public function create() 
    {  
         return view('Huesped.HuCreate'); }

    public function store(Request $request)
    {
       $request->validate([
            'nombre'=>'required|regex:/[A-Z][a-z]+/i', 
            'apellido'=>'required|regex:/[A-Z][a-z]+/i',
            'correo_electronico'=>'required|unique:huespeds|email', 
            'telefono'=>'required|regex:/[0-9]/'
           
       ],[
            'nombre.required' => 'El nombre no puede estar vacío',
            'nombre.regex'=> 'El nombre tiene caracteres no permitidos',
           

            'apellido.required' => 'El apellido no puede estar vacío',
            'apellido.regex'=> 'El apellido tiene caracteres no permitidos',
          

            'correo_electronico.required'=>'El correo electronico es obligatorio',
            'correo_electronico.email'=>'El correo electronico es incorrecto' ,
            'correo_electronico.unique'=>'El correo electronico ingresado ya existe',

            'telefono.required' => 'El número de telefono es obligatorio',
            'telefono.regex'=>'El número de telefono es numerico',
            

        ]);
       
        $huespeds= new huesped(); 
        $huespeds->nombre=$request->input('nombre');
        $huespeds->apellido=$request->input('apellido');
        $huespeds->correo_electronico=$request->input('correo_electronico');
        $huespeds->telefono=$request->input('telefono');

        $huespeds->save(); 

        return redirect()->route('Huespeds.Huindex');
    }

    public function show ($id)
    {
        //         
        $huespeds = huesped::findOrfail($id); 
        return view('Huesped.HuShow' , compact('huespeds'));
    }


    public function edit(string $id)
    {
        $huespeds = huesped::findOrfail($id); 
        return view('huesped.HuEdit')->with('huespeds',$huespeds);
    }

   
    public function update(Request $request, string $id)
    {

        $huespeds = huesped::findOrfail($id); 

        $request->validate([
            'nombre'=>'required|regex:/[A-Z][a-z]+/i', 
            'apellido'=>'required|regex:/[A-Z][a-z]+/i',
            'correo_electronico'=>['required',
                 'email',Rule::unique('huespeds')->ignore($huespeds->id)],
            'telefono'=>'required|regex:/[0-9]/',
          
        ]); 
        
       
        $huespeds->nombre=$request->input('nombre');
        $huespeds->apellido=$request->input('apellido');
        $huespeds->correo_electronico=$request->input('correo_electronico');
        $huespeds->telefono=$request->input('telefono');

        $huespeds->save(); 

        return redirect()->route('Huesped.Huindex');
       
    }

    public function destroy( $id)
    {
       Huesped::destroy($id);

        return redirect()->route('Huesped.Huindex');
    }
}
