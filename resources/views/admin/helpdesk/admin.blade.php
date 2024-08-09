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
          <div class="bg-white p-6 rounded-lg shadow-md">
              <div class="text-center">
                  <h2 class="text-2xl font-bold">Jumat</h2>
                  <p class="text-lg text-gray-600">28 Juni 2024</p>
              </div>
              <div class="mt-8 text-center">
                  <div class="text-xl font-semibold">Tugas Hari Ini</div>
                  <div class="text-4xl font-bold">1</div>
                  <div class="text-xl font-semibold mt-4">Belum Dikerjakan</div>
                  <div class="text-4xl font-bold">1</div>
              </div>
              <div class="mt-8">
                  <h3 class="text-lg font-medium">Hari Ini</h3>
                  <div class="mt-2 bg-gray-100 p-4 rounded-lg flex justify-between items-center">
                      <div>(Jasa) Pengerjaan tidak rapi dan terburu-buru</div>
                      <div class="text-gray-500">J001</div>
                  </div>
                  <div class="mt-4 text-right">
                      <a href="#" class="text-red-700 font-semibold">Lihat Semua</a>
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
