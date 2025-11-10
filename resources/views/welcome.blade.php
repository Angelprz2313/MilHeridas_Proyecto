<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mil Heridas - Bienvenido</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --verde-principal: #1b5e20;
            --rojo-profundo: #b11f1f;
            --amarillo-quemado: #ffca28;
            --crema: #fff8e7;
        }
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(180deg, var(--verde-principal) 0%, #003300 100%);
            color: #fff;
            background-image: url('https://www.transparenttextures.com/patterns/asfalt-dark.png');
            background-attachment: fixed;
            scroll-behavior: smooth;
        }
        .logo-slab { font-family: 'Alfa Slab One', serif; letter-spacing: 0.1em; font-size: 2.5rem; color: var(--amarillo-quemado); -webkit-text-stroke: 1.5px var(--rojo-profundo); text-shadow: 0 0 10px rgba(177,31,31,0.7); transition: transform 0.3s ease;}
        .logo-slab:hover { transform: scale(1.05); }
        .btn-cta { background: var(--rojo-profundo); color: #fff; transition: all 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.3);}
        .btn-cta:hover { background: var(--amarillo-quemado); color: #1f1f1f; transform: scale(1.05); }
        .hero-overlay { background: rgba(27,94,32,0.75); backdrop-filter: blur(2px); }
    </style>
</head>
<body class="text-white">

<header class="fixed top-0 left-0 w-full z-50 bg-[rgba(0,0,0,0.3)] backdrop-blur-md border-b border-[var(--amarillo-quemado)]">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <div class="logo-slab cursor-pointer" onclick="window.location.href='/'">MIL HERIDAS</div>
        <nav class="hidden md:flex gap-6 items-center font-medium">
            <a href="{{ route('login') }}" class="hover:text-[var(--amarillo-quemado)]">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="hover:text-[var(--amarillo-quemado)]">Registrarse</a>
            <a href="{{ route('reservas') }}" class="btn-cta px-4 py-2 rounded-lg font-semibold text-sm">Reserva Ahora</a>
        </nav>
    </div>
</header>

<main class="pt-24">
    <!-- INICIO -->
    <section class="h-screen flex items-center justify-center text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1579547621706-1a9c79d5f28f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg'); filter:brightness(0.8);"></div>
        <div class="absolute inset-0 hero-overlay"></div>
        <div class="relative z-10 max-w-3xl px-6">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 text-[var(--amarillo-quemado)] drop-shadow-[0_0_6px_var(--rojo-profundo)] leading-tight">
                “Tu Mesa para el Despecho”
            </h1>
            <p class="text-lg text-gray-200 mb-8 max-w-2xl mx-auto">
                Tu refugio del despecho, donde cada lágrima tiene su mesa y cada trago su historia.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('reservas') }}" class="btn-cta px-6 py-3 rounded-xl text-lg font-semibold shadow-lg">¡Reservar Ahora!</a>
                <a href="{{ route('register') }}" class="btn-cta px-6 py-3 rounded-xl text-lg font-semibold shadow-lg">Regístrate</a>
                <a href="{{ route('login') }}" class="btn-cta px-6 py-3 rounded-xl text-lg font-semibold shadow-lg">Iniciar Sesión</a>
            </div>
        </div>
    </section>
</main>

</body>
</html>

