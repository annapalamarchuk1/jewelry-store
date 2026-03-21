@extends('layouts.app')

@section('title', 'Адмін — прикраси')

@section('content')

<h1 class="mb-4">Список прикрас (адмін)</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Назва</th>
            <th>Ціна</th>
            <th>Фото</th>
            <th>Дії</th>
        </tr>
    </thead>

    <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->price }} грн</td>
            <td>
                <img src="{{ $item->image }}" width="80">
            </td>
            <td>
                <a href="{{ route('admin.items.show', ['item' => $item->id]) }}" class="btn btn-info">
                    Переглянути
                </a>

                <form action="{{ route('admin.items.destroy', ['item' => $item->id]) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Видалити
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection