@extends('layouts.app')

@section('content')
<main class="px-6 py-8">

    <h1 class="text-3xl font-bold text-center text-[var(--rojo-profundo)] mb-6">Panel de Administración</h1>

    <section>
        <h2 class="text-2xl font-semibold mb-4 text-[var(--verde-principal)]">Reservas Registradas</h2>

        @if($reservas->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($reservas as $reserva)
                    <div class="card-retro p-4 border-2 border-[var(--rojo-profundo)] rounded-lg shadow-lg">
                        <p><strong>Nombre:</strong> {{ $reserva->nombre_completo }}</p>
                        <p><strong>Correo:</strong> {{ $reserva->correo }}</p>
                        <p><strong>Teléfono:</strong> {{ $reserva->telefono }}</p>
                        <p><strong>Fecha:</strong> {{ $reserva->fecha }}</p>
                        <p><strong>Hora:</strong> {{ $reserva->hora }}</p>
                        <p><strong>Personas:</strong> {{ $reserva->personas }}</p>
                        <p><strong>Área:</strong> {{ $reserva->area }}</p>
                        <p><strong>Motivo:</strong> {{ $reserva->motivo }}</p>
                        <p><strong>Mesero:</strong> {{ $reserva->mesero ?? 'Cualquiera' }}</p>
                        <p><strong>Comentarios:</strong> {{ $reserva->comentarios ?? 'Ninguno' }}</p>

                        <div class="mt-3 text-center">
                            {!! $reserva->qr !!}
                        </div>

                        <div class="mt-2 flex justify-between">
                            <a href="{{ route('reservas.pdf', $reserva->id) }}" class="btn-cta px-4 py-2 rounded-lg font-semibold text-white bg-[var(--verde-principal)]">Descargar PDF</a>
                            <form action="{{ route('reservas.validar', $reserva->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn-cta px-4 py-2 rounded-lg font-semibold text-white bg-[var(--rojo-profundo)]">Validar QR</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-[var(--rojo-profundo)]">No hay reservas registradas.</p>
        @endif
    </section>
</main>
@endsection
