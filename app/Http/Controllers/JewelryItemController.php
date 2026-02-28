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
        return view('items.index', [
            'items' => $this->items
        ]);
    }

    public function show($id)
    {
        if (!isset($this->items[$id])) {
            return "Виріб не знайдено";
        }

        return view('items.show', [
            'name' => $this->items[$id]
        ]);
    }
}