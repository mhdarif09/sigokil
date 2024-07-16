<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Keranjang</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-red-800" x-data="{ isOpen: false, isAccountOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="Beranda"
                                    class="rounded-md bg-red-800 px-3 py-2 text-sm font-small text-white hover:bg-gray-700"
                                    aria-current="page">Beranda</a>
                                <a href="SellerCentre"
                                    class="rounded-md px-3 py-2 text-sm font-small text-gray-300 text-white hover:bg-gray-700 hover:text-white">Seller
                                    Centre</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <a href="Keranjang">
                                <button type="button"
                                    class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Lihat notifikasi</span>
                                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                                    </svg>
                                    <span>Keranjang</span>
                                </button>
                            </a>

                            <a href="Pesanan_saya">
                                <button type="button"
                                    class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Lihat notifikasi</span>
                                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z" />
                                    </svg>
                                    <span>Pesanan saya</span>
                                </button>
                            </a>

                            <a href="Bantuan">
                                <button type="button"
                                    class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Lihat notifikasi</span>
                                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span>Bantuan</span>
                                </button>
                            </a>

                            <div class="relative ml-3" x-data="{ open: false }">
                                <button @click="open = !open"
                                    class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Lihat notifikasi</span>
                                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>Akun</span>
                                </button>
                                <div x-show="open" @click.outside="open = false"
                                    x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <a href="akun" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Akun Saya</a>
                                    <a href="logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Log out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Tombol menu mobile -->
                        <button type="button"
                            class="inline-flex items-center justify-center rounded-md bg-gray-900 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false" @click="isOpen = !isOpen">
                            <span class="sr-only">Buka menu utama</span>
                            <!-- Ikon saat menu tertutup. -->
                            <!--
                                Heroicon name: outline/bars-3

                                Menu terbuka: "hidden", Menu tertutup: "block"
                            -->
                            <svg class="block h-6 w-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu mobile, tampilkan/sembunyikan berdasarkan status menu. -->
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="Beranda" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Beranda</a>
                    <a href="SellerCentre"
                        class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Seller Centre</a>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <img class="border-r pr-4 w-20" src="{{ asset("/images/plnbgg.png") }}">
                <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-300">Keranjang Belanja</h1>
            </div>
        </header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Konten Anda -->
                <div class="grid grid-cols-1 gap-4">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full mb-4">
                            <thead>
                                <tr class="bg-white-200">
                                    <th class="p-2 "><input type="checkbox" class="form-checkbox h-5 w-5 text-white-600">
                                    </th>
                                    <th class="p-2 ">Produk</th>
                                    <th class="p-2 "></th>
                                    <th class="p-2 ">Variasi</th>
                                    <th class="p-2 ">Harga Satuan</th>
                                    <th class="p-2 ">Kuantitas</th>
                                    <th class="p-2 ">Total Harga</th>
                                    <th class="p-2 ">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class=" bg-white-100">
                                    <td class="text-center p-2 "><input type="checkbox"
                                            class="form-checkbox h-5 w-5 text-white-600"></td>
                                    <td colspan="2" class="p-2 ">Nama Toko</td>
                                    <td colspan="4" class="p-2 "></td>
                                </tr>
                                <tr class="">
                                    <td class="text-center p-2 "><input type="checkbox"
                                            class="form-checkbox h-5 w-5 text-white-600"></td>
                                    <td class="p-2 ">Nama Produk</td>
                                    <td class="p-2 ">Foto Produk</td>
                                    <td class="p-2 ">Warna/Rasa</td>
                                    <td class="p-2 ">Rp xxx</td>
                                    <td class="p-2 ">x</td>
                                    <td class="p-2 ">Rp xxx</td>
                                    <td class="p-2  text-dark-500 cursor-pointer">Hapus</td>
                                </tr>
                                <tr class="">
                                    <td class=" text-center p-2 "><input type="checkbox"
                                            class="form-checkbox h-5 w-5 text-white-600"></td>
                                    <td colspan="2" class="p-2 ">Nama Toko</td>
                                    <td colspan="4" class="p-2 "></td>
                                </tr>
                                <tr class="">
                                    <td class="text-center p-2 "><input type="checkbox"
                                            class="form-checkbox h-5 w-5 text-white-600"></td>
                                    <td class="p-2 ">Nama Produk</td>
                                    <td class="p-2 ">Foto Produk</td>
                                    <td class="p-2 ">Warna/Rasa</td>
                                    <td class="p-2 ">Rp xxx</td>
                                    <td class="p-2 ">x</td>
                                    <td class="p-2 ">Rp xxx</td>
                                    <td class="p-2  text-dark-500 cursor-pointer">Hapus</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex justify-between items-center  p-2">
                        <div class="flex items-center space-x-4">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-white-600">
                            <span class="font-semibold">Pilih semua</span>
                        </div>
                        <div class="flex items-center">
                            <span class="font-semibold">Total:</span>
                            <span class="text-lg font-bold">Rp XXXX</span>
                        </div>
                        <a href="Checkout"
                        <button
                            class="bg-red-700 rounded-full px-6 py-2 text-white text-center">
                            <span>Beli Sekarang</span> 
                        </button>
                    </a>
                    </div>
                </div>
            </div>
        </main>

    </div>
</body>

</html>
