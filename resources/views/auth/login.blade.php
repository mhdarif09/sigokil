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
                <h2 class="text-2xl font-bold text-center text-gray-900">Log in</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input id="email" type="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-800 focus:border-red-800 sm:text-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="text-red-800 text-sm mt-1" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" type="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-800 focus:border-red-800 sm:text-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="text-red-800 text-sm mt-1" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-red-800 focus:ring-red-800 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="text-sm font-medium text-red-800 hover:text-red-800" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                        @endif
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Log in
                        </button>
                    </div>
                    <div class="mt-6 text-center">
                        @if (Route::has('register'))
                        <a class="text-sm font-medium text-red-800 hover:text-red-800" href="{{ route('register') }}">
                            Belum punya akun? DAFTAR
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>