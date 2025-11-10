<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'nombre_completo',
        'correo_electronico',
        'telefono',
        'fecha',
        'hora',
        'personas',
        'motivo_celebracion',
        'area_mesa_preferida',
        'mesero_especifico',
        'comentarios_adicionales',
    ];
}
