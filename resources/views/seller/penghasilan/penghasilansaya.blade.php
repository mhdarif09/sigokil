<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Penghasilan Saya</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-red-800" x-data="{ isOpen: false, accountMenu: false }">
            <!-- Navigation Content -->
        </nav>
    
        <header class="bg-white shadow">
            <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-300">Penghasilan Saya</h1>
            </div>
        </header>
    
        <main>
            <div class="mx-auto max-w-7xl px-6 py-6 sm:px-6 lg:px-8">
                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4">Daftar Transaksi Berhasil</h2>
                    <h1>Total Penghasilan: Rp. {{ number_format($totalEarnings, 2) }}</h1>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                                <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($orders as $order)
                            <tr>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900">{{ $order->id }}</td>
                                <td class="py-4 px-6 text-sm text-gray-500">Rp. {{ number_format($order->items->sum(function($item) { return $item->price * $item->quantity; }) + 5000, 2) }}</td>
                                <td class="py-4 px-6 text-sm text-gray-500">{{ $order->updated_at->format('d-m-Y H:i') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
