<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huesped extends Model
{
    use HasFactory; 
    public function reservas() {
        return $this->hasmany(Reserva::class);
    }
}
