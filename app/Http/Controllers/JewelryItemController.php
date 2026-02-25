<?php

namespace App\Http\Controllers;

class JewelryItemController extends Controller
{
    private $items = [
        1 => "Золота каблучка",
        2 => "Срібний ланцюжок",
        3 => "Браслет з натуральним камінням",
        4 => "Кулон ручної роботи"
    ];

    public function index()
    {
        $items = $this->items;          
        return view('items', compact('items')); 
    }

    public function show($id)
    {
        $name = $this->items[$id] ?? null;

        if (!$name) {
            return "Виріб не знайдено";
        }

        return view('item', compact('name'));  
    }
}