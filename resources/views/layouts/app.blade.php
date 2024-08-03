<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div id="app">
        <header class="bg-red-600 text-white">
            <div class="container mx-auto p-4 flex justify-between items-center">
                <h1 class="text-3xl font-bold">Si Gokil</h1>
                <nav class="flex justify-between items-center">
                    <div class="flex space-x-3">
                        <a href="#" class="px-3 flex items-center">
                            <i class="fas fa-store mr-1"></i> Seller Centre
                        </a>
                        <a href="#" class="px-3 flex items-center">
                            <i class="fas fa-info-circle mr-1"></i> Bantuan
                        </a>
                    </div>
                    <div class="flex space-x-3 relative" x-data="{ dropdownOpen: false }">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ route('keranjang.home') }}" class="px-3 flex items-center">
                                    <i class="fas fa-shopping-cart mr-1"></i> Keranjang
                                </a>
                                <div class="relative">
                                    <button @click="dropdownOpen = !dropdownOpen"
                                            class="px-3 flex items-center focus:outline-none">
                                        <i class="fas fa-user mr-1"></i> My Account
                                    </button>
                                    <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                                         class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10">
                                        <a href="{{ url('/myaccount') }}" class="block px-4 py-2 text-gray-800">Profile</a>
                                        <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2">
                                            @csrf
                                            <button type="submit" class="text-gray-800 w-full text-left">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="px-3 flex items-center">
                                    <i class="fas fa-sign-in-alt mr-1"></i> Log in
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('auth.lp-register') }}" class="px-3 flex items-center">
                                        <i class="fas fa-user-plus mr-1"></i> Register
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </nav>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
