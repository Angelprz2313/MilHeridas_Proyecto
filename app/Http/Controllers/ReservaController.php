<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    /**
     * Muestra el formulario de reservas.
     */
    public function create()
    {
        return view('reservas');
    }

    /**
     * Guarda una nueva reserva en la base de datos.
     */
    public function store(Request $request)
    {
        // Validación de los campos del formulario
        $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'correo_electronico' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'fecha' => 'required|date',
            'hora' => 'required',
            'personas' => 'required|integer|min:1',
            'motivo_celebracion' => 'required|string|max:255',
            'area_mesa_preferida' => 'required|string|max:255',
            'mesero_especifico' => 'nullable|string|max:255',
            'comentarios_adicionales' => 'nullable|string',
        ]);

        // Crear la reserva
        Reserva::create([
            'nombre_completo' => $request->nombre_completo,
            'correo_electronico' => $request->correo_electronico,
            'telefono' => $request->telefono,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'personas' => $request->personas,
            'motivo_celebracion' => $request->motivo_celebracion,
            'area_mesa_preferida' => $request->area_mesa_preferida,
            'mesero_especifico' => $request->mesero_especifico,
            'comentarios_adicionales' => $request->comentarios_adicionales,
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->back()->with('success', '¡Tu reserva se ha enviado correctamente!');
    }
}
