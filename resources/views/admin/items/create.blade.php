@extends('layouts.app')

@section('content')

<div class="container" style="max-width: 600px; margin-top: 30px;">
    <h1 style="margin-bottom: 20px;">Додати нову прикрасу</h1>

    @if(session('success'))
        <div style="color:green; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.items.store') }}" method="POST">
        @csrf

        <!-- Назва -->
        <div style="margin-bottom: 15px;">
            <label>Назва прикраси</label>
            <input type="text" name="title"
                   value="{{ old('title') }}"
                   style="width:100%; padding:8px;">

            @error('title')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <!-- Ціна -->
        <div style="margin-bottom: 15px;">
            <label>Ціна (грн)</label>
            <input type="number" step="0.01" name="price"
                   value="{{ old('price') }}"
                   style="width:100%; padding:8px;">

            @error('price')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <!-- Опис -->
        <div style="margin-bottom: 15px;">
            <label>Опис</label>
            <textarea name="description" style="width:100%; padding:8px;">{{ old('description') }}</textarea>

            @error('description')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <!-- Фото -->
        <div style="margin-bottom: 15px;">
            <label>Зображення (URL)</label>
            <input type="text" name="image"
                   value="{{ old('image') }}"
                   style="width:100%; padding:8px;">
        </div>

        <!-- Кнопки -->
        <button type="submit"
                style="background:#00bcd4; color:white; padding:10px 15px; border:none;">
            Зберегти
        </button>

        <a href="{{ route('admin.items.index') }}"
           style="margin-left:10px;">
            Назад
        </a>

    </form>
</div>

@endsection