@extends('layouts.app')

@section('content')
<main class="px-6 py-8">

    <h1 class="text-3xl font-bold text-center text-[var(--rojo-profundo)] mb-6">Mi Panel de Reservas</h1>

    <section>
        <h2 class="text-2xl font-semibold mb-4 text-[var(--verde-principal)]">Reservas Actuales</h2>

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

                        <div class="mt-3 text-center">
                            {!! $reserva->qr !!}
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-[var(--rojo-profundo)]">No tienes reservas activas.</p>
        @endif
    </section>
</main>
@endsection
