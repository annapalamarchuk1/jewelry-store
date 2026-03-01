@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
<h1 class="mb-4">Каталог прикрас</h1>

<div class="row row-cols-1 row-cols-md-3 g-4">

    <div class="col">
        <x-card 
            title="Золота каблучка"
            description="Вишукана каблучка із золота 585 проби."
            price="3500"
            image="/images/ring.jpg"
            link="/items/1"
        />
    </div>

    <div class="col">
        <x-card 
            title="Срібний ланцюжок"
            description="Класичний срібний ланцюжок."
            price="1800"
            image="/images/chain.jpg"
            link="/items/2"
        />
    </div>

    <div class="col">
        <x-card 
            title="Підвіска з камінням"
            description="Елегантна підвіска з декоративним камінням."
            price="2200"
            image="/images/pendant.jpg"
            link="/items/3"
        />
    </div>

</div>
@endsection