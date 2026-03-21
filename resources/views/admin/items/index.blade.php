@extends('layouts.app')

@section('content')

<h1>Адміністративна панель: Список прикрас</h1>

<a href="{{ route('admin.items.create') }}" class="btn btn-primary" style="margin-bottom:15px;">
    Додати нову прикрасу
</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th> <!-- Порядковий номер -->
            <th>Назва</th>
            <th>Ціна</th>
            <th>Дії</th>
        </tr>
    </thead>

    <tbody>

        @foreach($items as $index => $item) <!-- Додаємо $index -->

        <tr>
            <td>{{ $index + 1 }}</td> <!-- Відображення порядкового номера -->

            <td>{{ $item->title }}</td>

            <td>{{ $item->price }} грн</td>

            <td>

                <a href="{{ route('admin.items.show', $item->id) }}" class="btn btn-info">
                    Переглянути
                </a>

                <form action="{{ route('admin.items.destroy', $item->id) }}" method="POST" style="display:inline-block">

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Видалити
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection