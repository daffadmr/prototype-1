<div>
    <section class="checkout my-5">
        <div class="lg:container lg:w-full lg:ml-9 text-black text-sm">
            <ul class="flex">
                <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('cart') }}" class="underline">Keranjang</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="font-bold">Checkout</li>
            </ul>
            <p class="text-3xl mt-4 font-bold">Checkout</p>
        </div>

        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                <div class="p-4 bg-gray-100 rounded-full">
                    <h1 class="ml-2 font-bold uppercase">Pengiriman</h1>
                </div>
                <div class="p-4">
                    <p>Pesanan berjumlah <strong>Rp. {{ number_format($order->final_price) }}</strong> ini akan
                        dikirimkan ke:</p>
                    <table class="mt-3 text-left w-full border-collapse">
                        <tbody>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-t border-grey-light">Nama Penerima</td>
                                <td class="py-4 px-6 border-t border-grey-light">:</td>
                                <td class="py-4 px-6 border-t border-grey-light">{{ $order->name }}</td>
                            </tr>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-t border-grey-light">Alamat Penerima</td>
                                <td class="py-4 px-6 border-t border-grey-light">:</td>
                                <td class="py-4 px-6 border-t border-grey-light">
                                    @if (!empty($order->address))
                                        <p>{{ $order->address }}</p>
                                    @else
                                        <p>Belum Diisi</p>
                                    @endif
                                </td>
                            </tr>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-t border-grey-light">Telepon / No. HP</td>
                                <td class="py-4 px-6 border-t border-grey-light">:</td>
                                <td class="py-4 px-6 border-t border-grey-light">
                                    @if (!empty($order->telephone))
                                        <p>{{ $order->telephone }}</p>
                                    @else
                                        <p>Belum Diisi</p>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="flex">
                        <a href="{{ route('cart') }}"
                            class="flex justify-center w-1/3 px-10 py-3 mt-6 mr-2 font-medium text-white uppercase bg-red-500 rounded-full shadow item-center hover:bg-red-700 focus:shadow-outline focus:outline-none">
                            <span class="ml-2 mt-5px"><i class="fas fa-arrow-left"></i> Kembali</span>
                        </a>
                        <a href="{{ route('edit-recipient', $order->id) }}"
                            class="flex justify-center w-1/3 px-10 py-3 mt-6 mr-2 font-medium text-white uppercase bg-blue-500 rounded-full shadow item-center hover:bg-blue-700 focus:shadow-outline focus:outline-none">
                            <span class="ml-2 mt-5px"><i class="fas fa-edit"></i> Edit Alamat</span>
                        </a>
                        @if (!empty($order->address))
                            <button wire:click="bayar"
                                class="flex justify-center w-1/3 px-10 py-3 mt-6 mr-2 font-medium text-white uppercase bg-green-500 rounded-full shadow item-center hover:bg-green-700 focus:shadow-outline focus:outline-none">
                                <span class="ml-2 mt-5px"><i class="fas fa-credit-card"></i> Proses Transaksi</span>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
