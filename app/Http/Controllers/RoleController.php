<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController
{

    public function index()
    {
        $roles = Role::all();
        
        return response()->json($roles);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'role_name' => 'required|string|max:20',
        ]);

        $role = Role::create($validated);

        return response()->json($role, 201); // Responder con el nuevo rol creado
    }

    public function show(string $id)
    {
        $role = Role::findOrFail($id);

        return response()->json($role);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'role_name' => 'required|string|max:20',
        ]);

        $role = Role::findOrFail($id);
        
        $role->update($validated);

        return response()->json($role);
    }

    public function destroy(string $id)
    {
        
        $role = Role::findOrFail($id);
        
        $role->delete();

        return response()->json(['message' => 'Role deleted successfully']);
    }
}