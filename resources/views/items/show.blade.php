@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-8 text-gray-800">💎 Наші ювелірні вироби</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($items as $item)
                    <div class="border rounded-xl p-4 shadow-sm hover:shadow-md transition">
                        @if($item->image)
                            <img src="{{ $item->image }}" class="w-full h-48 object-cover rounded-lg mb-4">
                        @endif
                        <h2 class="text-xl font-bold">{{ $item->title }}</h2>
                        <p class="text-gray-600 mb-4">{{ $item->description }}</p>
                        <div class="text-lg font-bold text-amber-600">
                            {{ number_format($item->price, 0, '.', ' ') }} грн
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection