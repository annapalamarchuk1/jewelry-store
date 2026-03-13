<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('admin.items.index', compact('items'));
    }

public function show(Item $item)
{
    return view('admin.items.show', compact('item'));
}

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('admin.items.index')->with('success', 'Прикраса видалена');
    }
}