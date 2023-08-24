<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HuespedController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ReservaControllerController;
use App\Models\Reserva;





// INDEX HUESPED 
Route::get('/',[HuespedController::class,'index'])->name('Huesped.Huindex');

// SHOW HUESPED
Route::get('/huespeds/{id}/show',[HuespedController::class,'show'])->where('id','[0-9]+')->name('Huesped.Hushow');

// CREATE Y STORE HUESPED
Route::get('/huespeds/create',[HuespedController::class,'create'])->name('Huesped.Hucrear');
Route::post('/huespeds/create',[HuespedController::class,'store'])->name('Huesped.Hustore');

// EDIT Y UPDATE HUESPED
Route::get('/huespeds/{id}/editar',[HuespedController::class,'edit'])->whereNumber('id')->name('Huesped.Hueditar');
Route::put('/huespeds/{id}/editar',[HuespedController::class,'update'])->whereNumber('id')->name('Huespeds.Hupdate');

// DESTROYD HUESPED
Route::delete('/huespeds/{id}/borrar',[HuespedController::class,'destroy'])->whereNumber('id')->name('Huespeds.Borrar');

Route::get('/habitacions', function(){
    return view('habitacions');
    })->name('habitacions');
// INDEX HABITACION
Route::get('/habitacions',[HabitacionController::class,'index'])->name('Habitacion.index');

// SHOW HABITACION
Route::get('/habitacions/{id}/show',[HabitacionController::class,'show'])->where('id','[0-9]+')->name('Habitacion.show');

// CREATE Y STORE HABITACION
Route::get('/habitacions/create',[HabitacionController::class,'create'])->name('Habitacion.crear');
Route::post('/habitacions/create',[HabitacionController::class,'store'])->name('Habitacion.store');

// EDIT Y UPDATE HABITACION
Route::get('/habitacions/{id}/editar',[HabitacionController::class,'edit'])->whereNumber('id')->name('Habitacion.editar');
Route::put('/habitacions/{id}/editar',[HabitacionController::class,'update'])->whereNumber('id')->name('Habitacion.update');

// DESTROYD HABITACION
Route::delete('/habitacions/{id}/borrar',[HabitacionController::class,'destroy'])->whereNumber('id')->name('Habitacion.borrar');

Route::get('/reservas', function(){
return view('reservas');
})->name('reservas');
// INDEX RESERVA
Route::get('/reservas',[ReservaController::class,'index'])->name('Reserva.Rindex');

// SHOW RESERVA
Route::get('/reservas/{id}/show',[ReservaController::class,'show'])->where('id','[0-9]+')->name('reservas.show');

// CREATE Y STORE RESERVA
Route::get('/reservas/create',[ReservaController::class,'create'])->name('reservas.crear');
Route::post('/reservas/create',[ReservaController::class,'store'])->name('reservas.store');

// EDIT Y UPDATE RESERVA
Route::get('/reservas/{id}/editar',[ReservaController::class,'edit'])->whereNumber('id')->name('reservas.editar');
Route::put('/reservas/{id}/editar',[ReservaController::class,'update'])->whereNumber('id')->name('reservas.update');

// DESTROYDRESERVA
Route::delete('/reservas/{id}/borrar',[ReservaController::class,'destroy'])->whereNumber('id')->name('reservas.borrar');


