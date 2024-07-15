<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Saldo saya</title>
    <style>
        .saldo-section, .transaksi-section {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .saldo-section .header, .transaksi-section .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .saldo-section .header .detail-bank, .saldo-section .header .info-saldo {
            flex: 1;
        }
        .saldo-section .header .detail-bank {
            display: flex;
            align-items: center;
        }
        .saldo-section .header .detail-bank img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }
        .saldo-section .header .detail-bank .nama-bank, .saldo-section .header .detail-bank .nomor-rekening {
            margin: 0;
        }
        .saldo-section .header .info-saldo {
            text-align: right;
        }
        .saldo-section .header .info-saldo .jumlah-saldo {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }
        .saldo-section .header .info-saldo .tarik-dana-button {
            background-color: #ff8c00;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .transaksi-section table {
            width: 100%;
            border-collapse: collapse;
        }
        .transaksi-section table th, .transaksi-section table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-red-800" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="Beranda" class="rounded-md bg-red-800 px-3 py-2 text-sm font-small text-white hover:bg-gray-700" aria-current="page">Beranda</a>
                                <a href="SellerCentre" class="rounded-md px-3 py-2 text-sm font-small text-gray-300 text-white hover:bg-gray-700 hover:text-white">Seller Centre</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <a href="Keranjang">
                                <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">View notifications</span>
                                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                                    </svg>
                                    <span>Keranjang</span>
                                </button>
                            </a>
                            <a href="Pesanan_saya">
                                <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">View notifications</span>
                                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
                                    </svg>                
                                    <span>Pesanan saya</span>
                                </button>
                            </a>
                            <a href="Bantuan">
                                <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">View notifications</span>
                                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>                              
                                    <span>Bantuan</span>
                                </button>
                            </a>
                            <a href="Akun">
                                <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">View notifications</span>
                                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    </svg>
                                    <span>Akun</span>
                                </button>
                            </a>
                            <div class="relative ml-3">
                                <div x-show="isOpen"
                                    x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                    <a href="keranjang" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Keranjang</a>
                                    <a href="pemberitahuan" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Pemberitahuan</a>
                                    <a href="akun" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Akun</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <a href="Beranda" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Beranda</a>
                    <a href="Seller Centre" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Seller Centre</a>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <img class="border-r pr-4 w-20" src="{{ asset('/images/plnbgg.png') }}">
                <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-300">Saldo Saya</h1>
            </div>
        </header>

         <!-- Sidebar and Main Content -->
         <div class="flex">
            <!-- Sidebar -->
            <aside class="w-1/4 bg-gray-200 p-4">
                <nav class="space-y-4">

                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="w-full text-left block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">
                            Pesanan
                            <svg :class="{'rotate-180': open, 'rotate-0': !open}" class="w-4 h-4 inline-block float-right transition-transform transform">
                                <path d="M5 15l7-7 7 7"/>
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="mt-2 space-y-2">
                            <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Pesanan Saya</a>
                            <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Pembatalan</a>
                            <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Pengaturan Pengiriman</a>
                        </div>

                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" class="w-full text-left block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">
                                Keuangan
                                <svg :class="{'rotate-180': open, 'rotate-0': !open}" class="w-4 h-4 inline-block float-right transition-transform transform">
                                    <path d="M5 15l7-7 7 7"/>
                                </svg>
                            </button>
                            <div x-show="open" x-transition class="mt-2 space-y-2">
                                <a href="PenghasilanSaya" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Penghasilan Saya</a>
                                <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Saldo Saya</a>
                                <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Rekening Bank</a>
                            </div>
    
                        
                            <div x-data="{ open: false }" class="relative">
                                <button @click="open = !open" class="w-full text-left block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">
                                    Produk
                                    <svg :class="{'rotate-180': open, 'rotate-0': !open}" class="w-4 h-4 inline-block float-right transition-transform transform">
                                        <path d="M5 15l7-7 7 7"/>
                                    </svg>
                                </button>
                                <div x-show="open" x-transition class="mt-2 space-y-2">
                                    <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Produk Saya</a>
                                    <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Tambah Produk Baru</a>                           
                                </div>
    
    
                                <div x-data="{ open: false }" class="relative">
                                    <button @click="open = !open" class="w-full text-left block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">
                                        Toko
                                        <svg :class="{'rotate-180': open, 'rotate-0': !open}" class="w-4 h-4 inline-block float-right transition-transform transform">
                                            <path d="M5 15l7-7 7 7"/>
                                        </svg>
                                    </button>
                                    <div x-show="open" x-transition class="mt-2 space-y-2">
                                        <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Profil Toko</a>
                                        <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Pengaturan Toko</a>                           
                                    </div>
                    </nav>
                </aside>

        <main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="saldo-section">
                    <div class="header">
                        <div class="detail-bank">
                            <img src="https://via.placeholder.com/50" alt="Logo Bank">
                            <div>
                                <h3 class="nama-bank">Nama Bank</h3>
                                <p class="nomor-rekening">Nomor Rekening</p>
                            </div>
                        </div>
                        <div class="info-saldo">
                            <p class="jumlah-saldo">Rp. 1.000.000</p>
                            <button class="tarik-dana-button">Tarik Dana</button>
                        </div>
                    </div>
                </div>

                <div class="transaksi-section">
                    <div class="header">
                        <h2>Transaksi Terbaru</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01/01/2024</td>
                                <td>Pembelian Produk A</td>
                                <td>Rp. 500.000</td>
                                <td>Selesai</td>
                            </tr>
                            <tr>
                                <td>02/01/2024</td>
                                <td>Pembelian Produk B</td>
                                <td>Rp. 300.000</td>
                                <td>Selesai</td>
                            </tr>
                            <tr>
                                <td>03/01/2024</td>
                                <td>Penarikan Saldo</td>
                                <td>Rp. 200.000</td>
                                <td>Selesai</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
