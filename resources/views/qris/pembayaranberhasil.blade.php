<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Pembayaran berhasil</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-red-800" x-data="{ isOpen: false, accountMenu: false }">
            <!-- Navigation Content -->
        </nav>
    
        <header class="bg-white shadow">
            <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <img class="border-r pr-4 w-20" src="{{ asset('/images/plnbgg.png') }}">
                <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-300">Pembayaran</h1>
            </div>
        </header>
    
        <main>
            <div class="mx-auto max-w-7xl px-6 py-6 sm:px-6 lg:px-8 flex items-center justify-center min-h-screen">
                <div class="bg-orange-900 w-80 p-6 rounded-lg shadow-lg text-center">
                    <div class="mb-4">
                        <svg class="mx-auto w-12 h-12 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h2 class="text-white text-xl font-semibold">Pembayaran Berhasil !</h2>
                    <p class="mt-2 text-lg font-semibold">Total: <span class="font-normal">Rp. {{ session('total') ? number_format(session('total'), 2) : 'N/A' }}</span></p>
                    <p class="text-lg font-semibold">Order ID: <span class="font-normal">{{ session('orderId') ? session('orderId') : 'N/A' }}</span></p>
                    <div class="bg-white py-4 px-2 mt-4 rounded-b-lg">
                        <p class="text-gray-500 text-sm">Kembali otomatis dalam 59 detik</p>
                        <a href="{{route ('home')}}"><button class="mt-2 bg-gray-900 text-white py-2 px-4 rounded-lg">Kembali ke merchant</button></a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
