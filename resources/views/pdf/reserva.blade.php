<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reserva #{{ $reserva->id }} - Mil Heridas</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            background-color: #fff8e7;
            color: #1f1f1f;
            margin: 0;
            padding: 2rem;
        }

        h1 {
            text-align: center;
            color: #b11f1f;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .card-retro {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border: 3px solid #b11f1f;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 5px 5px 15px rgba(0,0,0,0.3);
        }

        .card-retro p {
            margin: 0.5rem 0;
            font-size: 1rem;
        }

        .qr {
            text-align: center;
            margin: 1.5rem 0;
        }

        strong {
            color: #b11f1f;
        }

        .footer {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: #1b5e20;
        }
    </style>
</head>
<body>

    <h1>¡Tu reserva ha sido confirmada! 🎉</h1>

    <div class="card-retro">

        <p><strong>Nombre:</strong> {{ $reserva->nombre_completo }}</p>
        <p><strong>Correo:</strong> {{ $reserva->correo }}</p>
        <p><strong>Teléfono:</strong> {{ $reserva->telefono }}</p>
        <p><strong>Fecha:</strong> {{ $reserva->fecha }}</p>
        <p><strong>Hora:</strong> {{ $reserva->hora }}</p>
        <p><strong>Personas:</strong> {{ $reserva->personas }}</p>
        <p><strong>Motivo:</strong> {{ $reserva->motivo }}</p>
        <p><strong>Área:</strong> {{ $reserva->area }}</p>

        @if ($reserva->mesero)
            <p><strong>Mesero:</strong> {{ $reserva->mesero }}</p>
        @endif

        @if ($reserva->comentarios)
            <p><strong>Comentarios:</strong> {{ $reserva->comentarios }}</p>
        @endif

        <!-- QR SVG -->
        <div class="qr">
            {!! $qr !!}
        </div>

        <div class="footer">
            ¡Gracias por reservar en Mil Heridas!
        </div>
    </div>

</body>
</html>
