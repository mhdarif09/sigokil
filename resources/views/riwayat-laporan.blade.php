@extends('layouts.app')

@section('content')
    {{-- header --}}
    <header class="bg-white shadow">
        <div class="mx-auto flex max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <img class="border-r pr-4 w-20" src="{{ asset('/images/plnbgg.png') }}">
            <h1 class="text-3xl my-auto ml-6 font-bold tracking-tight text-yellow-300">Pusat Bantuan</h1>
        </div>
    </header>
    <div class="max-w-4xl mx-auto my-8 bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-4">Riwayat Laporan</h2>
        
        <!-- Search bar -->
        <div class="flex mb-4">
            <input type="text" class="w-full p-2 border rounded" placeholder="Cari">
        </div>

        <!-- Sidebar -->
        <div class="flex">
            <div class="w-1/4 pr-4">
                <button class="w-full p-2 mb-2 bg-white border rounded-md text-yellow-500 border-yellow-500">Semua</button>
                <button class="w-full p-2 bg-white border rounded-md text-yellow-500 border-yellow-500">Sedang Berlangsung</button>
            </div>

            <!-- Report table -->
            <div class="w-3/4 bg-white p-6 rounded shadow">
                <table class="min-w-full border divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Laporan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Laporan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">J001</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jasa</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pengerjaan tidak rapi dan terburu-buru</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <i class="fas fa-check-circle text-green-500"></i>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
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
