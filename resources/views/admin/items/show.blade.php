@extends('layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 20px; margin-top: 20px;">

    <div style="flex: 1;">
        <h1>{{ $item->title }}</h1>
        <p><strong>ID:</strong> {{ $item->id }}</p>
        <p><strong>Ціна:</strong> {{ $item->price }} грн</p>
        @if(!empty($item->description))
            <p><strong>Опис:</strong> {{ $item->description }}</p>
        @endif
    </div>

    <div style="flex: 0 0 400px;">
        @if($item->image)
            <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" width="400" 
                 style="border: 1px solid #ccc; border-radius: 5px; box-shadow: 2px 2px 8px rgba(0,0,0,0.2);">
        @endif
    </div>
</div>

<div style="text-align: center; margin-top: 20px;">
    <a href="{{ route('admin.items.index') }}" class="btn btn-secondary">Назад</a>
</div>
@endsection