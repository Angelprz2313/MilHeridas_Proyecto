<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mil Heridas')</title>

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
            color: #fff;
            scroll-behavior: smooth;
            background: linear-gradient(180deg, var(--verde-principal) 0%, #003300 100%);
        }

        .logo-slab { font-family: 'Alfa Slab One', serif; letter-spacing: 0.1em; font-size: 2.5rem; color: var(--amarillo-quemado); -webkit-text-stroke: 1.5px var(--rojo-profundo); text-shadow: 0 0 10px rgba(177,31,31,0.7); cursor:pointer; transition: transform 0.3s ease; }
        .logo-slab:hover { transform: scale(1.05); }
        .btn-cta { background: var(--rojo-profundo); color: #fff; font-weight: 700; transition: all 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.3); }
        .btn-cta:hover { background: var(--amarillo-quemado); color: #1f1f1f; transform: scale(1.05); }
        .card-retro { background: var(--crema); border: 3px solid var(--rojo-profundo); box-shadow: 0 5px 15px rgba(0,0,0,0.4); color: #1f1f1f; padding: 2rem; border-radius: 1rem; }
        .full-screen-center { min-height: calc(100vh - 7rem); display: flex; justify-content: center; align-items: center; }
        .input-retro { width: 100%; padding: 0.75rem 1rem; border: 2px solid var(--rojo-profundo); border-radius: 0.75rem; background-color: var(--crema); color: #1f1f1f; font-weight: 500; margin-bottom: 1rem; transition: all 0.3s ease; }
        .input-retro:focus { outline: none; border-color: var(--amarillo-quemado); box-shadow: 0 0 10px rgba(255,202,40,0.7); }
    </style>
</head>
<body>

<header class="fixed top-0 left-0 w-full z-50 bg-[rgba(0,0,0,0.3)] backdrop-blur-md border-b border-[var(--amarillo-quemado)]">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <div class="logo-slab" onclick="window.location.href='/'">MIL HERIDAS</div>
        <nav class="hidden md:flex gap-6 items-center font-medium">
            @guest
                <a href="{{ route('login') }}" class="hover:text-[var(--amarillo-quemado)]">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="hover:text-[var(--amarillo-quemado)]">Registrarse</a>
            @endguest
            @auth
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-[var(--amarillo-quemado)]">Cerrar Sesión</button>
                </form>
            @endauth
            <a href="{{ route('reservas') }}" class="btn-cta px-4 py-2 rounded-lg font-semibold text-sm">Reserva Ahora</a>
        </nav>
    </div>
</header>

<main class="pt-28 pb-10">
    @if (request()->routeIs('login') || request()->routeIs('register'))
        <div class="full-screen-center">
            <div class="w-full max-w-md card-retro">
                @yield('content')
            </div>
        </div>
    @else
        @yield('content')
    @endif
</main>

</body>
</html>
