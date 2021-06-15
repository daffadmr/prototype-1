<div>
    <section class="edit-transaction my-5">
        <div class="w-full">
                <div class="py-3 mb-4 text-black text-sm">
                    <ul class="flex">
                        <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li><a href="{{ route('admin-order') }}" class="underline">Halaman Admin (Order)</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li class="font-bold">Edit Transaksi</li>
                    </ul>
                </div>
        </div>
    
        <p class="text-3xl mt-4 font-bold">Edit Produk</p>
        <div class="flex justify-center my-6">
            <div class="flex flex-col rounded-md w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y">
                <div class="p-4 bg-gray-100 rounded-full">
                    <h1 class="ml-2 font-bold uppercase">Edit Transaksi</h1>
                </div>

                <p class="text-xl mt-4 p-4 font-bold">Transaksi: {{ $order->order_code }}</p>
                <form wire:submit.prevent="editTransaksi">
                <div class="flex mt-2 p-4 items-center pb-5 border-gray-200 mb-5">
                            
                            <div class="flex items-center">
                                <span class="mr-3">Status Transaksi</span>
                                <div class="relative">
                                <select wire:model="status" class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-black text-base pl-3 pr-10">
                                    <option value="1">Sudah Dibayar</option>
                                    <option value="2">Proses</option>
                                    <option value="3">Sudah Dikirim</option>
                                </select>
                                    

                                <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                                </div>
                            </div>
                            </div>

                            <div class="text-right mt-3">
                                <a href="{{ route('admin-order') }}" class="mx-2 inline-flex justify-center px-10 py-2 w-56 text-white font-semibold bg-red-900 hover:bg-red-800 rounded-md shadow-sm"> <i class="fas fa-arrow-left"></i>&nbspBack</a>
                                <button type="submit" class="inline-flex justify-center mx-2 px-10 py-2 w-56 text-white font-semibold bg-green-500 hover:bg-green-800 rounded-md shadow-sm"> <i class="fas fa-save"></i>&nbspUbah Status</button>
                            </div>
                </form>
            </div>
        </div>
    </section>
</div>
