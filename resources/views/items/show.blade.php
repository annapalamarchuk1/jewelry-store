@extends('layouts.app')

@section('content')

<h1>{{ $item->title }}</h1>

<img src="{{ $item->image }}" style="max-width:200px;">

<p>{{ $item->description }}</p>

<p>Ціна: {{ $item->price }} грн</p>

<a href="{{ route('items.index') }}">Назад до каталогу</a>

@endsection