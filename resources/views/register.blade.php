@extends('layouts.app')
@section('title', 'Registro')

@section('content')
<section class="min-h-screen flex items-center justify-center px-6">
    <div class="card-retro p-8 rounded-xl w-full max-w-md">
        <h2 class="text-3xl font-bold mb-6 text-center text-[var(--rojo-profundo)]">Registro</h2>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <input type="text" name="name" placeholder="Nombre completo" class="w-full input-retro rounded-lg px-4 py-2" required>

            <input type="email" name="email" placeholder="Correo electrónico" class="w-full input-retro rounded-lg px-4 py-2" required>

            <input type="password" name="password" placeholder="Contraseña" class="w-full input-retro rounded-lg px-4 py-2" required>

            <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" class="w-full input-retro rounded-lg px-4 py-2" required>

            <button class="btn-cta w-full py-3 rounded-lg font-semibold text-lg">Registrarse</button>
        </form>

        <p class="text-center mt-4 text-gray-700">
            ¿Ya tienes cuenta?
            <a href="{{ route('login') }}" class="text-[var(--rojo-profundo)] font-bold">Inicia Sesión</a>
        </p>
    </div>
</section>
@endsection
