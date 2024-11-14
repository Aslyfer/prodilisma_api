<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController
{
    public function create()
    {
    
        $roles = \DB::table('roles')->get();
    
        return view('users', compact('roles'));
    }

    public function index()
    {
        $users = User::all();
        
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'role_id' => 'required|exists:roles,id',
            'first_name' => 'required|string|max:50',
            'middle_name' => 'nullable|string|max:50',
            'last_name' => 'required|string|max:50',
            'second_last_name' => 'nullable|string|max:50',
            'phone' => 'required|integer',
            'identification' => 'required|integer',
            'email' => 'required|string|email|max:50|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'role_id' => $validated['role_id'],
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'],
            'last_name' => $validated['last_name'],
            'second_last_name' => $validated['second_last_name'],
            'phone' => $validated['phone'],
            'identification' => $validated['identification'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']), // Encriptar la contraseña
        ]);

        return response()->json($user, 201);
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        
        return response()->json($user);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'role_id' => 'required|exists:roles,id',
            'first_name' => 'required|string|max:50',
            'middle_name' => 'nullable|string|max:50',
            'last_name' => 'required|string|max:50',
            'second_last_name' => 'nullable|string|max:50',
            'phone' => 'required|integer',
            'identification' => 'required|integer',
            'email' => 'required|string|email|max:50|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'role_id' => $validated['role_id'],
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'],
            'last_name' => $validated['last_name'],
            'second_last_name' => $validated['second_last_name'],
            'phone' => $validated['phone'],
            'identification' => $validated['identification'],
            'email' => $validated['email'],
            'password' => $validated['password'] ? bcrypt($validated['password']) : $user->password,
        ]);

        return response()->json($user);
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        
        $user->delete();

        return response()->json(['message' => 'Usuario eliminado exitosamente']);
    }
}