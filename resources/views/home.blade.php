@extends('layouts.app')

@section('content')
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

@endsection
