<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return response()->json(Item::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $item = Item::create($data);
        return response()->json($item, 201);
    }

    public function show($id)
    {
        $item = Item::find($id);
        if (!$item)
            return response()->json(['error' => 'Item not found'], 404);
        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
                $item = Item::find($id);
        if (!$item) return response()->json(['error' => 'Item not found'], 404);

        $item->update($request->only(['title', 'description']));
        return response()->json($item);
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        if (!$item) return response()->json(['error' => 'Item not found'], 404);

        $item->delete();
        return response()->json(['message' => 'Item deleted']);
    }
}
