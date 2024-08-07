@extends('layouts.app')

@section('content')
    {{-- header --}}
    <header class="bg-white shadow">
        <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <img class="border-r pr-4 w-20" src="{{ asset('/images/plnbgg.png') }}">
            <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-300">Pusat Bantuan</h1>
        </div>
    </header>
    <div class="max-w-4xl mx-auto my-8 bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-4">Form Bantuan</h2>
        {{-- edit form untuk backend --}}
        <form action="/riwayatlaporan">
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="namaAkun" class="block text-sm font-medium text-gray-700">Nama Akun <span class="text-red-500">*</span></label>
                    <input type="text" id="namaAkun" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div>
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select id="kategori" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        <option value="barang">Barang</option>
                        <option value="jasa">Jasa</option>
                    </select>
                </div>
                <div>
                    <label for="prioritas" class="block text-sm font-medium text-gray-700">Prioritas</label>
                    <select id="prioritas" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        <option value="tinggi">Tinggi</option>
                        <option value="sedang">Sedang</option>
                        <option value="rendah">Rendah</option>
                    </select>
                </div>
                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi <span class="text-red-500">*</span></label>
                    <textarea id="deskripsi" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded-md"></textarea>
                </div>
                <div>
                    <label for="media" class="block text-sm font-medium text-gray-700">Foto / Video Produk</label>
                    <input type="file" id="media" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded-md">Simpan & Tampilkan</button>
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
