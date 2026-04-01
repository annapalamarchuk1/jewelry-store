<nav class="bg-slate-800 border-b border-gray-700 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <div class="flex items-center space-x-8">
                <div class="shrink-0">
                    <a href="/" class="text-white font-bold text-xl tracking-wider hover:text-amber-400 transition">
                         JEWELRY STORE
                    </a>
                </div>

                <div class="hidden sm:flex space-x-4">
                    <x-nav-link href="/" :active="request()->is('/')" class="text-gray-300 hover:text-white">
                        Головна
                    </x-nav-link>

                    @auth
                        <x-nav-link :href="route('admin.items.index')" :active="request()->routeIs('admin.items.*')" class="text-gray-300 hover:text-white">
                            Адмін-панель
                        </x-nav-link>
                    @endauth
                </div>
            </div>

            <div class="flex items-center">
                @auth
                    <div class="flex items-center space-x-4">
                        <span class="text-amber-400 font-semibold text-sm pr-4 border-r border-gray-600">
                              {{ Auth::user()->name }}
                        </span>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-1.5 rounded-lg text-sm font-medium transition shadow-sm">
                                Вихід
                            </button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div class="flex items-center space-x-5">
                        <a href="{{ route('login') }}" class="text-white hover:text-amber-400 text-sm font-bold transition uppercase">
                            Увійти
                        </a>
                        <a href="{{ route('register') }}" class="bg-amber-500 hover:bg-amber-600 text-slate-900 px-5 py-2 rounded-lg text-sm font-bold transition shadow-md uppercase">
                            Реєстрація
                        </a>
                    </div>
                @endguest
            </div>

        </div>
    </div>
</nav>