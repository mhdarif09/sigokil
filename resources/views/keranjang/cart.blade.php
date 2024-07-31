<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart - Si Gokil</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-red-800 text-white">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Si Gokil</h1>
            <nav class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="px-3 flex items-center">Beranda</a>
                <a href="{{ route('cart.show') }}" class="px-3 flex items-center">Keranjang</a>
                <a href="#" class="px-3 flex items-center">Pesanan saya</a>
                <a href="#" class="px-3 flex items-center">Bantuan</a>
                <a href="{{ route('login') }}" class="px-3 flex items-center">Akun</a>
            </nav>
        </div>
    </header>

    <!-- Cart Section -->
    <section class="container mx-auto py-12">
        <h2 class="text-3xl font-bold mb-8 text-center">Keranjang Belanja</h2>
        <div class="bg-white shadow-lg rounded-lg p-6">
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    <div class="flex flex-col md:flex-row justify-between items-center border-b py-4">
                        <div class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <img src="{{ asset('storage/' . $details['photo']) }}" class="w-20 h-20 object-cover rounded-lg mr-4" alt="{{ $details['name'] }}">
                            <div>
                                <h3 class="text-xl font-semibold">{{ $details['name'] }}</h3>
                                <p class="text-gray-500">Nama Toko</p>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row items-center space-x-4">
                            <p class="text-gray-700">Warna / Rasa</p>
                            <p class="text-gray-700">Rp {{ number_format($details['price'], 0, ',', '.') }}</p>
                            <div class="flex items-center">
                                <button class="text-gray-500 px-2">-</button>
                                <input type="text" value="{{ $details['quantity'] }}" class="w-12 text-center border rounded-lg">
                                <button class="text-gray-500 px-2">+</button>
                            </div>
                            <p class="text-gray-700">Rp {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</p>
                            <a href="{{ route('cart.remove', $id) }}" class="text-red-500"><i class="fas fa-trash"></i> Hapus</a>
                        </div>
                    </div>
                @endforeach
                <div class="flex justify-between items-center mt-6">
                    <div>
                        <input type="checkbox" class="mr-2"> Pilih Semua
                    </div>
                    <div>
                        <p class="text-xl font-bold">Total: Rp {{ number_format($total, 0, ',', '.') }}</p>
                    </div>
                    <a href="{{ route('checkout') }}" class="bg-red-800 text-white px-6 py-2 rounded-lg">Beli Sekarang</a>
                </div>
            @else
                <p class="text-lg">Keranjang Anda kosong.</p>
            @endif
        </div>
    </section>
</body>
</html>
