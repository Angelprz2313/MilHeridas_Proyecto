<form id="reservaForm" method="POST" action="{{ route('reservas.store') }}" class="space-y-6">
    @csrf
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Nombre Completo</label>
            <input type="text" name="name" class="w-full input-retro rounded-lg px-4 py-2" required>
        </div>
        <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Correo Electrónico</label>
            <input type="email" name="email" class="w-full input-retro rounded-lg px-4 py-2" required>
        </div>
    </div>
    <div>
        <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Número de Teléfono</label>
        <div class="flex gap-2">
            <select name="lada" class="w-20 input-retro rounded-lg px-2 py-2 text-center" required>
                <option value="+52">+52</option>
                <option value="+1">+1</option>
            </select>
            <input type="tel" name="phone" class="flex-1 input-retro rounded-lg px-4 py-2" placeholder="Ej. 7711234567" required>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Fecha</label>
            <input type="date" id="date" name="date" class="w-full input-retro rounded-lg px-4 py-2" required>
        </div>
        <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Hora</label>
            <select id="time" name="time" class="w-full input-retro rounded-lg px-4 py-2" required>
                <option value="">Selecciona la hora</option>
                <option value="20:00">20:00</option>
                <option value="20:30">20:30</option>
                <option value="21:00">21:00</option>
                <option value="21:30">21:30</option>
                <option value="22:00">22:00</option>
                <option value="22:30">22:30</option>
                <option value="23:00">23:00</option>
                <option value="23:30">23:30</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Personas</label>
            <input type="number" name="party_size" min="1" max="50" class="w-full input-retro rounded-lg px-4 py-2" placeholder="Ej. 4" required>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Motivo de la Celebración</label>
            <select name="reason" class="w-full input-retro rounded-lg px-4 py-2">
                <option value="">Selecciona (Opcional)</option>
                <option value="Cumpleaños">Cumpleaños</option>
                <option value="Aniversario">Aniversario</option>
                <option value="Despedida">Despedida</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Área/Mesa Preferida</label>
            <select name="area" class="w-full input-retro rounded-lg px-4 py-2">
                <option value="">Cualquier Mesa</option>
                <option value="Barra">Barra</option>
                <option value="Cabina">Cabina</option>
                <option value="Interior">Interior</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Mesero Específico (Opcional)</label>
            <select name="waiter" class="w-full input-retro rounded-lg px-4 py-2">
                <option value="">Cualquiera</option>
                <option value="Angel">Angel</option>
                <option value="Fabian">Fabian</option>
                <option value="Joaquin">Joaquin</option>
            </select>
        </div>
    </div>
    <div>
        <label class="block text-sm font-semibold mb-1 text-[var(--rojo-profundo)]">Comentarios Adicionales</label>
        <textarea name="comments" rows="3" class="w-full input-retro rounded-lg px-4 py-2" placeholder="Opcional"></textarea>
    </div>
    <button type="submit" class="btn-cta w-full py-3 rounded-lg font-semibold text-lg">Confirmar Reserva</button>
</form>
