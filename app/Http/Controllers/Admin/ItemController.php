<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Список прикрас
    public function index()
    {
        $items = Item::all();
        return view('admin.items.index', compact('items'));
    }

    // Форма створення прикраси
    public function create()
    {
        return view('admin.items.create');
    }

    // Збереження нової прикраси
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'price' => 'required|numeric|min:1',
            'description' => 'nullable',
            'image' => 'nullable'
        ]);

        Item::create($validated);

        return redirect()->route('admin.items.index')
            ->with('success', 'Прикраса успішно додана');
    }

    // Перегляд окремої прикраси
    public function show(Item $item)
    {
        return view('admin.items.show', compact('item'));
    }

    // Видалення прикраси
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('admin.items.index')
            ->with('success', 'Прикраса видалена');
    }
}