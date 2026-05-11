@extends('layouts.app')

@section('content')

<div class="container" style="max-width: 600px; margin-top: 30px;">
    <h1 style="margin-bottom: 20px;">Редагувати прикрасу</h1>

    @if(session('success'))
        <div style="color:green; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Назва -->
        <div style="margin-bottom: 15px;">
            <label>Назва прикраси</label>
            <input type="text" name="title"
                   value="{{ old('title', $item->title) }}"
                   style="width:100%; padding:8px;">

            @error('title')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <!-- Ціна -->
        <div style="margin-bottom: 15px;">
            <label>Ціна (грн)</label>
            <input type="number" step="0.01" name="price"
                   value="{{ old('price', $item->price) }}"
                   style="width:100%; padding:8px;">

            @error('price')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <!-- Опис -->
        <div style="margin-bottom: 15px;">
            <label>Опис</label>
            <textarea name="description" style="width:100%; padding:8px;">{{ old('description', $item->description) }}</textarea>

            @error('description')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <!-- Фото -->
        <div style="margin-bottom: 15px;">
            <label>Зображення (URL)</label>
            <input type="text" name="image"
                   value="{{ old('image', $item->image) }}"
                   style="width:100%; padding:8px;">
        </div>

        <!-- Категорія -->
        <div style="margin-bottom: 15px;">
            <label>Категорія</label>
            <input type="text" name="category"
                   value="{{ old('category', $item->category) }}"
                   style="width:100%; padding:8px;">
        </div>

        <!-- Кнопки -->
        <button type="submit"
                style="background:#D4AF37; color:white; padding:10px 15px; border:none; cursor:pointer;">
            Зберегти зміни
        </button>

        <a href="{{ route('admin.items.index') }}"
           style="margin-left:10px;">
            Назад
        </a>

    </form>
</div>

@endsection