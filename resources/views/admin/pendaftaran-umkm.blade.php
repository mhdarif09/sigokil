@extends('layouts.app')

@section('content')
    {{-- header --}}
    <header class="bg-white shadow">
        <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <img class="border-r pr-4 w-20" src="{{ asset('/images/plnbgg.png') }}">
            <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-300">Admin</h1>
        </div>
    </header>
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/5 bg-white border-r border-gray-300 p-4">
            <h2 class="text-xl font-bold mb-4">Admin</h2>
            <ul>
                <li class="mb-2">
                    <a href="#" class="block p-2 border border-orange-500 rounded text-orange-500 hover:bg-orange-500 hover:text-white">Pendaftaran</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block p-2 border border-orange-500 rounded text-orange-500 hover:bg-orange-500 hover:text-white">Transaksi</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block p-2 border border-orange-500 rounded text-orange-500 hover:bg-orange-500 hover:text-white">Bantuan</a>
                </li>
                <li>
                    <a href="#" class="block p-2 border border-orange-500 rounded text-orange-500 hover:bg-orange-500 hover:text-white">FAQ</a>
                </li>
            </ul>
        </div>
    
        <!-- Main Content -->
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold text-yellow-400 mb-4">Pusat Bantuan</h1>
            <div class="flex">

                <!-- Form Content -->
                <div class="w-full p-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <!-- Tabs -->
                        <div class="flex mb-4">
                            <button class="py-2 px-4 bg-yellow-300 rounded-l-lg">Pendaftaran</button>
                            <button class="py-2 px-4 bg-gray-100 rounded-r-lg">Transaksi</button>
                        </div>
                        <div class="flex mb-4">
                            <button class="py-2 px-4 bg-gray-200 rounded-l-lg">Costumer</button>
                            <button class="py-2 px-4 bg-gray-100 rounded-r-lg">UMKM</button>
                        </div>

                        <!-- Form -->
                        <div class="bg-white border rounded-lg p-4 w-full">
                            <form>
                                <div class="mb-4 flex items-center">
                                    <label for="name" class="w-1/4">Nama :</label>
                                    <input type="text" id="name" class="w-3/4 border rounded p-2">
                                </div>
                                <div class="mb-4 flex items-center">
                                    <label for="email" class="w-1/4">Email :</label>
                                    <input type="email" id="email" class="w-3/4 border rounded p-2">
                                </div>
                                <div class="mb-4 flex items-center">
                                    <label for="address" class="w-1/4">Alamat :</label>
                                    <input type="text" id="address" class="w-3/4 border rounded p-2">
                                </div>
                                <div class="mb-4 flex items-center">
                                    <label for="address" class="w-1/4">Tanggal Lahir :</label>
                                    <input type="text" id="address" class="w-3/4 border rounded p-2">
                                </div>
                                <div class="mb-4 flex items-center">
                                    <label for="address" class="w-1/4">Jenis Kelamin :</label>
                                    <input type="text" id="address" class="w-3/4 border rounded p-2">
                                </div>
                                <div class="mb-4 flex items-center">
                                    <label for="address" class="w-1/4">Jenis Usaha :</label>
                                    <input type="text" id="address" class="w-3/4 border rounded p-2">
                                </div>
                                <div class="mb-4 flex items-center">
                                    <label for="password" class="w-1/4">Password :</label>
                                    <input type="password" id="password" class="w-3/4 border rounded p-2">
                                </div>
                                <div class="mb-4 flex items-center">
                                    <label for="account-number" class="w-1/4">No. Rekening :</label>
                                    <input type="text" id="account-number" class="w-3/4 border rounded p-2">
                                </div>
                                <div class="mb-4 flex items-center">
                                    <label for="account-name" class="w-1/4">Nama rekening :</label>
                                    <input type="text" id="account-name" class="w-3/4 border rounded p-2">
                                </div>
                                <div class="mb-4 flex items-center">
                                    <label for="address" class="w-1/4">Nama Bank :</label>
                                    <input type="text" id="address" class="w-3/4 border rounded p-2">
                                </div>
                                <div class="mb-4 flex items-center">
                                    <label for="address" class="w-1/4">Rating :</label>
                                    <input type="text" id="address" class="w-3/4 border rounded p-2">
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="py-2 px-4 bg-orange-500 text-white rounded">Blokir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
