<h2>Tu Reserva Está Confirmada</h2>

<p>Hola {{ $reserva->nombre_completo }}</p>

<p>Gracias por reservar con nosotros. Aquí tienes tu QR:</p>

<img src="data:image/png;base64,{{ $qr }}" width="200">
