@extends('layouts.app')

@section('content')
    {{-- header --}}
    <header class="bg-white shadow">
        <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <img class="border-r pr-4 w-20" src="{{ asset('/images/plnbgg.png') }}">
            <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-300">Pusat Bantuan</h1>
        </div>
    </header>

    <div class="flex items-center space-x-4 mb-6">
        <a href="/formbantuan" class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 bg-yellow-500 text-white">Tambah Bantuan</a>
    </div>
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-lg font-semibold">Bantuan Saya</h1>
        <a href="riwayatlaporan" class="text-sm font-semibold leading-6 text-black">Lihat Semua<span aria-hidden="true">→</span></a>
    </div>

    <p class="text-center mb-6">Anda Memiliki xxx Laporan</p>

    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-semibold">Pusat Bantuan</h1>
    </div>

    <!-- Help List -->
    <div class="space-y-4">
        <div class="border p-4 rounded shadow">
            <p class="font-semibold">Bagaimana jika lupa password?</p>
        </div>
        <div class="border p-4 rounded shadow">
            <p class="font-semibold">Bagaimana cara mendaftar sebagai member UMKM / Costumer?</p>
        </div>
        <div class="border p-4 rounded shadow">
            <p class="font-semibold">Bagaimana cara menambahkan produk UMKM?</p>
        </div>
        <div class="border p-4 rounded shadow">
            <p class="font-semibold">Bagaimana jika ingin membatalkan pesanan?</p>
        </div>
        <div class="border p-4 rounded shadow">
            <p class="font-semibold">Bagaimana cara penarikan dana UMKM?</p>
        </div>
    </div>
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


@endsection
