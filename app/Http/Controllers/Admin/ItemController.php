<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
public function index()
{
    $items = Item::all();
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

    public function destroy($id)
    {
        Item::findOrFail($id)->delete();

        return back()->with('success', 'Видалено!');
    }
}