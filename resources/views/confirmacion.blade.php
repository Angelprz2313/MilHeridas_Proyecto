<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Reserva - Mil Heridas</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet" />

    <style>
        :root {
            --verde-principal: #1b5e20;
            --rojo-profundo: #b11f1f;
            --amarillo-quemado: #ffca28;
            --crema: #fff8e7;
        }

        body {
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(180deg, var(--verde-principal) 0%, #003300 100%);
            color: #fff;
            background-image: url("https://www.transparenttextures.com/patterns/asfalt-dark.png");
            background-attachment: fixed;
            scroll-behavior: smooth;
        }

        .card-retro {
            background: var(--crema);
            color: #1f1f1f;
            border: 3px solid var(--rojo-profundo);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
            padding: 2rem;
            border-radius: 1rem;
        }
    </style>
</head>
<body class="text-white">

    <!-- Encabezado -->
    <header class="w-full bg-[var(--crema)] text-[var(--rojo-profundo)] py-4">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
            <a href="/" class="text-3xl font-bold" style="font-family: 'Alfa Slab One', serif;">MIL HERIDAS</a>
        </div>
    </header>

    <!-- Contenido -->
    <section class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="card-retro max-w-3xl w-full text-center">

            <h2 class="text-3xl font-extrabold mb-4 text-[var(--rojo-profundo)]">
                ¡Tu reserva ha sido confirmada! 🎉
            </h2>

            <p class="text-lg mb-6">
                Gracias por reservar con nosotros, <strong>{{ $reserva->nombre_completo }}</strong>.
            </p>

            <!-- QR SVG -->
            <div class="flex justify-center mb-6">
                {!! $qr !!}
            </div>

            <!-- Datos de la reserva -->
            <div class="text-left mx-auto max-w-md space-y-2 text-[var(--rojo-profundo)]">
                <p><strong>📧 Correo:</strong> {{ $reserva->correo }}</p>
                <p><strong>📱 Teléfono:</strong> {{ $reserva->telefono }}</p>
                <p><strong>📅 Fecha:</strong> {{ $reserva->fecha }}</p>
                <p><strong>🕒 Hora:</strong> {{ $reserva->hora }}</p>
                <p><strong>👥 Personas:</strong> {{ $reserva->personas }}</p>
                <p><strong>🎉 Motivo:</strong> {{ $reserva->motivo }}</p>
                <p><strong>📍 Área:</strong> {{ $reserva->area }}</p>

                @if ($reserva->mesero)
                    <p><strong>🧑‍🍳 Mesero:</strong> {{ $reserva->mesero }}</p>
                @endif

                @if ($reserva->comentarios)
                    <p><strong>📝 Comentarios:</strong> {{ $reserva->comentarios }}</p>
                @endif
            </div>

            <!-- Botones solo en web -->
            <div class="mt-8">
                <a href="/" class="px-6 py-3 rounded-lg bg-[var(--rojo-profundo)] text-white font-bold hover:bg-[var(--amarillo-quemado)] hover:text-black duration-300">
                    Volver al inicio
                </a>
                <a href="{{ route('reservas.pdf', $reserva->id) }}"
                   class="px-4 py-2 bg-red-700 text-white rounded-lg hover:bg-red-800 duration-300">
                   Descargar PDF
                </a>
            </div>

        </div>
    </section>

</body>
</html>
