<?php

namespace Database\Factories;

use App\Models\Habitacion;
use App\Models\Huesped;
use Illuminate\Database\Eloquent\Factories\Factory;

/*
**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
 
class ReservaFactory extends Factory
{
    /*      $table->datetime("fecha_entrada");
            $table->datetime("fecha_salida");
            $table->unsignedBigInteger("habitacion_id:");
            $table->unsignedBigInteger("huesped_id");
            $table->string("número_de_huéspedes");
     */
    public function definition(): array
    {
        return [
            "fecha_entrada"=>$this->faker->dateTime(),
            "fecha_salida"=>$this->faker->dateTime(),
            "huesped_id"=>Huesped::get('id')->random(),
            "habitacion_id"=>Habitacion::get('id')->random(),
           "numero_de_huespedes"=>$this->faker->numberBetween(1,5),
           //
        ];
    }
}
