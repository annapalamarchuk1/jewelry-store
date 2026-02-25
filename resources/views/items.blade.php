<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Каталог прикрас</title>
</head>
<body>
    <h1>Каталог прикрас ювелірної майстерні</h1>
    <ul>
        @foreach($items as $id => $name)
            <li><a href="{{ url('/items/' . $id) }}">{{ $name }}</a></li>
        @endforeach
    </ul>
</body>
</html>