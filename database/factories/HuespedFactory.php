<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Huesped>
 */
class HuespedFactory extends Factory
{
    /*
            $table->string("nombre");
            $table->string("apellido");
            $table->string("correo_electronico")-> unique();
            $table->string("telefono");
     */
    public function definition(): array
    {
        return [
            "nombre"=>$this->faker->firstName(),
            "apellido"=>$this->faker->lastName(),
           "correo_electronico"=>$this->faker->unique()->email,
           "telefono"=>$this->faker->phoneNumber(),
            //
        ];
    }
}
