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
    <header class="bg-red-800 text-white">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Si Gokil</h1>
            <nav class="flex justify-between items-center">
                <div class="flex space-x-3">
                    <a href="seller" class="px-3 flex items-center">
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
                <a href="#" class="mt-4 inline-block bg-red-800 text-white px-4 py-2 rounded-lg">Gabung Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Swiper Section -->
    <section class="py-12">
        <div class="container mx-auto">
            <div class="bg-red-800 text-white text-center p-10 rounded-lg">
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
                    <img src="{{ asset('/images/plnbgg.png') }}" alt="Kuliner" class="w-full object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold">Kuliner</h3>
                </div>
                <div class="w-1/3">
                    <img src="{{ asset('/images/plnbgg.png') }}" alt="Jasa" class="w-full object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold">Jasa</h3>
                </div>
                <div class="w-1/3">
                    <img src="{{ asset('/images/plnbgg.png') }}" alt="Fashion" class="w-full object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold">Fashion</h3>
                </div>
            </div>
        </div>
    </section>

<<<<<<< HEAD
    <!-- Produk Terlaris Section -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Produk Terlaris</h2>
            <div class="flex justify-center space-x-8">
                @foreach($products as $product)
                    <div class="w-1/3 bg-white rounded-lg p-4 shadow-lg">
                        <a href="{{ route('product.show', $product->id) }}">
                            <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" class="w-full object-cover rounded-lg mb-4">
                            <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
                            <p class="text-lg font-bold text-red-800">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        </a>
=======
    <!-- Product List Section -->
    <section class="py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Daftar Produk</h2>
            <div class="flex flex-wrap justify-center space-x-8">
                @foreach ($products as $product)
                    <div class="w-1/3 bg-white rounded-lg p-4 shadow-lg mb-4">
                        <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" class="w-full object-cover rounded-lg mb-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
                        <p class="text-lg font-bold text-red-800">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <p class="text-gray-600">{{ $product->description }}</p>
                        <p class="text-gray-600">Stok: {{ $product->stock }}</p>
                        <p class="text-gray-600">Kategori: {{ $product->category }}</p>
                        <p class="text-gray-600">Kondisi: {{ $product->condition == 'new' ? 'Baru' : 'Bekas' }}</p>
                        <p class="text-gray-600">Preorder: {{ $product->preorder ? 'Ya' : 'Tidak' }}</p>
>>>>>>> 0caf3644662b89ca4e7d102a37cf8e379de4a351
                    </div>
                @endforeach
            </div>
        </div>
    </section>

<<<<<<< HEAD
=======
 <!-- Recommend List Section -->
 <section class="py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Recommend Produk</h2>
            <div class="flex flex-wrap justify-center space-x-8">
                @foreach ($products as $product)
                    <div class="w-1/3 bg-white rounded-lg p-4 shadow-lg mb-4">
                        <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" class="w-full object-cover rounded-lg mb-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
                        <p class="text-lg font-bold text-red-800">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <p class="text-gray-600">{{ $product->description }}</p>
                        <p class="text-gray-600">Stok: {{ $product->stock }}</p>
                        <p class="text-gray-600">Kategori: {{ $product->category }}</p>
                        <p class="text-gray-600">Kondisi: {{ $product->condition == 'new' ? 'Baru' : 'Bekas' }}</p>
                        <p class="text-gray-600">Preorder: {{ $product->preorder ? 'Ya' : 'Tidak' }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Hubungi Kami Section -->
    <section class="py-12 bg-red-800 text-white text-center">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-4">Hubungi Kami</h2>
            <p class="text-lg">Untuk informasi lebih lanjut, hubungi kami di:</p>
            <p class="text-lg font-semibold mt-2">Email: info@sigokilpalembang.com</p>
            <p class="text-lg font-semibold">Telepon: 0812-3456-7890</p>
        </div>
    </section>

>>>>>>> 0caf3644662b89ca4e7d102a37cf8e379de4a351
    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto p-4">
            <div class="flex justify-between items-center">
                <p>&copy; 2023 Sigokil Palembang. All rights reserved.</p>
                <ul class="flex space-x-4">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Add Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
</body>

</html>
