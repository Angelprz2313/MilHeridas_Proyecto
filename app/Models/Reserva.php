<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'nombre_completo',
        'correo',
        'telefono',
        'fecha',
        'hora',
        'personas',
        'motivo',
        'area',
        'mesero',
        'comentarios',
    ];
}
