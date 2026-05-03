<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jewelry Store</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .custom-nav { background: #1f2937; color: white; padding: 1rem; display: flex; justify-content: space-between; align-items: center; }
        .custom-nav a { color: white; margin-right: 20px; text-decoration: none; }
        .custom-nav a:hover { text-decoration: underline; }
        .user-info { color: #fbbf24; font-weight: bold; margin-right: 15px; }
        .logout-btn { background: #ef4444; color: white; padding: 5px 12px; border-radius: 4px; border: none; cursor: pointer; }
        .logout-btn:hover { background: #dc2626; }
        main { background: white; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); margin-top: 20px; }
    </style>
</head>

<body class="font-sans antialiased bg-gray-100">
<div class="min-h-screen">

    <nav class="custom-nav">
        <div>
            <a href="/" style="font-size: 1.2rem; font-weight: bold;">Jewelry Store</a>
       <a href="http://localhost:5173/catalog">Каталог</a>
            @auth
                <a href="{{ route('admin.items.index') }}">Адмін-панель</a>
            @endauth
        </div>

        <div>
            @auth
                <span class="user-info">👤 {{ Auth::user()->name }}</span>
                
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="logout-btn">Вихід</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}">Увійти</a>
                <a href="{{ route('register') }}">Реєстрація</a>
            @endguest
        </div>
    </nav>

    @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset

    <main class="max-w-7xl mx-auto p-6">
        @yield('content')
    </main>

</div>
</body>
</html>