<div>
    <section class="container detail-transaction my-5">
        <div class="w-full">
                <div class="py-3 mb-4 text-black text-sm">
                    <ul class="flex">
                        <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li><a href="{{ route('all-transaction') }}" class="underline">Transaksi Anda</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li class="font-bold">Detail Transaksi</li>
                    </ul>
                </div>

                <p class="text-3xl mt-4 font-bold">Detail Transaksi</p>
                <div class="flex justify-center my-6">
                    <div class="flex flex-col rounded-md w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y">
                        <div class="p-4 bg-gray-100 rounded-full">
                            <h1 class="ml-2 font-bold uppercase">Rincian Transaksi {{ $order->order_code }}</h1>
                        </div>

                        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead>
                                <tr>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light" colspan="3">Data Penerima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-t border-grey-light">Nama</td>
                                    <td class="py-4 px-6 border-t border-grey-light">:</td>
                                    <td class="py-4 px-6 border-t border-grey-light">{{ $order->name }}</td>
                                </tr>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-t border-grey-light">Alamat</td>
                                    <td class="py-4 px-6 border-t border-grey-light">:</td>
                                    <td class="py-4 px-6 border-t border-grey-light">{{ $order->address }}</td>
                                </tr>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-t border-grey-light">Telepon</td>
                                    <td class="py-4 px-6 border-t border-grey-light">:</td>
                                    <td class="py-4 px-6 border-t border-grey-light">{{ $order->telephone }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mt-5">
                        <h1 class="ml-2 mb-3 font-bold uppercase">Rincian Pembelian</h1>
                        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead>
                                <tr >
                                <th class="py-4 px-6 bg-gray-300 font-bold uppercase text-sm text-grey-dark border-b border-grey-light">No.</th>
                                <th colspan=2 class="py-4 px-6 bg-gray-300 font-bold uppercase text-sm text-center text-grey-dark border-b border-grey-light">Produk</th>
                                <th class="py-4 px-6 bg-gray-300 font-bold uppercase text-sm text-grey-dark text-center border-b border-grey-light">Qty</th>
                                <th class="py-4 px-6 bg-gray-300 font-bold uppercase text-sm text-grey-dark text-center border-b border-grey-light">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order_details as $index => $order_detail)
                                <tr class="hover:bg-grey-lighter">
                                    <?php $products = \App\Models\Product::where('id', $order_detail->product_id)->get(); ?>
                                    <td class="py-4 px-6 border-t border-grey-light">{{ $index + 1 }}</td>
                                    <td class="hidden py-8 md:table-cell border-t">
                                        <a href="#">
                                            <img src="{{asset('storage/images/'.$order_detail->product->product_image)}}"
                                                class="w-28 rounded" alt="Thumbnail">
                                        </a>
                                    </td>
                                    <td class="py-4 px-6 border-t border-grey-light">
                                        @foreach($products as $product)
                                            {{ $product->name }} </strong> - Size: <strong>{{ $order_detail->size }}</strong></p>
                                        @endforeach
                                    </td>
                                    <td class="border-t text-center">
                                        {{ $order_detail->total_order }}
                                    </td>
                                    <td class="py-4 px-6 border-t border-grey-light text-center">Rp. {{ number_format($order_detail->total_price) }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>