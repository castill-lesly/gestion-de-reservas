<?php

use App\Models\Habitacion;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->datetime("fecha_entrada");
            $table->datetime("fecha_salida");
            $table->BigInteger('huesped_id')->unsigned()->nullable();
            $table->foreign('huesped_id')->references('id')->on('huespeds')->onDelete('cascade');
            $table->BigInteger('habitacion_id')->unsigned()->nullable();
            $table->foreign('habitacion_id')->references('id')->on('habitacions')->onDelete('cascade');
            $table->integer("numero_de_huespedes");
            $table->timestamps();           
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
