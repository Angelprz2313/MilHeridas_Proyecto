<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsCliente
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->tipo === 'cliente') {
            return $next($request);
        }

        return redirect('/'); // o donde quieras redirigir si no es cliente
    }
}
