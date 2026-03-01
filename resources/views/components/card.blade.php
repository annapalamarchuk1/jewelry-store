@props(['title', 'description', 'price', 'image', 'link'])

<div class="card h-100">
    <img src="{{ $image }}" alt="{{ $title }}" class="card-img-top card-image">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $description }}</p>
    </div>
    <div class="card-footer">
        <small class="text-muted">{{ $price }} ₴</small>
        <a href="{{ $link }}" class="btn btn-primary float-end">Деталі</a>
    </div>
</div>