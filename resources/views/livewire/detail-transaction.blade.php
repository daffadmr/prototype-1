<div>
    <section class="detail-transaction my-5">
        <div class="w-full">
                <div class="py-3 mb-4 text-black text-sm">
                    <ul class="flex">
                        <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li><a href="{{ route('admin-order') }}" class="underline">Halaman Admin (Order)</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li class="font-bold">Detail Transaksi</li>
                    </ul>
                </div>

                <p class="text-3xl mt-4 font-bold">Detail Transaksi</p>
                <div class="flex justify-center my-6">
                    <div class="flex flex-col rounded-md w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y">
                        <div class="p-4 bg-gray-100 rounded-full">
                            <h1 class="ml-2 font-bold uppercase">Detail Transaksi {{ $order->order_code }}</h1>
                        </div>

                        <table class="text-left w-1/2 border-collapse mt-5 p-4"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead class="mt-2">
                                <tr>
                                    <th colspan="3">Data Penerima</th>
                                </tr>
                            </thead>
                            <tbody class="mt-4">
                                <tr>
                                    <td>Nama Penerima</td>
                                    <td>:</td>
                                    <td>{{ $order->name }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Penerima</td>
                                    <td>:</td>
                                    <td>{{ $order->address }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Telepon Penerima</td>
                                    <td>:</td>
                                    <td>{{ $order->telephone }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="text-left w-full border-collapse mt-5"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">No</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Barang</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">QTY</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Harga Satuan</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                $order_details = \App\Models\OrderDetail::where('order_id', $order->id)->get(); 
                            ?>
                            @forelse($order_details as $order_detail)
                            <tr>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $no++ }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ $order_detail->product->name}}
                                    </strong> - Size: <strong>{{ $order_detail->size }}</strong></p>
                                    @if (!empty($order_detail->note) )
                                        <p>Note: {{ $order_detail->note }}</p>
                                    @else
                                        <p>Note: -</p>
                                    @endif
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ $order_detail->total_order}}
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ $order_detail->product->price }}
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ $order_detail->total_price }}
                                </td>
                            @empty
                            <tr>
                                <td colspan="6" align="center">Data Kosong</td>
                            </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <div class="flex justify-end">
                            <table class="w-1/2 border-collapse mt-5 p-4"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                                <thead class="mt-2">
                                    <tr>
                                        <th colspan="3">Rincian Harga</th>
                                    </tr>
                                </thead>
                                <tbody class="mt-4">
                                    <tr>
                                        <td>Total Harga Beli</td>
                                        <td>:</td>
                                        <td class="text-right">Rp. {{ number_format($order->total_price) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ongkos Kirim</td>
                                        <td>:</td>
                                        <td class="text-right">Rp. {{ number_format($order->shipping_costs) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Yang harus dibayarkan</td>
                                        <td>:</td>
                                        <td class="text-right">Rp. {{ number_format($order->final_price) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>                                                         
                    </div>
                </div>
        </div>
    </section>
</div>
