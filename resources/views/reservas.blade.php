<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mil Heridas - Reservas</title>

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
    .logo-slab {
      font-family: "Alfa Slab One", serif;
      letter-spacing: 0.1em;
      font-size: 2rem;
      color: var(--amarillo-quemado);
      -webkit-text-stroke: 1px var(--rojo-profundo);
      text-shadow: 0 0 10px rgba(177, 31, 31, 0.7);
      transition: transform 0.3s ease;
      cursor: pointer;
    }
    .logo-slab:hover { transform: scale(1.05); }

    .btn-cta {
      background: var(--rojo-profundo);
      color: #fff;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }
    .btn-cta:hover {
      background: var(--amarillo-quemado);
      color: #1f1f1f;
      transform: scale(1.05);
    }
    .input-retro {
      border: 2px solid var(--rojo-profundo);
      background: #fff;
      color: #1f1f1f;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .input-retro:focus {
      border-color: var(--amarillo-quemado);
      box-shadow: 0 0 0 3px rgba(255,202,40,0.3);
      outline: none;
    }
    .card-retro {
      background: var(--crema);
      color: #1f1f1f;
      border: 3px solid var(--rojo-profundo);
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-retro:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 25px rgba(0,0,0,0.4);
    }
  </style>
</head>
<body class="text-white">

  <!-- Banner superior -->
  <header class="w-full bg-[var(--crema)] text-[var(--rojo-profundo)] py-4 shadow-md">
    <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
      <a href="/" class="logo-slab">MIL HERIDAS</a>
      <div class="flex gap-4">
        <a href="{{ route('login') }}" class="btn-cta px-4 py-2 rounded-lg text-sm font-semibold">Iniciar sesión</a>
        <a href="{{ route('register') }}" class="btn-cta px-4 py-2 rounded-lg text-sm font-semibold">Registrarse</a>
      </div>
    </div>
  </header>

  <!-- Sección del formulario -->
  <section id="reservas" class="min-h-screen flex items-center justify-center px-6 py-12">
    <div class="card-retro p-8 rounded-xl w-full max-w-4xl">
      <h2 class="text-3xl font-bold mb-6 text-center text-[var(--rojo-profundo)]">Reserva tu mesa</h2>

      <form action="{{ route('reservas.store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Nombre Completo</label>
            <input type="text" name="nombre_completo" class="w-full input-retro rounded-lg px-4 py-2" required />
          </div>

          <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Correo Electrónico</label>
            <input type="email" name="correo" class="w-full input-retro rounded-lg px-4 py-2" required />
          </div>
        </div>

        <div>
          <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Número de Teléfono</label>
          <div class="flex gap-2">
            <select name="lada" class="w-20 input-retro rounded-lg px-2 py-2 text-center" required>
              <option value="+52">+52</option>
              <option value="+1">+1</option>
            </select>
            <input type="tel" name="telefono" class="flex-1 input-retro rounded-lg px-4 py-2" placeholder="Ej. 7711234567" required />
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Fecha</label>
            <input type="date" name="fecha" class="w-full input-retro rounded-lg px-4 py-2" required />
          </div>

          <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Hora</label>
            <select name="hora" class="w-full input-retro rounded-lg px-4 py-2" required>
              <option value="">Selecciona la hora</option>
              @for ($i = 20; $i <= 23; $i++)
                <option value="{{ $i }}:00">{{ $i }}:00</option>
                <option value="{{ $i }}:30">{{ $i }}:30</option>
              @endfor
            </select>
          </div>

          <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Personas</label>
            <input type="number" name="personas" min="1" max="50" class="w-full input-retro rounded-lg px-4 py-2" required />
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Motivo</label>
            <select name="motivo" class="w-full input-retro rounded-lg px-4 py-2">
              <option value="">Selecciona (Opcional)</option>
              <option>Cumpleaños</option>
              <option>Aniversario</option>
              <option>Despedida</option>
            </select>
          </div>

          <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Área</label>
            <input type="text" name="area" class="w-full input-retro rounded-lg px-4 py-2" required />
          </div>

          <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Mesero (Opcional)</label>
            <input type="text" name="mesero" class="w-full input-retro rounded-lg px-4 py-2" />
          </div>
        </div>

        <div>
          <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Comentarios (Opcional)</label>
          <textarea name="comentarios" rows="3" class="w-full input-retro rounded-lg px-4 py-2"></textarea>
        </div>

        <!-- BOTÓN FINAL -->
        <button type="submit" class="btn-cta w-full py-3 rounded-lg font-bold text-lg">
          Confirmar reserva
        </button>

      </form>
    </div>
  </section>
</body>
</html>
