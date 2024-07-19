<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
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

    <!-- Product Details -->
    <section class="py-12">
        <div class="container mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold mb-4">{{ $product->name }}</h2>
                <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" class="w-full object-cover rounded-lg mb-4">
                <p class="text-xl text-gray-800 mb-4">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <div class="flex items-center mb-4">
                        <label for="quantity" class="mr-2">Quantity:</label>
                        <input type="number" name="quantity" id="quantity" value="1" min="1" class="border rounded p-2 w-20">
                    </div>
                    <div class="flex space-x-4">
                        <button type="submit" name="action" value="add" class="bg-yellow-500 text-white px-4 py-2 rounded-lg">Add to Cart</button>
                        <button type="submit" name="action" value="checkout" class="bg-red-800 text-white px-4 py-2 rounded-lg">Checkout</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
