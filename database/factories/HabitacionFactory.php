<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habitacion>
 */
class HabitacionFactory extends Factory
{
    /*
            $table->integer("numero");
            $table->string("tipo");
            $table->float("precio");
     */
    public function definition(): array
    {
        return [
            "numero"=>$this->faker->numerify(),
            "tipo"=>$this->faker->text(),
           "precio"=>$this->faker->numerify(),
          // 
        ];
    }
}
