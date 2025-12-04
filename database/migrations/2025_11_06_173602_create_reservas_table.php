<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('correo');
            $table->string('telefono');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('personas');
            $table->string('motivo');
            $table->string('area')->nullable();
            $table->string('mesero')->nullable();
            $table->text('comentarios')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
