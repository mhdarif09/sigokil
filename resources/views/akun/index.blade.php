<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>akun</title>
</head>

<body class="h-full">
<div class="min-h-full">
    <nav class="bg-red-800" x-data="{ isOpen: false, accountMenu: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="Beranda" class="rounded-md bg-red-800 px-3 py-2 text-sm font-small text-white hover:bg-gray-700" aria-current="page">Beranda</a>
                            <a href="seller" class="rounded-md px-3 py-2 text-sm font-small text-gray-300 text-white hover:bg-gray-700 hover:text-white">Seller Centre</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <a href="cart">
                            <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                <span class="sr-only">Keranjang</span>
                                <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                                </svg>
                                <span>Keranjang</span>
                            </button>
                        </a>

                        <a href="Pesanan_saya">
                            <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                <span class="sr-only">Pesanan saya</span>
                                <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
                                </svg>
                                <span>Pesanan saya</span>
                            </button>
                        </a>

                        <a href="Bantuan">
                            <button type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                <span class="sr-only">Bantuan</span>
                                <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <span>Bantuan</span>
                            </button>
                        </a>

                        <div class="relative" @click.away="accountMenu = false" @close.stop="accountMenu = false">
                            <button @click="accountMenu = !accountMenu" type="button" class="relative flex rounded-md bg-red-800 px-3 py-2 text-white text-sm hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 hover:bg-gray-700">
                                <span class="sr-only">Akun</span>
                                <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                <div class="-mr-2 flex md:hidden"></div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <img class="border-r pr-4 w-20" src="{{ asset('/images/plnbgg.png') }}">
            <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-300">Profil Saya</h1>
        </div>
    </header>

    <main>
        <div class="max-w-4xl mx-auto mt-10">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="mb-4 flex justify-between items-center">
                    <h2 class="text-2xl font-bold">Nama Akun</h2>
                </div>
                <form>
                    <!-- Profil Foto di bagian atas -->
                    <div class="mb-4 flex justify-center items-center">
                        <div class="w-16 h-16 bg-gray-200 rounded-full flex justify-center items-center mr-4">
                            <svg class="w-8 h-8 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2a10 10 0 11-7.071 2.929A10 10 0 0112 2m0 2a8 8 0 100 16 8 8 0 000-16m4 10a1 1 0 110-2 1 1 0 010 2m-4 3a3 3 0 110-6 3 3 0 010 6m0-5a2 2 0 100 4 2 2 0 000-4z"/>
                            </svg>
                        </div>
                        <button class="bg-orange-500 text-white py-2 px-4 rounded">Pilih Gambar</button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nama</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Tulis namamu...">
                        </div>
                        <div class="col-span-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Tulis Emailmu...">
                        </div>
                        <div class="col-span-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">No. Telepon</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="tel" placeholder="Tulis No. Teleponmu...">
                        </div>
                        <div class="col-span-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="birthdate">Tanggal Lahir</label>
                            <div class="flex">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2" id="birthdate-day" type="text" placeholder="Tanggal">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2" id="birthdate-month" type="text" placeholder="Bulan">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="birthdate-year" type="text" placeholder="Tahun">
                            </div>
                        </div>
                        <div class="col-span-1">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">Jenis Kelamin</label>
                            <div class="flex items-center">
                                <input class="mr-2 leading-tight" type="radio" id="male" name="gender" value="Laki-laki">
                                <label class="text-sm" for="male">Laki-laki</label>
                                <input class="mr-2 ml-6 leading-tight" type="radio" id="female" name="gender" value="Perempuan">
                                <label class="text-sm" for="female">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 text-right">
                        <button class="bg-orange-500 text-white py-2 px-4 rounded">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
</body>
</html>
