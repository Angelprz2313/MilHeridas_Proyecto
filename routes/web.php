<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas de reservas
Route::prefix('reservas')->group(function () {
    // Mostrar formulario de reserva
    Route::get('/', [ReservaController::class, 'create'])->name('reservas');

    // Guardar reserva
    Route::post('/', [ReservaController::class, 'store'])->name('reservas.store');

    // Confirmación de reserva
    Route::get('/confirmacion/{id}', [ReservaController::class, 'confirmacion'])
        ->name('reservas.confirmacion');

    // Generar PDF de reserva
    Route::get('/pdf/{id}', [ReservaController::class, 'pdf'])->name('reservas.pdf');
});

// Dashboard (solo usuarios autenticados y verificados)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas protegidas (perfil de usuario)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
