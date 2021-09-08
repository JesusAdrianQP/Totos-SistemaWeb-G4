<nav class="bg-transparent">
    <div class="container px-6 py-4 mx-auto">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between">
                <div class="text-xl font-semibold text-gray-700">
                    
                    <a class="text-2xl font-bold text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="/"><img src="{{ asset('image/logo.png') }}" alt="logo" width="130px"></a>
                </div>
        
                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        
            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="hidden -mx-4 lg:flex lg:items-center">
                <a href="/" class="block mx-4 mt-2 text-sm text-white capitalize lg:mt-0 hover:underline">Inicio</a>
                <a href="{{route('dishes.offers')}}" class="block mx-4 mt-2 text-sm text-white capitalize lg:mt-0 hover:underline">Menú</a>
                <a href="/offices" class="block mx-4 mt-2 text-sm text-white capitalize lg:mt-0 hover:underline">Sucursales</a>
                <a href="{{route('dishes.offers')}}" class="mx-4 mt-2 text-sm text-white bg-primero-500 rounded-lg py-2 px-4 capitalize lg:mt-0 hover:text-primero-500 hover:bg-white grid grid-cols-4 gap-1 w-36">
                    <span class="col-span-3">¡ORDENA YA! </span>
                    <svg class="w-6 h-6 text-center" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</nav>