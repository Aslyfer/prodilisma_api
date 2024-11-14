<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController
{    
    public function login(Request $request)
    {
        // Validar la entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        // Buscar al usuario por email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['message' => 'Email no encontrado'], 404);
        }

        // Verificar la contraseña
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'La contraseña es incorrecta'], 401);
        }

        // Crear un token de acceso
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user_id' => $user->id
        ], 200);
    }

    public function logout(Request $request)
    {
        // Eliminar el token de autenticación
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Successfully logged out'], 200);
    }
}