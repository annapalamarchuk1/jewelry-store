<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
public function index(Request $request)
{
    $query = Item::query();
    
    if ($request->category) {
        $query->where('category', $request->category);
    }
    
    $items = $query->get();
    
    return view('admin.items.index', compact('items'));
}

    public function create()
    {
        return view('admin.items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'image' => 'nullable'
        ]);

        Item::create($request->all());

        return redirect()->route('admin.items.index')
            ->with('success', 'Товар додано!');
    }

    public function show($id)
{
    $item = Item::findOrFail($id);
    return view('admin.items.show', compact('item'));
}

public function edit($id)
{
    $item = Item::findOrFail($id);
    return view('admin.items.edit', compact('item'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'price' => 'required|numeric',
        'description' => 'nullable',
        'image' => 'nullable'
    ]);

    Item::findOrFail($id)->update($request->all());

    return redirect()->route('admin.items.index')
        ->with('success', 'Товар оновлено!');
}
    public function destroy($id)
    {
        Item::findOrFail($id)->delete();

        return back()->with('success', 'Видалено!');
    }
}