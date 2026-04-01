<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ShopController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('shop.index', compact('items'));
    }
}