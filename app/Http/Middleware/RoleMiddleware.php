<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if (in_array($user->role->role_name, $roles)) {
                return $next($request);
            }
        }
        return response()->json(['error' => 'No tienes permisos para acceder a esta ruta.'], 403);
    }
}