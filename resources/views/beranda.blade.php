<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Beranda</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-red-800" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-6 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="w-20" src="{{ asset("/images/plnbgg.png") }}">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="Beranda" class="rounded-md bg-red-800 px-3 py-2 text-sm font-small text-white hover:bg-gray-700" aria-current="page"></a>
                                <a href="SellerCentre" class="rounded-md px-3 py-2 text-sm font-small text-gray-300 text-white hover:bg-gray-700 hover:text-white"></a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-6 flex items-center md:ml-6">
                            <a href="SellerCentre"
                            <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <span>Seller Centre</span>
                            </button>
                        </a>


                            <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <span>Bantuan</span>
                            </button>

                            <a href="Masuk"
                            <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <span>Masuk</span>
                            </button>

                            <a href="Daftar"
                            <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <span>Daftar</span>
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Bagian Hero -->
        <div class="bg-white">
            <div class="container mx-auto px-6 py-12">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-gray-800">Selamat Datang di Toko Kami</h1>
                    <p class="mt-4 text-gray-600">Temukan produk terbaik dengan harga terjangkau</p>
                    <a href="#produk" class="mt-8 inline-block bg-red-800 text-white py-3 px-6 rounded-md hover:bg-red-700">Belanja Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Bagian Produk -->
        <div id="produk" class="container mx-auto px-6 py-12">
            <h2 class="text-2xl font-bold text-gray-800">Produk Terbaru</h2>
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Contoh produk -->
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-800">Produk 1</h3>
                        <p class="mt-2 text-gray-600">Deskripsi singkat produk 1.</p>
                        <p class="mt-4 text-red-800 font-bold">Rp 100.000</p>
                        <a href="#" class="mt-4 inline-block bg-red-800 text-white py-2 px-4 rounded-md hover:bg-red-700">Beli Sekarang</a>
                    </div>
                </div>
                <!-- Tambahkan produk lainnya sesuai kebutuhan -->
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-800">Produk 1</h3>
                        <p class="mt-4 text-gray-600">Deskripsi singkat produk 1.</p>
                        <p class="mt-6 text-red-800 font-bold">Rp 100.000</p>
                        <a href="#" class="mt-4 inline-block bg-red-800 text-white py-2 px-4 rounded-md hover:bg-red-700">Beli Sekarang</a>
                    </div>
                </div>

                    <div class="bg-white rounded-lg shadow-md">
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800">Produk 1</h3>
                            <p class="mt-2 text-gray-600">Deskripsi singkat produk 1.</p>
                            <p class="mt-4 text-red-800 font-bold">Rp 100.000</p>
                            <a href="#" class="mt-4 inline-block bg-red-800 text-white py-2 px-4 rounded-md hover:bg-red-700">Beli Sekarang</a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md">
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800">Produk 1</h3>
                            <p class="mt-2 text-gray-600">Deskripsi singkat produk 1.</p>
                            <p class="mt-4 text-red-800 font-bold">Rp 100.000</p>
                            <a href="#" class="mt-4 inline-block bg-red-800 text-white py-2 px-4 rounded-md hover:bg-red-700">Beli Sekarang</a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md">
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800">Produk 1</h3>
                            <p class="mt-2 text-gray-600">Deskripsi singkat produk 1.</p>
                            <p class="mt-4 text-red-800 font-bold">Rp 100.000</p>
                            <a href="#" class="mt-4 inline-block bg-red-800 text-white py-2 px-4 rounded-md hover:bg-red-700">Beli Sekarang</a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md">
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800">Produk 1</h3>
                            <p class="mt-2 text-gray-600">Deskripsi singkat produk 1.</p>
                            <p class="mt-4 text-red-800 font-bold">Rp 100.000</p>
                            <a href="#" class="mt-4 inline-block bg-red-800 text-white py-2 px-4 rounded-md hover:bg-red-700">Beli Sekarang</a>
                        </div>
                    </div>
                    <!-- Footer -->
                    <footer class="bg-gray-800 text-white py-8 mt-16">
                        <div class="container mx-auto text-center">
                            <div class="mb-10 py-12">
                                <h2 class="text-2xl font-bold">Toko Kami</h2>
                                <p class="mt-2">Temukan produk terbaik dengan harga terjangkau.</p>
                            </div>
                            <div class="flex justify-center space-x-4">
                                <a href="#" class="hover:underline">Home</a>
                                <a href="#" class="hover:underline">Produk</a>
                                <a href="#" class="hover:underline">Tentang Kami</a>
                                <a href="#" class="hover:underline">Kontak</a>
                            </div>
                            <div class="mt-10 ">
                                <p>&copy; 2024 Toko Kami. All rights reserved.</p>
                            </div>
                        </div>
                    </footer>
                 </div>
                </div>
            </body>
        </html>