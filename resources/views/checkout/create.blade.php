<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Checkout</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-red-800" x-data="{ isOpen: false, accountMenu: false }">
            <!-- Navigation code here -->
        </nav>
        <header class="bg-white shadow">
            <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <img class="border-r pr-4 w-20" src="{{ asset('/images/plnbgg.png') }}" alt="Logo">
                <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-500">Checkout</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="grid grid-cols-3 gap-8">
                    <!-- Checkout Form -->
                    <div class="col-span-2 bg-white p-6 rounded-lg shadow-lg">
                        <div class="mb-4 flex items-center">
                            <svg class="w-6 h-6 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 0v6M9.5 9A2.5 2.5 0 0 1 12 6.5"/>
                            </svg>
                            <span class="text-yellow-500 ml-2">Alamat Pengiriman</span>
                        </div>
                        <form action="{{ route('checkout.store') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-2 gap-4">
                                <input type="text" name="first_name" placeholder="Nama Depan" class="border-2 p-2 rounded" required>
                                <input type="text" name="last_name" placeholder="Nama Belakang" class="border-2 p-2 rounded" required>
                                <input type="text" name="phone" placeholder="No. Telepon" class="border-2 p-2 rounded col-span-2" required>
                                <input type="text" name="city" placeholder="Kota" class="border-2 p-2 rounded" required>
                                <input type="text" name="state" placeholder="Provinsi" class="border-2 p-2 rounded" required>
                                <input type="text" name="address" placeholder="Alamat" class="border-2 p-2 rounded col-span-2" required>
                                <input type="text" name="postal_code" placeholder="Kode Pos" class="border-2 p-2 rounded" required>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-yellow-500">Pengiriman</h3>
                                <div class="flex items-center mt-2">
                                    <select class="border-2 p-2 rounded flex-grow">
                                        <option>Kurir SiGokil</option>
                                    </select>
                                    <input type="text" value="Rp. {{ number_format($shippingCost, 2) }}" class="border-2 p-2 rounded ml-4" readonly>
                                </div>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-yellow-500">Metode Pembayaran</h3>
                                <input type="text" name="payment_method" placeholder="Qris" class="border-2 p-2 rounded mt-2 w-full" required>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- Cart Summary -->
                    <div class="col-span-1 bg-red-700 p-6 rounded-lg shadow-lg text-white">
                        <h2 class="bg-yellow-500 p-2 rounded-t-lg text-black text-center">Produk Dipesan</h2>
                        <div class="mt-4 space-y-4">
                            @foreach($cartItems as $item)
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="bg-gray-300 w-24 h-24"></div>
                                        <div>
                                            <p class="text-lg font-medium">{{ $item->product->name }}</p>
                                            <p class="text-gray-500">Rp. {{ number_format($item->product->price, 2) }}</p>
                                            <p class="text-gray-500">Quantity: {{ $item->quantity }}</p>
                                        </div>
                                    </div>
                                    <p class="text-lg font-semibold">Rp. {{ number_format($item->price * $item->quantity, 2) }}</p>
                                </div>
                            @endforeach
                            <div class="mt-4 border-t border-white pt-4">
                                <p class="flex justify-between">
                                    <span>Subtotal:</span>
                                    <span>Rp. {{ number_format($subtotal, 2) }}</span>
                                </p>
                            </div>
                            <div class="flex justify-between mb-4">
                                <span>Shipping Cost:</span>
                                <span>Rp. {{ number_format($shippingCost, 2) }}</span>
                            </div>
                            <div class="flex justify-between font-semibold">
                                <span>Total:</span>
                                <span>Rp. {{ number_format($total, 2) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
