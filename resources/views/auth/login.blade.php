@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<h2 class="text-3xl font-bold text-center mb-6 text-[var(--rojo-profundo)]">Iniciar Sesión</h2>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-4">
        <label for="email" class="block mb-2 font-semibold text-[var(--rojo-profundo)]">Correo Electrónico</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="input-retro">
    </div>

    <div class="mb-4">
        <label for="password" class="block mb-2 font-semibold text-[var(--rojo-profundo)]">Contraseña</label>
        <input id="password" type="password" name="password" required class="input-retro">
    </div>

    <button type="submit" class="btn-cta btn-retro">Iniciar Sesión</button>

    <p class="mt-4 text-center text-sm">
        ¿No tienes cuenta? 
        <a href="{{ route('register') }}" class="text-[var(--amarillo-quemado)] font-semibold">Regístrate</a>
    </p>
</form>
@endsection
