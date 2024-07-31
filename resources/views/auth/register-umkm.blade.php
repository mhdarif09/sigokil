@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
    <div class="w-full max-w-xl bg-white shadow-md rounded-lg p-8">
        <div class="text-center mb-6">
        </div>
        <h2 class="text-2xl font-bold mb-6 text-center text-red-600">{{ __('DAFTAR SEBAGAI UMKM') }}</h2>
        <form method="POST" action="{{ route('register.umkm') }}" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="store_name" class="block text-sm font-medium text-gray-700">{{ __('NAMA TOKO') }}</label>
                    <input id="store_name" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 @error('store_name') border-red-500 @enderror" name="store_name" value="{{ old('store_name') }}" required autocomplete="store_name" autofocus>
                    @error('store_name')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="owner_name" class="block text-sm font-medium text-gray-700">{{ __('NAMA PEMILIK') }}</label>
                    <input id="owner_name" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 @error('owner_name') border-red-500 @enderror" name="owner_name" value="{{ old('owner_name') }}" required autocomplete="owner_name">
                    @error('owner_name')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="store_address" class="block text-sm font-medium text-gray-700">{{ __('ALAMAT TOKO') }}</label>
                    <input id="store_address" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 @error('store_address') border-red-500 @enderror" name="store_address" value="{{ old('store_address') }}" required autocomplete="store_address">
                    @error('store_address')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="store_photo" class="block text-sm font-medium text-gray-700">{{ __('MASUKAN FOTO TOKO') }}</label>
                    <input id="store_photo" type="file" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 @error('store_photo') border-red-500 @enderror" name="store_photo" required>
                    @error('store_photo')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">{{ __('NO. TELEPON/Whatsapp') }}</label>
                    <input id="phone" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 @error('phone') border-red-500 @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                    @error('phone')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('PASSWORD') }}</label>
                    <input id="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('EMAIL') }}</label>
                <input id="email" type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

                <div class="mb-4">
                    <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('KONFIRMASI PASSWORD') }}</label>
                    <input id="password-confirm" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">{{ __('KATEGORI UMKM (BISA LEBIH DARI SATU)') }}</label>
                <input id="category" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 @error('category') border-red-500 @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" onclick="showCategoryPopup()">
                @error('category')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-center">
                <button type="submit" class="w-full bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    {{ __('LANJUT') }}
                </button>
            </div>
        </form>
    </div>
</div>
<!-- Popup Kategori -->
<div id="category-popup" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            {{ __('Pilih Kategori UMKM') }}
                        </h3>
                        <div class="mt-2">
                            <select id="popup-category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
                                <option value="Fashion">Fashion</option>
                                <option value="Kuliner">Kuliner</option>
                                <option value="Rental">Rental</option>
                                <option value="Laundry">Laundry</option>
                                <option value="Service">Service</option>
                                <option value="Kerajinan Tangan">Kerajinan Tangan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="closeCategoryPopup()">
                    {{ __('Batal') }}
                </button>
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" onclick="selectCategory()">
                    {{ __('Pilih') }}
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function showCategoryPopup() {
        document.getElementById('category-popup').classList.remove('hidden');
    }

    function closeCategoryPopup() {
        document.getElementById('category-popup').classList.add('hidden');
    }

    function selectCategory() {
        const selectedCategory = document.getElementById('popup-category').value;
        document.getElementById('category').value = selectedCategory;
        closeCategoryPopup();
    }
</script>
@endsection