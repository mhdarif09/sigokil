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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <style>
        /* Swiper container setup */
        .swiper-container {
            width: 100%;
            height: 400px; /* Set fixed height for slider */
        }

        /* Swiper slide styling */
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Ensure images fill their container while keeping aspect ratio */
        .swiper-slide img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover; /* Keeps aspect ratio and covers slider area */
        }
    </style>
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

                <!-- Product Image Slider -->
                <div class="swiper-container mb-6">
                    <div class="swiper-wrapper">
                        @if ($product->main_photo)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $product->main_photo) }}" alt="{{ $product->name }}">
                            </div>
                        @endif
                        @foreach (['product_photo_1', 'product_photo_2', 'product_photo_3'] as $photoField)
                            @if (!empty($product->$photoField))
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $product->$photoField) }}" alt="Additional photo">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

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

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
</body>
</html>
