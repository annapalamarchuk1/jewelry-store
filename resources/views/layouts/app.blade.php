<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

   <style>
.card-image{
    width:100%;
    height:300px;
    object-fit:cover;
}

.detail-image{
    width:100%;
    max-width:500px;  
    height:auto;
    display:block;
    margin:auto;   
}
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Jewelry Store</a>

        <div>
            <a class="nav-link d-inline text-white" href="/">Головна</a>
            <a class="nav-link d-inline text-white" href="/items">Каталог</a>
            <a class="nav-link d-inline text-white" href="/about">Про проєкт</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center p-3 mt-4">
    © 2026 Ювелірна майстерня
</footer>

</body>
</html>