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
        .sidebar {
            width: 200px;
            background-color: #f8f8f8;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            height: 100vh;
        }
        .sidebar button {
            width: 100%;
            padding: 10px 20px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            background-color: #fff;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: left;
        }
        .sidebar button:hover {
            background-color: #eee;
        }
        .sidebar button span {
            margin-left: 10px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .rekening-bank {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .rekening-bank h2 {
            margin-top: 0;
        }
        .tambah-rekening {
            border: 2px dashed #ccc;
            padding: 40px;
            text-align: center;
            cursor: pointer;
            color: #888;
        }
    </style>
</head>

<body class="min-h-full">
    <nav class="bg-red-800" x-data="{ isOpen: false, accountMenu: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="Beranda">
                                <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">View notifications</span>
                                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
                                    </svg>
                                    <span>Beranda</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="relative" @click.away="accountMenu = false" @close.stop="accountMenu = false">
                    <button @click="accountMenu = !accountMenu" type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                        <span class="sr-only">View notifications</span>
                        <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <span>Akun</span>
                    </button>
                    <div x-show="accountMenu" x-transition:enter="transition ease-out duration-100 transform"
                         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                         role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="akun" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Akun Saya</a>
                        <a href="logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Log Out</a>
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
                    <a href="seller" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Seller Centre</a>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto flex items-center max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <img class="border-r pr-4 w-20" src="{{ asset('/images/plnbgg.png') }}">
                <h1 class="text-3xl ml-6 font-bold tracking-tight text-yellow-300">Seller Centre</h1>
                <h2 class="ml-10 text-lg font-normal text-gray-300">Keuangan</h2>
                <svg class="ml-6 text-lg text-slate-300 light:text-slate-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 16 4-4-4-4"/>
                </svg>
                <h2 class="ml-10  text-lg font-normal text-black">Saldo Saya</h2>
                <svg class="ml-6 text-lg text-slate-300 light:text-slate-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 16 4-4-4-4"/>
                </svg>
                <h2 class="ml-10 text-lg font-normal text-back">Tambah Rekening Bank</h2>
            </div>
        </header>

        <!-- Main Content -->
        <main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex">
                <!-- Sidebar -->
                <aside class="w-1/4">
                    <ul class="space-y-4">
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" class="w-full text-left block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">
                                Pesanan
                                <svg :class="{'rotate-180': open, 'rotate-0': !open}" class="w-4 h-4 inline-block float-right transition-transform transform">
                                    <path d="M5 15l7-7 7 7" />
                                </svg>
                            </button>
                            <div x-show="open" x-transition class="mt-2 space-y-2">
                                <a href="pesanan_saya" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Pesanan Saya</a>
                                <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Pembatalan</a>
                                <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Pengaturan Pengiriman</a>
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" class="w-full text-left block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">
                                Keuangan
                                <svg :class="{'rotate-180': open, 'rotate-0': !open}" class="w-4 h-4 inline-block float-right transition-transform transform">
                                    <path d="M5 15l7-7 7 7" />
                                </svg>
                            </button>
                            <div x-show="open" x-transition class="mt-2 space-y-2">
                                <a href="penghasilan" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Penghasilan Saya</a>
                                <a href="saldo" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Saldo Saya</a>
                                <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Rekening Bank</a>
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" class="w-full text-left block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">
                                Produk
                                <svg :class="{'rotate-180': open, 'rotate-0': !open}" class="w-4 h-4 inline-block float-right transition-transform transform">
                                    <path d="M5 15l7-7 7 7" />
                                </svg>
                            </button>
                            <div x-show="open" x-transition class="mt-2 space-y-2">
                                <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Produk Saya</a>
                                <a href="seller/products/create" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Tambah Produk Baru</a>
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" class="w-full text-left block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">
                                Toko
                                <svg :class="{'rotate-180': open, 'rotate-0': !open}" class="w-4 h-4 inline-block float-right transition-transform transform">
                                    <path d="M5 15l7-7 7 7" />
                                </svg>
                            </button>
                            <div x-show="open" x-transition class="mt-2 space-y-2">                              
                                <a href="akun" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Profil Toko </a>
                                <a href="#" class="block py-2 px-4 bg-white rounded shadow hover:bg-gray-100">Pengaturan Toko</a>
                            </div>
                        </div>
                    </ul>
                </aside>

               <!-- Main Section -->
            <div class="w-3/4 mx-auto p-4">
                <!-- Rekening Bank Section -->
                <section class="rekening-bank" x-data="{ showModal: false }">
                    <h2 class="text-2xl font-bold mb-4">Tambah Rekening Bank</h2>
                    <div class="tambah-rekening bg-white-500 text-white p-4 rounded cursor-pointer" @click="showModal = true">
                        <p class="text-center">+ Tambah Rekening Bank Baru</p>
                    </div>

                   <!-- Modal -->
<div x-show="showModal" class="fixed inset-0 flex items-center justify-center z-50" style="display: none;">
    <div class="bg-black opacity-50 absolute inset-0" @click="showModal = false"></div>
    <div class="bg-white p-6 rounded shadow-lg relative z-10">
        <h2 class="text-xl font-bold mb-4">Rekening Bank</h2>
        <form action="{{ route('seller.penghasilan.tambahrekening') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="bank_name" class="block text-sm font-medium text-gray-700">Nama Bank</label>
                <input type="text" name="bank_name" id="bank_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="account_number" class="block text-sm font-medium text-gray-700">Nomor Rekening</label>
                <input type="text" name="account_number" id="account_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="account_holder" class="block text-sm font-medium text-gray-700">Nama Pemegang Rekening</label>
                <input type="text" name="account_holder" id="account_holder" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
            </div>
            <div class="flex justify-end">
                <button @click="showModal = false" type="button" class="bg-gray-300 text-gray-800 px-4 py-2 rounded mr-2">Tutup</button>
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Tambah Rekening</button>
            </div>
        </form>
    </div>
</div>
</section>
</div>
</div>
</main>
</body>
</html>
