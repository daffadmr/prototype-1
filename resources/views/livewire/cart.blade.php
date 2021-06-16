<div>
    <section class="cart my-5">
        <div class="lg:container lg:w-full lg:ml-9 text-black text-sm">
            <ul class="flex">
                <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="font-bold">Keranjang</li>
            </ul>
            <p class="text-3xl mt-4 font-bold">Keranjang</p>
        </div>

        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                <div class="flex-1">
                    <div>
                        @if (session()->has('message'))
                            <div class="border border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead class="border-b">
                            <tr class="h-12 uppercase">
                                <th></th>
                                <th class="hidden md:table-cell"></th>
                                <th class="text-left">Product</th>
                                <th class="lg:text-center text-left pl-5 lg:pl-0">
                                    <span class="lg:hidden" title="Quantity">Qtd</span>
                                    <span class="hidden lg:inline">Quantity</span>
                                </th>
                                <th class="hidden text-right md:table-cell">Unit price</th>
                                <th class="text-right">Total price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($order_details as $order_detail)
                                <tr class="border-b">
                                    <td>
                                        <button wire:click="hapus({{ $order_detail->id }})">
                                            <i class="text-red-700 fas fa-trash"></i>
                                        </button>
                                    </td>
                                    <td class="hidden py-8 md:table-cell">
                                        <a href="#">
                                            <img src="{{asset('storage/images/'.$order_detail->product->product_image)}}"
                                                class="w-28 rounded" alt="Thumbnail">
                                        </a>
                                    </td>
                                    <td>
                                        <p><strong>{{ $order_detail->product->name }}</strong> - Size: <strong>{{ $order_detail->size }}</strong></p>
                                        @if (!empty($order_detail->note) )
                                            <p>Note: {{ $order_detail->note }}</p>
                                        @else
                                            <p>Note: -</p>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <span class="text-sm lg:text-base font-medium">
                                            {{ $order_detail->total_order }}
                                        </span>
                                    </td>
                                    <td class="hidden text-right md:table-cell">
                                        <span class="text-sm lg:text-base font-medium">
                                            Rp. {{ number_format($order_detail->product->price) }}
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-sm lg:text-base font-medium">
                                            Rp. {{ number_format($order_detail->total_price) }}
                                        </span>
                                    </td>
                                </tr>
                        </tbody>
                    @empty
                        <tr>
                            <td colspan="6" align="center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </table>
                    @if (!empty($orders))
                    <form wire:submit.prevent="updateCart">
                        <div class="my-4 mt-6 -mx-2 lg:flex">
                            <div class="lg:px-2 lg:w-1/2">
                                <div class="p-4 bg-gray-100 rounded-full">
                                    <h1 class="ml-2 font-bold uppercase">Jasa Pengiriman</h1>
                                </div>
                                <div>
                                    <div class="mt-6 mb-6">
                                        <div
                                            class="flex items-center justify-between w-full bg-white rounded-md border-2 focus:border-blue-500 p-4 focus:outline-none">
                                            <label class="flex items-center">
                                            <input wire:click="tambahOngkir" wire:model="courier" value="SiCepat" type="radio" name="pengantaran"
                                                class="form-radio border h-5 w-5 text-blue-600"><span
                                                class="ml-2 text-sm text-gray-700">SiCepat</span>
                                                </label>
                                                    <span class="text-gray-600 text-sm">Rp. 10,000</span>
                                        </div>
                                        <div
                                            class="mt-6 flex items-center justify-between w-full bg-white rounded-md border-2 focus:border-blue-500 p-4 focus:outline-none">
                                            <label class="flex items-center">
                                                <input wire:click="tambahOngkir" wire:model="courier" value="AnterAja" type="radio" name="pengantaran"
                                                    class="form-radio border h-5 w-5 text-blue-600"><span
                                                    class="ml-2 text-sm text-gray-700">AnterAja</span>
                                            </label>
                                                <span class="text-gray-600 text-sm">Rp. 10,000</span>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="lg:px-2 lg:w-1/2">

                                    <div class="p-4 bg-gray-100 rounded-full">
                                        <h1 class="ml-2 font-bold uppercase">Order Details</h1>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex justify-between border-t">
                                            <div
                                                class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                                                Barang
                                            </div>
                                            <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                                                Rp. {{ number_format($orders->total_price) }}
                                            </div>
                                        </div>
                                        <div class="flex justify-between border-t">
                                            <div
                                                class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                                                Ongkos Kirim
                                            </div>
                                            <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                                                Rp. {{ number_format($ongkir) }}
                                            </div>
                                        </div>
                                        <div class="flex justify-between pt-4 border-t">
                                            <div
                                                class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                                                Total
                                            </div>
                                            <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                                                Rp. {{ number_format($orders->total_price + $ongkir) }}
                                            </div>
                                        </div>
                                            @if($ongkir == 0)
                                                <button type="button"
                                                    class="flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-gray-800 rounded-full shadow item-center hover:bg-gray-700 focus:shadow-outline focus:outline-none opacity-50 cursor-not-allowed">
                                                    <span class="ml-2 mt-5px"><i class="fas fa-credit-card"></i> Procceed to
                                                        checkout</span>
                                                </button>
                                            @else
                                                <button type="submit"
                                                    class="flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-gray-800 rounded-full shadow item-center hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                                                    <span class="ml-2 mt-5px"><i class="fas fa-credit-card"></i> Procceed to
                                                        checkout</span>
                                                </button>
                                            @endif
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>