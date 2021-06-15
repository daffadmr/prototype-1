<div>
    <section class="create-product my-5">
        <div class="w-full">
                <div class="py-3 mb-4 text-black text-sm">
                    <ul class="flex">
                        <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li><a href="{{ route('admin-product') }}" class="underline">Halaman Admin (Produk)</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li class="font-bold">Buat Produk</li>
                    </ul>
                </div>
        </div>

        <p class="text-3xl mt-4 font-bold">Buat Produk</p>
        <div class="flex justify-center my-6">
            <div class="flex flex-col rounded-md w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y">
                <form wire:submit.prevent="create">
                <div class="mt-1">
                    <label class="block text-sm text-gray-00" for="cus_name">Nama Produk</label>
                    <input wire:model="name" type="text" class="border-2 focus:border-black form-input mt-4 w-full" placeholder="Nama Produk">
                </div>
                <div class="mt-3">
                    <label class="block text-sm text-gray-00" for="cus_name">Harga Produk</label>
                    <input wire:model="price" type="number" class="border-2 focus:border-black form-input mt-4 w-full" placeholder="Harga Produk">
                </div>
                <div class="mt-3">
                    <label class="block text-sm text-gray-00" for="cus_name">Liga</label>
                    <div class="flex items-center mt-2">
                        <div class="relative">
                        <select wire:model="league" class="rounded appearance-none border-2 py-2 focus:outline-none focus:border-black text-base pl-3 pr-10">
                                    <option value="1">Premier League</option>
                                    <option value="2">Bundesliga</option>
                                    <option value="3">Serie A</option>
                                    <option value="4">La Liga</option>
                                    <option value="5">Ligue 1</option>
                                </select>
                                    

                                <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                                </div>
                            </div>
                </div>
                <div class="mt-3">
                    <label class="block text-sm text-gray-00" for="cus_name">Stok Produk</label>
                    <div class="flex items-center mt-2">
                        <div class="relative">
                        <select wire:model="is_ready" class="rounded appearance-none border-2 py-2 focus:outline-none focus:border-black text-base pl-3 pr-10">
                                    <option value="1">Ready Stock</option>
                                    <option value="0">Stock Kosong</option>
                                </select>
                                    

                                <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                                </div>
                            </div>
                </div>
                <div class="mt-3 mb-3">
                    <label class="block text-sm text-gray-00" for="cus_name">Gambar Produk</label>
                    <input wire:model="image" type="file" class="w-full mt-3 text-gray-700 px-3 py-2 border-2 rounded">
                </div>
                <hr>
                <div class="text-right mt-3">
                    <button type="submit" class="inline-flex justify-center mx-2 px-10 py-2 w-56 text-white font-semibold bg-green-500 hover:bg-green-800 rounded-md shadow-sm"> <i class="fas fa-save"></i>&nbspBuat Produk</button>
                </div>
                </form>
            </div>
        </div>
    </section>
</div>
