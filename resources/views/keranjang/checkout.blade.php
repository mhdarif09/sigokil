<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>CheckOut</title>
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="bg-red-800" x-data="{ isOpen: false, accountMenu: false }">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="m15 19-7-7 7-7"/>
                </svg>
            </button>          
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
                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                    </svg>
                    <span>Keranjang</span>
                </button>
              </a>
              <a href="Pesanan_saya">
                <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
                    </svg>
                    <span>Pesanan saya</span>
                </button>
              </a>
              <a href="Bantuan">
                <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span>Bantuan</span>
                </button>
              </a>
              <div class="relative" @click.away="accountMenu = false" @close.stop="accountMenu = false">
                <button @click="accountMenu = !accountMenu" type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View profile options</span>
                    <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    <span>Akun</span>
                </button>
                <div x-show="accountMenu"
                     x-transition:enter="transition ease-out duration-100 transform"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75 transform"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="akun" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Akun Saya</a>
                    <a href="logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Log Out</a>
                </div>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <button type="button" @click="isOpen = !isOpen"
              class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
              </svg>
              <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
    <header class="bg-white shadow">
      <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <img class="border-r pr-4 w-20" src="{{ asset("/images/plnbgg.png") }}">
        <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-500">CheckOut</h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Konten Anda -->
        <div class="grid grid-cols-3 gap-8">
          <div class="col-span-2 bg-white p-6 rounded-lg shadow-lg">
            <div class="mb-4 flex items-center">
              <svg class="w-6 h-6 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 0v6M9.5 9A2.5 2.5 0 0 1 12 6.5"/>
              </svg>
              <span class="text-yellow-500 ml-2">Alamat pengiriman</span>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <input type="text" placeholder="Nama Depan" class="border-2 p-2 rounded">
              <input type="text" placeholder="Nama Belakang" class="border-2 p-2 rounded">
              <input type="text" placeholder="No. Telepon" class="border-2 p-2 rounded col-span-2">
              <input type="text" placeholder="Kota" class="border-2 p-2 rounded">
              <input type="text" placeholder="Provinsi" class="border-2 p-2 rounded">
              <input type="text" placeholder="Alamat" class="border-2 p-2 rounded col-span-2">
              <input type="text" placeholder="Lainnya (Opsional)" class="border-2 p-2 rounded">
              <input type="text" placeholder="Kode Pos" class="border-2 p-2 rounded">
            </div>
            <div class="mt-6">
              <h3 class="text-yellow-500">Pengiriman</h3>
              <div class="flex items-center mt-2">
                <select class="border-2 p-2 rounded flex-grow">
                  <option>Kurir SiGokil</option>
                </select>
                <input type="text" placeholder="Rp. XXX" class="border-2 p-2 rounded ml-4">
              </div>
            </div>
            <div class="mt-6">
              <h3 class="text-yellow-500">Metode Pembayaran</h3>
              <input type="text" placeholder="Qris" class="border-2 p-2 rounded mt-2 w-full">
            </div>
          </div>
          <div class="col-span-1 bg-red-700 p-6 rounded-lg shadow-lg text-white">
            <h2 class="bg-yellow-500 p-2 rounded-t-lg text-black text-center">Produk Dipesan</h2>
            <div class="mt-4 space-y-4">
              <div class="flex space-x-4">
                <div class="bg-gray-300 w-24 h-24"></div>
                <div>
                  <p>Nama Toko</p>
                  <p>Nama Produk</p>
                  <p class="flex items-center">
                    <input type="checkbox" class="mr-2">Variasi
                  </p>
                  <p>Rp. XXX</p>
                </div>
              </div>
              <div class="flex space-x-4">
                <div class="bg-gray-300 w-24 h-24"></div>
                <div>
                  <p>Nama Toko</p>
                  <p>Nama Produk</p>
                  <p class="flex items-center">
                    <input type="checkbox" class="mr-2">Variasi
                  </p>
                  <p>Rp. XXX</p>
                </div>
              </div>
            </div>
            <div class="mt-4 border-t border-white pt-4">
              <p class="flex justify-between">
                <span>Subtotal</span>
                <span>Rp. XXX</span>
              </p>
              <p class="flex justify-between mt-2">
                <span>Pengiriman</span>
                <span>Rp. XXX</span>
              </p>
              <p class="flex justify-between mt-2 font-bold">
                <span>Total</span>
                <span>Rp. XXX</span>
              </p>
              <a href="Pembayaran">
              <button class="bg-red-900 w-full py-2 mt-4 rounded-lg text-white">
                <span>Bayar Sekarang</span>
              </button>
            </a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
