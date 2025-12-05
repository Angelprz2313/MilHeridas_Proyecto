@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')
<h2 class="text-2xl font-bold mb-4 text-center text-[var(--rojo-profundo)]">Crear Cuenta</h2>

<form method="POST" action="{{ route('register.store') }}" class="space-y-4">
    @csrf
    <div>
        <label for="name" class="block font-semibold text-[var(--rojo-profundo)] mb-1">Nombre Completo</label>
        <input id="name" type="text" name="name" required class="input-retro">
    </div>
    <div>
        <label for="email" class="block font-semibold text-[var(--rojo-profundo)] mb-1">Correo Electrónico</label>
        <input id="email" type="email" name="email" required class="input-retro">
    </div>
    <div>
        <label for="password" class="block font-semibold text-[var(--rojo-profundo)] mb-1">Contraseña</label>
        <input id="password" type="password" name="password" required class="input-retro">
    </div>
    <div>
        <label for="password_confirmation" class="block font-semibold text-[var(--rojo-profundo)] mb-1">Confirmar Contraseña</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required class="input-retro">
    </div>
    <button type="submit" class="btn-cta w-full py-2 rounded-lg">Registrarse</button>
</form>

<p class="mt-4 text-center text-sm">
    ¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-[var(--amarillo-quemado)]">Inicia sesión aquí</a>
</p>
@endsection
