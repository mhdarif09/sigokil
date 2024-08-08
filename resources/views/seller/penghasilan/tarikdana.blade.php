<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Tarik Dana</title>
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
<body>
<div class="min-h-full">
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
                <h2 class="ml-10 text-lg font-normal text-gray-300">Saldo Saya</h2>
                <svg class="ml-6 text-lg text-slate-300 light:text-slate-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 16 4-4-4-4"/>
                </svg>
                <h2 class="ml-10 text-lg font-normal text-gray-300">Tarik Dana</h2>
            </div>
        </header>

    <main>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
            <div class="saldo-section">
                <div class="header">
                    <div class="detail-bank">
                        <img src="path/to/bank/logo.png" alt="Logo Bank">
                        <div>
                            <p class="nama-bank">Bank ABC</p>
                            <p class="nomor-rekening">1234567890</p>
                        </div>
                    </div>
                    <div class="info-saldo">
                        <p class="jumlah-saldo">Rp 10.000.000,-</p>
                        <button class="tarik-dana-button">Tarik Dana</button>
                    </div>
                </div>
                <form id="withdrawForm" action="/tarik-dana" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="rekening_bank" class="block text-sm font-medium text-gray-700">Rekening Bank</label>
                        <input type="text" name="rekening_bank" id="rekening_bank" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="nama_bank" class="block text-sm font-medium text-gray-700">Nama Bank</label>
                        <input type="text" name="nama_bank" id="nama_bank" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="pemegang_rekening" class="block text-sm font-medium text-gray-700">Pemegang Rekening</label>
                        <input type="text" name="pemegang_rekening" id="pemegang_rekening" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" readonly>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Tarik Dana</button>
                </form>
            </div>

            <div class="transaksi-section">
                <div class="header">
                    <h2 class="text-lg font-medium text-gray-900">Riwayat Transaksi</h2>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01-01-2023</td>
                        <td>Rp 5.000.000,-</td>
                        <td>Sukses</td>
                    </tr>
                    <tr>
                        <td>15-01-2023</td>
                        <td>Rp 2.000.000,-</td>
                        <td>Sukses</td>
                    </tr>
                    <tr>
                        <td>20-01-2023</td>
                        <td>Rp 3.000.000,-</td>
                        <td>Sukses</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
</body>
</html>
