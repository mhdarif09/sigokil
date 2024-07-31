<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Scripts -->
    @vite('resources/js/app.js')
    
    <!-- Styles -->
    @vite('resources/css/app.css')
    
    <style>
        /* Custom styles can be added here */
    </style>
</head>
<body class="bg-gray-100">
    <div id="app">
        <header class="bg-red-800 text-white">
            <div class="container mx-auto p-4 flex justify-between items-center">
                <h1 class="text-3xl font-bold">Si Gokil</h1>
                <nav class="flex justify-between items-center">
                    <div class="flex space-x-3">
                        <a href="#" class="px-3">Seller Centre</a>
                        <a href="#" class="px-3">Bantuan</a>
                    </div>
                    <div class="flex space-x-3">
                        @guest
                            <a href="{{ route('login') }}" class="px-3">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-3">Register</a>
                            @endif
                        @else
                            <a href="{{ url('/dashboard') }}" class="px-3">Dashboard</a>
                        @endguest
                    </div>
                </nav>
            </div>
        </header>
        <div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('images/background.png') }}'); background-color: rgba(0, 0, 0, 0.5); background-blend-mode: overlay;">
            <div class="max-w-md w-full bg-white bg-opacity-90 shadow-md rounded-lg p-8 space-y-6">
                <h2 class="text-2xl font-bold text-center text-gray-900">Register Sigokil</h2>
                <div class="flex justify-around space-x-4">
                    <!-- Card for UMKM Login -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md w-1/2">
                        <h3 class="text-lg font-bold text-center text-gray-900">UMKM</h3>
                        <a href="{{ route('register.umkm') }}">
                            <button type="button" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Daftar UMKM
                            </button>
                        </a>
                    </div>
                    
                    <!-- Card for Customer Login -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md w-1/2">
                        <h3 class="text-lg font-bold text-center text-gray-900">Customer</h3>
                        <a href="{{ route('register') }}">
                            <button type="button" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Daftar Customer
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    @if (Route::has('login'))
                    <a class="text-sm font-medium text-red-800 hover:text-red-800" href="{{ route('login') }}">
                        Sudah punya akun? Login
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
