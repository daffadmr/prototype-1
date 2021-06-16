<div>
    <section class="container transaction-history my-5">
        <div class="w-full">
            <div class="py-3 mb-4 text-black text-sm">
                <ul class="flex">
                    <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="font-bold">Transaksi Anda</li>
                </ul>
            </div>
        </div>

        <p class="text-3xl mt-4 font-bold">Transaksi Anda</p>
        <div class="my-6">
            <p class="text-xl mt-2">{{ Auth::user()->name }}</p>
            <div class="flex justify-center my-6">
                <div class="flex flex-col rounded-md w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y">
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead class="border-b">
                            <tr class="h-12 uppercase">
                                <th class="text-center">NO</th>
                                <th>
                                    <span class="lg:hidden" title="No.Transaksi">notr</span>
                                    <span class="hidden lg:inline">No.Transaksi</span>
                                </th>
                                <th class="text-center md:table-cell">Total Price</th>
                                <th class="text-center">Status</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @forelse($orders as $order)
                                <tr class="h-12">
                                    <td class="py-4 px-6 border-t border-grey-light text-center">{{ $no++ }}
                                    </td>
                                    <td class="py-4 px-6 border-t border-grey-light text-center">
                                        {{ $order->order_code }}
                                    </td>
                                    <td class="py-4 px-6 border-t border-grey-light text-center">
                                        Rp. {{ number_format($order->final_price) }}</td>
                                    <td class="py-4 px-6 border-t border-grey-light text-center"> <strong>
                                            @if ($order->status == 0)
                                                <span class="text-red-600 font-bold">Belum Dibayar</span>
                                            @elseif($order->status == 1)
                                                <span class="text-green-400 font-bold">Sudah Dibayar</span>
                                            @elseif($order->status == 2)
                                                <span class="text-blue-600 font-bold">Proses</span>
                                            @elseif($order->status == 3)
                                                <span class="text-green-600 font-bold">Sudah Dikirim</span>
                                            @endif
                                        </strong>
                                    </td>
                                    <td class="py-4 px-6 border-t border-grey-light text-center">
                                        <a href="{{ route('transaction-detail', $order->id) }}"
                                            class="text-grey-lighter font-bold py-1 px-3"><i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                        </tbody>
                    @empty
                        <tr>
                            <td colspan="6" align="center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
    </section>
</div>
