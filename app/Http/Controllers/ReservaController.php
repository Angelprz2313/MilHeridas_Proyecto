<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;

class ReservaController extends Controller
{
    // Muestra el formulario de reserva
    public function create()
    {
        return view('reservas');
    }

    // Procesa el formulario
    public function store(Request $request)
    {
        \Log::info("➡️ Entró al método STORE de reservas");

        $validated = $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'correo'          => 'required|email',
            'telefono'        => 'required|string|max:20',
            'fecha'           => 'required|date',
            'hora'            => 'required',
            'personas'        => 'required|integer|min:1',
            'motivo'          => 'required|string|max:255',
            'area'            => 'required|string|max:255',
            'mesero'          => 'nullable|string|max:255',
            'comentarios'     => 'nullable|string|max:500',
        ]);

        \Log::info("📝 Datos validados", $validated);

        $reserva = Reserva::create($validated);

        \Log::info("💾 Reserva creada con ID: {$reserva->id}");

        return redirect()->route('reservas.confirmacion', ['id' => $reserva->id]);
    }

    // Vista de confirmación de reserva (web)
    public function confirmacion($id)
    {
        $reserva = Reserva::findOrFail($id);

        $mensaje = $this->generarMensajeQR($reserva);

        // QR en SVG (para la web)
        $qr = QrCode::encoding('UTF-8')
                    ->format('svg')
                    ->size(250)
                    ->errorCorrection('H')
                    ->generate($mensaje);

        return view('confirmacion', compact('reserva', 'qr'));
    }

    // Generar PDF de la reserva (sin botones, QR en SVG)
    public function pdf($id)
    {
        $reserva = Reserva::findOrFail($id);

        $mensaje = $this->generarMensajeQR($reserva);

        // QR en SVG (para PDF)
        $qr = QrCode::encoding('UTF-8')
                    ->format('svg')
                    ->size(250)
                    ->errorCorrection('H')
                    ->generate($mensaje);

        // Usar vista específica para PDF (puedes crear 'pdf.reserva')
        $pdf = Pdf::loadView('pdf.reserva', compact('reserva', 'qr'));

        return $pdf->download("reserva_{$reserva->id}.pdf");
    }

    // Método auxiliar para generar mensaje del QR
    private function generarMensajeQR($reserva)
    {
        return 
            "🎉 Reserva confirmada 🎉\n\n" .
            "👤 Nombre: {$reserva->nombre_completo}\n" .
            "📧 Correo: {$reserva->correo}\n" .
            "📅 Fecha: {$reserva->fecha}\n" .
            "🕒 Hora: {$reserva->hora}\n" .
            "👥 Personas: {$reserva->personas}\n" .
            "🎊 Motivo: {$reserva->motivo}\n" .
            "📍 Área: {$reserva->area}\n\n" .
            "¡Gracias por reservar en Mil Heridas!";
    }
}
