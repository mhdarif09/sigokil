<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <!-- Store Name -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-700">Nama Toko: {{ $product->store_name }}</h2>
                </div>

                <!-- Product Name -->
                <h3 class="text-3xl font-bold mb-4">{{ $product->name }}</h3>

                <!-- Product Image -->
                <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" class="w-full h-60 object-cover rounded-lg mb-6">

                <!-- Product Price -->
                <p class="text-2xl font-semibold text-gray-800 mb-4">Rp {{ number_format($product->price, 0, ',', '.') }}</p>

                <!-- Product Description -->
                <p class="text-gray-700 mb-6">{{ $product->description }}</p>

                <!-- Quantity and Buttons -->
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <div class="flex flex-col md:flex-row items-start md:items-center mb-6">
                        <label for="quantity" class="mr-2 text-lg font-medium">Quantity:</label>
                        <input type="number" name="quantity" id="quantity" value="1" min="1" class="border rounded p-2 w-32 text-center">
                    </div>
                    <div class="flex space-x-4">
                        <button type="submit" name="action" value="add" class="bg-yellow-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-opacity-50">Add to Cart</button>
                        <button type="submit" name="action" value="checkout" class="bg-red-800 text-white px-6 py-3 rounded-lg shadow-md hover:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-opacity-50">Buy Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
