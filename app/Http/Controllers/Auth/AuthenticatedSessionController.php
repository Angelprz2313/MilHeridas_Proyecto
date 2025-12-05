<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class AuthenticatedSessionController extends Controller
{
    /**
     * Mostrar el formulario de login
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Autenticar y redirigir al usuario según su rol
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Intentar autenticar con los datos del request
        $request->authenticate();

        // Regenerar sesión para seguridad
        $request->session()->regenerate();

        // Redirigir según rol
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->role === 'cliente') {
            return redirect()->route('cliente.dashboard');
        }

        // Por seguridad, si no tiene rol válido
        Auth::logout();
        return redirect()->route('login')->withErrors([
            'role' => 'Rol de usuario no válido.'
        ]);
    }

    /**
     * Cerrar sesión
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
