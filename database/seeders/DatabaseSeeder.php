<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Item::where('id', 3)->update([
            'description' => 'Срібний браслет із ніжним плетінням, що символізує зв\'язок між серцями. Легкий та зручний у носінні, стане вашим талісманом на кожен день.'
        ]);
        Item::where('id', 4)->update([
            'description' => 'Вишукана каблучка з жовтого золота 585 проби, прикрашена сяючими фіанітами. Ідеальний подарунок для коханої людини.'
        ]);
        Item::where('id', 5)->update([
            'description' => 'Мінімалістичне срібне кольє з витонченою лінією силуету. Пасує як до денного, так і до вечірнього образу.'
        ]);

        Item::create([
            'title' => 'Сережки Грація',
            'price' => 8000,
            'category' => 'Сережки',
            'description' => 'Легкі та витончені сережки зі срібла з позолотою. Делікатний квітковий візерунок надає їм неповторної елегантності.',
            'image' => 'https://goldensilver.ua/image/cache/catalog/deva1/5/TR-02-00015PZ-90-1000x1000.jpg'
        ]);
        Item::create([
            'title' => 'Каблучка Зоряний пил',
            'price' => 13000,
            'category' => 'Каблучки',
            'description' => 'Романтична каблучка з білого золота з мерехтливими діамантами. Немов зоряне небо на вашому пальці.',
            'image' => 'https://minimal.com.ua/wp-content/uploads/2024/01/k611zh-br-dm-m-800x800.jpg'
        ]);
        Item::create([
            'title' => 'Кольє Місячна нитка',
            'price' => 22500,
            'category' => 'Кольє',
            'description' => 'Витончене кольє з білого золота ручної роботи. Ніжна лінія силуету підкреслить красу вашої шиї на будь-якому заході.',
            'image' => 'https://img.ukrzoloto.ua/images/pr/520_520/c6b84dfbfe95c5f2cc6b091b8882ec07/1769460786/UZ31735191_000176405.webp'
        ]);
    }
}