<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// ===============================
//         PÁGINA PRINCIPAL
// ===============================
Route::get('/', function () {
    return view('welcome');
});

// ===============================
//        LOGIN / REGISTER
// ===============================

// LOGIN
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->name('login.store');

// REGISTER
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])
    ->name('register.store');

// LOGOUT
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// ===============================
//           RESERVAS
// ===============================
Route::prefix('reservas')->group(function () {
    Route::get('/', [ReservaController::class, 'create'])->name('reservas');
    Route::post('/', [ReservaController::class, 'store'])->name('reservas.store');
    Route::get('/confirmacion/{id}', [ReservaController::class, 'confirmacion'])->name('reservas.confirmacion');
    Route::get('/pdf/{id}', [ReservaController::class, 'pdf'])->name('reservas.pdf');
});

// ===============================
//           DASHBOARDS POR ROL
// ===============================

// Dashboard administrador
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Dashboard cliente
Route::middleware(['auth', 'cliente'])->group(function () {
    Route::get('/cliente/dashboard', [ClienteController::class, 'index'])->name('cliente.dashboard');
});

// ===============================
//           PERFIL
// ===============================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
