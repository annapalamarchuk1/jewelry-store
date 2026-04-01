@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            
            <h1 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-4">
                Адміністративна панель: Список прикрас
            </h1>

            <div class="mb-6">
                <a href="{{ route('admin.items.create') }}" class="inline-flex items-center px-4 py-2 bg-cyan-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-cyan-700 active:bg-cyan-900 focus:outline-none focus:border-cyan-900 focus:ring ring-cyan-300 disabled:opacity-25 transition ease-in-out duration-150 shadow-sm">
                    + Додати нову прикрасу
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 shadow-sm" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="overflow-x-auto border border-gray-200 rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">#</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Назва</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Ціна</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Опис</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Фото</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Дії</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($items as $index => $item)
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-b">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-b">{{ $item->title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 font-bold border-b">{{ number_format($item->price, 0, '.', ' ') }} грн</td>
                                <td class="px-6 py-4 text-sm text-gray-500 border-b max-w-xs truncate">{{ $item->description ?? '—' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap border-b">
                                    @if($item->image)
                                        <img src="{{ $item->image }}" class="w-12 h-12 rounded shadow-sm object-cover border border-gray-200">
                                    @else
                                        <span class="text-gray-400">—</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium border-b">
                                    <div class="flex justify-center items-center space-x-3">
                                        <a href="{{ route('admin.items.show', $item->id) }}" class="text-blue-600 hover:text-blue-900 font-semibold underline underline-offset-4">
                                            Переглянути
                                        </a>

                                        <span class="text-gray-300">|</span>

                                        <form action="{{ route('admin.items.destroy', $item->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    onclick="return confirm('Видалити товар?')" 
                                                    class="text-red-600 hover:text-red-900 font-semibold focus:outline-none">
                                                Видалити
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-10 text-center text-gray-500 italic">
                                    Товари поки що відсутні в базі даних.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection