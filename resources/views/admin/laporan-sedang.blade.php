@extends('layouts.app')

@section('content')
    {{-- header --}}
    <header class="bg-white shadow">
        <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <img class="border-r pr-4 w-20" src="{{ asset('/images/plnbgg.png') }}">
            <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-300">Admin</h1>
        </div>
    </header>
    <div class="min-h-screen flex">
      <!-- Sidebar -->
      <div class="bg-red-700 text-white w-64 p-4">
          <nav>
              <ul>
                  <li class="mb-4">
                      <a href="#" class="block text-lg font-medium">Pendaftaran</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="block text-lg font-medium">Transaksi</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="block text-lg font-medium">Laporan</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="block text-lg font-medium">FAQ</a>
                  </li>
              </ul>
          </nav>
      </div>
      
      <!-- Main Content -->
      <div class="flex-1 p-6">
        <div class="flex items-center mb-4">
            <a href="#" class="text-red-700 font-semibold">Beranda</a>
            <span class="mx-2">></span>
            <a href="#" class="text-gray-600">Laporan</a>
            <span class="mx-2">></span>
            <a href="#" class="text-gray-600">Sedang</a>
            <span class="mx-2">></span>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold">Sedang</h2>
            </div>
            <!-- Kategori Tinggi -->
            <div class="mb-4">
                <div class="bg-gray-100 p-4 rounded-lg flex justify-between items-center">
                    <div>(Jasa) Pengerjaan tidak rapi dan terburu - buru</div>
                    <div class="text-gray-500">J001</div>
                </div>
            </div>
            <!-- Kategori Sedang -->
            <div class="mb-4">
                <div class="bg-gray-100 p-4 rounded-lg flex justify-between items-center">
                    <div></div>
                </div>
            </div>
            <!-- Kategori Normal -->
            <div>
                <div class="bg-gray-100 p-4 rounded-lg flex justify-between items-center">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
  </div>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto p-4">
            <div class="flex justify-between items-center">
                <p>&copy; 2023 Sigokil Palembang. All rights reserved.</p>
                <ul class="flex space-x-4">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Add Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>


@endsection
