@extends('layouts.app')

@section('content')
    {{-- header --}}
    <header class="bg-white shadow">
        <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <img class="border-r pr-4 w-20" src="{{ asset('/images/plnbgg.png') }}">
            <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-300">Admin</h1>
        </div>
    </header>
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">Form Laporan</h1>
            <button class="text-red-500">&times;</button>
        </div>
    
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="namaAkun">
                    Nama Akun
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="namaAkun" type="text" placeholder="Nama Akun" value="Nisa002">
            </div>
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="Email" value="Nisawork2002@gmail.com">
            </div>
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="kategori">
                    Kategori
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="kategori" type="text" placeholder="Kategori" value="Jasa">
            </div>
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="prioritas">
                    Prioritas
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="prioritas" type="text" placeholder="Prioritas" value="Normal">
            </div>
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="deskripsi">
                    Deskripsi
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="deskripsi" rows="3" placeholder="Deskripsi">Produk tidak sesuai poto, benang benangnya tidak rapi</textarea>
            </div>
    
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="potoVidio">
                    Poto / Vidio Produk
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="potoVidio" type="text" placeholder="Poto / Vidio Produk">
            </div>
    
            <div class="flex items-center justify-end">
                <a href="form-respon"
                    class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Jawab
                </a>
            </div>
        </form>
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
