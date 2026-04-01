@extends('layouts.app')

@section('content')
<div class="py-12 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl p-8">
            <div class="flex justify-between items-center mb-8 border-b pb-4">
                <h1 class="text-3xl font-extrabold text-slate-800 tracking-tight">
                    ✨ Наші Ювелірні Вироби
                </h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($items as $item)
                    <div class="group bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h2 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition">
                                    {{ $item->title }}
                                </h2>
                            </div>
                            
                            <p class="text-gray-500 text-sm mb-6 line-clamp-2">
                                {{ $item->description }}
                            </p>

                            <div class="flex justify-between items-center pt-4 border-t border-gray-50">
                                <span class="text-2xl font-black text-amber-500">
                                    {{ number_format($item->price, 0, '.', ' ') }} <small class="text-sm">грн</small>
                                </span>
                                <span class="text-xs font-semibold text-gray-400 uppercase tracking-widest">
                                    В наявності
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection