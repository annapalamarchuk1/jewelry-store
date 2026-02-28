@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
<h1>Каталог прикрас</h1>

<ul>
    @foreach($items as $item)
        <li>
            <a href="/items/{{ array_search($item, $items) }}">
                {{ $item }}
            </a>
        </li>
    @endforeach
</ul>
@endsection