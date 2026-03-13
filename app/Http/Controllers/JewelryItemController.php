<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JewelryItemController extends Controller
{
    private $items = [
        1 => [
            'id' => 1,
            'title' => 'Золота каблучка',
            'description' => 'Вишукана каблучка із золота 585 проби.',
            'price' => 3500,
            'image' => '/images/ring.jpg'
        ],
        2 => [
            'id' => 2,
            'title' => 'Срібний ланцюжок',
            'description' => 'Класичний срібний ланцюжок.',
            'price' => 1800,
            'image' => '/images/chain.jpg'
        ],
        3 => [
            'id' => 3,
            'title' => 'Браслет з натуральним камінням',
            'description' => 'Стильний браслет із натуральним камінням.',
            'price' => 2200,
            'image' => '/images/bracelet.jpg'
        ],
        4 => [
            'id' => 4,
            'title' => 'Кулон ручної роботи',
            'description' => 'Елегантний кулон ручної роботи.',
            'price' => 2500,
            'image' => '/images/pendant.jpg'
        ],
    ];

    public function index()
    {
        $items = array_map(fn($item) => (object)$item, $this->items);

        return view('items.index', [
            'items' => $items
        ]);
    }


    public function show($id)
    {
        if (!isset($this->items[$id])) {
            abort(404);
        }

        $item = (object)$this->items[$id];

        return view('items.show', [
            'item' => $item
        ]);
    }
}