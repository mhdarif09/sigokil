<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-red-800 text-white">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Si Gokil</h1>
        </div>
    </header>

    <!-- Checkout -->
    <section class="py-12">
        <div class="container mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold mb-4">Checkout</h2>
                @if(session('cart'))
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2">Product</th>
                                <th class="py-2">Quantity</th>
                                <th class="py-2">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(session('cart') as $id => $details)
                                <tr>
                                    <td class="py-2">{{ $details['name'] }}</td>
                                    <td class="py-2">{{ $details['quantity'] }}</td>
                                    <td class="py-2">Rp {{ number_format($details['price'], 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <form action="{{ route('checkout.process') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="bg-red-800 text-white px-4 py-2 rounded-lg">Confirm and Pay</button>
                    </form>
                @else
                    <p class="text-lg">Your cart is empty.</p>
                @endif
            </div>
        </div>
    </section>
</body>
</html>
