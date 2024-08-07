@extends('layouts.app')

@section ('content')

    <!-- Cart Section -->
    <section class="container mx-auto py-12">
        <h2 class="text-3xl font-bold mb-8 text-center">Keranjang Belanja</h2>
        <div class="bg-white shadow-lg rounded-lg p-6">
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    <div class="flex flex-col md:flex-row justify-between items-center border-b py-4">
                        <div class="flex items-center">
                            <input type="checkbox" class="mr-2">
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
                            <form action="{{ route('cart.remove', $id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500"><i class="fas fa-trash"></i> Hapus</button>
                            </form>                        </div>
                    </div>
                @endforeach
                <div class="flex justify-between items-center mt-6">
                    <div>
                        <input type="checkbox" class="mr-2"> Pilih Semua
                    </div>
                    <div>
                        <p class="text-xl font-bold">Total: Rp {{ number_format($total, 0, ',', '.') }}</p>
                    </div>
                    <a href="{{ route('checkout.create') }}" class="bg-red-800 text-white px-6 py-2 rounded-lg">Beli Sekarang</a>
                </div>
            @else
                <p class="text-lg">Keranjang Anda kosong.</p>
            @endif
        </div>
    </section>
@endsection