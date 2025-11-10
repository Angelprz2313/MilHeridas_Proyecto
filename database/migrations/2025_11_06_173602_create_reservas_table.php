<?php

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
            $table->string('nombre_completo');
            $table->string('correo_electronico');
            $table->string('telefono');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('personas');
            $table->string('motivo_celebracion');
            $table->string('area_mesa_preferida');
            $table->string('mesero_especifico')->nullable();
            $table->text('comentarios_adicionales')->nullable();
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
