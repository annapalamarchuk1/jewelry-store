@extends('layouts.app')

@section('content')
<div class="py-12 bg-gray-100 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
            <h1 class="text-3xl font-bold mb-8 text-gray-800 flex items-center">
                <span class="mr-3"></span> Магазин ювелірних виробів
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($items as $item)
                    <div class="border border-gray-200 p-6 rounded-xl shadow-sm hover:shadow-md transition bg-white">
                        <h2 class="text-xl font-bold text-slate-900 mb-2">{{ $item->title }}</h2>
                        <p class="text-gray-600 mb-4 text-sm">{{ $item->description }}</p>
                        <p class="text-lg font-black text-amber-600">{{ number_format($item->price, 2, '.', '') }} грн</p>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection