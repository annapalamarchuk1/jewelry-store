@extends('layouts.app')

@section('content')

<h2>{{ $item->title }}</h2> 

<p>Ціна: {{ $item->price }} грн</p>

@if(!empty($item->description))
    <p>{{ $item->description }}</p>
@endif

<img src="{{ asset($item->image) }}" width="300">

<a href="{{ route('items.index') }}" class="btn btn-secondary">Назад</a>

@endsection