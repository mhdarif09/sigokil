<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <title>Sigokil Palembang</title>
</head>

<body class="bg-gray-100">
    <!-- Header -->
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
                            <div class="relative">
                                <button @click="dropdownOpen = !dropdownOpen"
                                    class="px-3 focus:outline-none flex items-center">
                                    <i class="fas fa-user mr-1"></i> Account
                                </button>
                                <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                                    class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10">
                                    <a href="{{ url('/account') }}" class="block px-4 py-2 text-gray-800">Profile</a>
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
                                <a href="{{ route('register') }}" class="px-3 flex items-center">
                                    <i class="fas fa-user-plus mr-1"></i> Register
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-pattern bg-cover text-center py-20">
        <div class="container mx-auto">
            <h2 class="text-5xl font-bold text-gray-800">Si Gokil Palembang</h2>
            <p class="text-xl text-gray-600">Produk UMKM di Kota Palembang</p>
            <div class="mt-8 bg-yellow-500 inline-block px-6 py-4 rounded-lg">
                <h3 class="text-2xl font-bold">Gabung Sekarang!</h3>
                <p class="text-lg">Open Member Si Gokil Palembang</p>
                <ul class="text-left list-disc list-inside mt-4">
                    <li>Jaminan Harga</li>
                    <li>Jaminan Keuntungan</li>
                    <li>Jaminan Kualitas</li>
                    <li>Jaminan Pasar</li>
                    <li>Jaminan Strategi Marketing</li>
                </ul>
                <a href="#" class="mt-4 inline-block bg-red-600 text-white px-4 py-2 rounded-lg">Gabung Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Swiper Section -->
    <section class="py-12">
        <div class="container mx-auto">
            <div class="bg-red-600 text-white text-center p-10 rounded-lg">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-2">
                            <div class="rounded-lg shadow-lg overflow-hidden p-6">
                                <h3 class="text-white font-semibold text-gray-800">Card 1</h3>
                                <p class="text-white-600 mt-4">This is the description for card 1.</p>
                            </div>
                        </div>
                        <div class="swiper-slide p-2">
                            <div class="rounded-lg shadow-lg overflow-hidden p-6">
                                <h3 class="text-white font-semibold text-gray-800">Card 2</h3>
                                <p class="text-white-600 mt-4">This is the description for card 2.</p>
                            </div>
                        </div>
                        <div class="swiper-slide p-2">
                            <div class="rounded-lg shadow-lg overflow-hidden p-6">
                                <h3 class="text-white font-semibold text-gray-800">Card 3</h3>
                                <p class="text-white-600 mt-4">This is the description for card 3.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination mt-4"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Kategori</h2>
            <div class="flex justify-center space-x-8">
                <div class="w-1/3">
                    <img src="{{ asset ('/images/plnbgg.png')}}" alt="Kuliner" class="w-full  object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold">Kuliner</h3>
                </div>
                <div class="w-1/3">
                    <img src="{{ asset ('/images/plnbgg.png')}}" alt="Jasa" class="w-full  object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold">Jasa</h3>
                </div>
                <div class="w-1/3">
                    <img src="{{ asset ('/images/plnbgg.png')}}" alt="Fashion" class="w-full  object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold">Fashion</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk Terlaris Section -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Produk Terlaris</h2>
            <div class="flex justify-center space-x-8">
                <!-- Example Product -->
                <div class="w-1/3 bg-white rounded-lg p-4 shadow-lg">
                    <img src="{{ asset ('/images/plnbgg.png')}}" alt="Produk 1" class="w-full object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Produk 1</h3>
                    <p class="text-lg font-bold text-red-600">Rp 100,000</p>
                </div>
                <div class="w-1/3 bg-white rounded-lg p-4 shadow-lg">
                    <img src="{{ asset ('/images/plnbgg.png')}}" alt="Produk 2" class="w-full object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Produk 2</h3>
                    <p class="text-lg font-bold text-red-600">Rp 150,000</p>
                </div>
                <div class="w-1/3 bg-white rounded-lg p-4 shadow-lg">
                    <img src="{{ asset ('/images/plnbgg.png')}}" alt="Produk 3" class="w-full  object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Produk 3</h3>
                    <p class="text-lg font-bold text-red-600">Rp 200,000</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Rekomendasi Section -->
    <section class="py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Rekomendasi</h2>
            <div class="flex justify-center space-x-8">
                <!-- Example Recommendation -->
                <div class="w-1/3 bg-white rounded-lg p-4 shadow-lg">
                    <img src="{{ asset ('/images/plnbgg.png')}}" alt="Rekomendasi 1" class="w-full object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Rekomendasi 1</h3>
                    <p class="text-lg font-bold text-red-600">Rp 120,000</p>
                </div>
                <div class="w-1/3 bg-white rounded-lg p-4 shadow-lg">
                    <img src="{{ asset ('/images/plnbgg.png')}}" alt="Rekomendasi 2" class="w-full  object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Rekomendasi 2</h3>
                    <p class="text-lg font-bold text-red-600">Rp 180,000</p>
                </div>
                <div class="w-1/3 bg-white rounded-lg p-4 shadow-lg">
                    <img src="{{ asset ('/images/plnbgg.png')}}" alt="Rekomendasi 3" class="w-full  object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Rekomendasi 3</h3>
                    <p class="text-lg font-bold text-red-600">Rp 220,000</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Hubungi Kami Section -->
    <section class="py-12 bg-red-600 text-white text-center">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-4">Hubungi Kami</h2>
            <p class="text-lg">Untuk informasi lebih lanjut, hubungi kami di:</p>
            <p class="text-lg font-semibold mt-2">Email: info@sigokilpalembang.com</p>
            <p class="text-lg font-semibold">Telepon: 0812-3456-7890</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2023 Si Gokil Palembang. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>
