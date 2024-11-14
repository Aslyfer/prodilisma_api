<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController
{

    public function index()
    {
        $history = History::all();
        return response()->json($history);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'worker_id' => 'required|exists:workers,id',
            'time' => 'required|date',
            'daily_production' => 'required|integer',
            'novelty' => 'nullable|string',
        ]);

        $history = History::create($validated);

        return response()->json($history, 201);
    }

    public function show(string $id)
    {
        $history = History::findOrFail($id);
        return response()->json($history);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'worker_id' => 'required|exists:workers,id',
            'time' => 'required|date',
            'daily_production' => 'required|integer',
            'novelty' => 'nullable|string',
        ]);

        $history = History::findOrFail($id);
        $history->update($validated);

        return response()->json($history);
    }

    public function destroy(string $id)
    {
        $history = History::findOrFail($id);
        $history->delete();

        return response()->json(['message' => 'History record deleted successfully']);
    }
}
