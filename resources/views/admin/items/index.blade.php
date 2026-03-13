@extends('layouts.app')

@section('content')
<h1>Адміністративна панель: Список прикрас</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Назва</th>
            <th>Ціна</th>
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
                    <a href="{{ route('admin.items.show', $item->id) }}" class="btn btn-info">Переглянути</a>
                    <form action="{{ route('admin.items.destroy', $item->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Видалити</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection