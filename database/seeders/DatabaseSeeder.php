<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Huesped;
use App\Models\Habitacion;
use App\Models\Reserva;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([HuespedSeeder::class,HabitacionSeeder::class,ReservaSeeder::class]);

        // \App\Models\User::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',s
        //     'email' => 'test@example.com',
        // ]);
    }
}
