<div>
    <section class="edit-address-of-recipient my-5">
        <div class="lg:container lg:w-full lg:ml-9 text-black text-sm">
            <ul class="flex">
                <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('cart') }}" class="underline">Keranjang</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('checkout', $order->id ) }}" class="underline">Checkout</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="font-bold">Edit Pengiriman</li>
            </ul>
            <p class="text-3xl mt-4 font-bold">Edit Pengiriman</p>
        </div>

        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                <div class="p-4 bg-gray-100 rounded-full">
                    <h1 class="ml-2 font-bold uppercase">Edit Tujuan Pengiriman</h1>
                </div>
                <div class="p-4">
                    <p>Edit Tujuan Pengiriman Pesanan {{ $order->order_code }}</p>
                    <form wire:submit.prevent="submitRecipient">
                        <table class="mt-3 text-left w-full border-collapse"> 
                            <tbody>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-t border-grey-light">Nama Penerima</td>
                                    <td class="py-4 px-6 border-t border-grey-light">:</td>
                                    <td class="py-4 px-6 border-t border-grey-light">
                                    <input type="text" wire:model="name" class="w-full px-3 py-2 border-2 rounded-lg text-gray-700 focus:outline-none focus:border-black" placeholder="Nama Penerima">
                                    </td>
                                </tr>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-t border-grey-light">Alamat Penerima</td>
                                    <td class="py-4 px-6 border-t border-grey-light">:</td>
                                    <td class="py-4 px-6 border-t border-grey-light">
                                        <textarea wire:model="address" class="w-full px-3 py-2 text-gray-700 border-2 rounded-lg focus:outline-none focus:border-black" placeholder="Alamat Penerima" rows="4"></textarea>                                    
                                    </td>
                                </tr>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-t border-grey-light">Telepon / No. HP</td>
                                    <td class="py-4 px-6 border-t border-grey-light">:</td>
                                    <td class="py-4 px-6 border-t border-grey-light">
                                    <input type="text" wire:model="telephone" class="w-full px-3 py-2 border-2 rounded-lg text-gray-700 focus:outline-none focus:border-black" placeholder="Telepon / No. HP Penerima">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                
                        <div class="mt-5 text-right">
                                <a href="{{ route('checkout', $order->id ) }}" class="mx-2 inline-flex justify-center px-10 py-2 w-56 text-white font-semibold bg-red-900 hover:bg-red-800 rounded-full shadow-sm"> <i class="fas fa-arrow-left"></i>&nbspBack</a>
                                <button type="submit" class="inline-flex justify-center mx-2 px-10 py-2 w-56 text-white font-semibold bg-blue-900 hover:bg-blue-800 rounded-full shadow-sm"> <i class="fas fa-save"></i>&nbspSave</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
