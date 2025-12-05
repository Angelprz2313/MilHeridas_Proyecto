@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')
<h2 class="text-3xl font-bold text-center mb-6 text-[var(--rojo-profundo)]">Crear Cuenta</h2>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="mb-4">
        <label for="name" class="block mb-2 font-semibold text-[var(--rojo-profundo)]">Nombre Completo</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required class="input-retro">
    </div>

    <div class="mb-4">
        <label for="email" class="block mb-2 font-semibold text-[var(--rojo-profundo)]">Correo Electrónico</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required class="input-retro">
    </div>

    <div class="mb-4">
        <label for="password" class="block mb-2 font-semibold text-[var(--rojo-profundo)]">Contraseña</label>
        <input id="password" type="password" name="password" required class="input-retro">
    </div>

    <div class="mb-4">
        <label for="password_confirmation" class="block mb-2 font-semibold text-[var(--rojo-profundo)]">Confirmar Contraseña</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required class="input-retro">
    </div>

    <button type="submit" class="btn-cta btn-retro">Registrarse</button>

    <p class="mt-4 text-center text-sm">
        ¿Ya tienes cuenta? 
        <a href="{{ route('login') }}" class="text-[var(--amarillo-quemado)] font-semibold">Iniciar Sesión</a>
    </p>
</form>
@endsection
