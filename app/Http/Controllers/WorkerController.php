<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController
{

    public function index()
    {
        $workers = Worker::all();
        
        return response()->json($workers);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'middle_name' => 'nullable|string|max:50',
            'last_name' => 'required|string|max:50',
            'second_last_name' => 'nullable|string|max:50',
            'phone' => 'required|integer',
            'identification' => 'required|integer|unique:workers,identification',
            'email' => 'required|string|email|max:50|unique:workers,email',
        ]);

        $worker = Worker::create($validated);

        return response()->json($worker, 201);
    }

    public function show(string $id)
    {
        $worker = Worker::findOrFail($id);
        
        return response()->json($worker);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'middle_name' => 'nullable|string|max:50',
            'last_name' => 'required|string|max:50',
            'second_last_name' => 'nullable|string|max:50',
            'phone' => 'required|integer',
            'identification' => 'required|integer|unique:workers,identification,' . $id,
            'email' => 'required|string|email|max:50|unique:workers,email,' . $id,
        ]);

        $worker = Worker::findOrFail($id);
        
        $worker->update($validated);

        return response()->json($worker);
    }

    public function destroy(string $id)
    {
        $worker = Worker::findOrFail($id);
        
        $worker->delete();

        return response()->json(['message' => 'Worker deleted successfully']);
    }
}
