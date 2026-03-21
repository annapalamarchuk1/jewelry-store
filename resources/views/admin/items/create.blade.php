@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px; margin-top: 30px;">
    <h1 class="mb-4">Додати нову прикрасу</h1>

    @if(session('success'))
        <div style="color:green; font-size: 1rem; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.items.store') }}" method="POST" style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
        @csrf

        <div class="mb-3">
            <label class="form-label" style="font-weight: bold;">Назва прикраси</label>
            <input type="text" name="title" 
                   class="form-control @error('title') is-invalid @enderror" 
                   value="{{ old('title') }}" 
                   placeholder="Наприклад: Золота каблучка">
            
            @error('title')
                <div style="color:red; font-size: 0.9rem; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" style="font-weight: bold;">Ціна (грн)</label>
            <input type="text" name="price" 
                   class="form-control @error('price') is-invalid @enderror" 
                   value="{{ old('price') }}" 
                   placeholder="0.00">
            
            @error('price')
                <div style="color:red; font-size: 0.9rem; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" style="font-weight: bold;">Опис</label>
            <textarea name="description" rows="4" 
                      class="form-control @error('description') is-invalid @enderror" 
                      placeholder="Опишіть характеристики виробу...">{{ old('description') }}</textarea>
            
            @error('description')
                <div style="color:red; font-size: 0.9rem; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" style="font-weight: bold;">Шлях до зображення (необов'язково)</label>
            <input type="text" name="image" class="form-control" value="{{ old('image') }}" placeholder="images/ring.jpg">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary" style="background-color: #00bcd4; border: none; padding: 10px 20px;">
                Зберегти прикрасу
            </button>
            <a href="{{ route('admin.items.index') }}" class="btn btn-secondary" style="margin-left: 10px;">
                Назад до списку
            </a>
        </div>
    </form>
</div>
@endsection