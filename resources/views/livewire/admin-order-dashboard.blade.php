<div>
    <section class="container admin-order my-5">
        <div class="w-full">
            <div class="py-3 mb-4 text-black text-sm">
                <ul class="flex">
                    <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="font-bold">Halaman Admin (Order)</li>
                </ul>
            </div>
        </div>

        <p class="text-3xl mt-4 font-bold">Halaman Admin (Order)</p>
        <div class="flex justify-center my-6">
            <div class="flex flex-col rounded-md w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y">
                <div class="p-4 bg-gray-100 rounded-full">
                    <h1 class="ml-2 font-bold uppercase">Daftar Transaksi</h1>
                </div>

                <div class="flex mt-3">
                    <input wire:model="search" type="text" class="border-2 form-input mt-4 w-72"
                        placeholder="Search Transaksi">
                </div>

                <table class="text-left w-full border-collapse mt-5">
                    <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                    <thead class="bg-gray-100">
                        <tr>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                No</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Invoice</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Nama Pemesan</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Jml Transaksi</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Kurir</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Status</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $index => $order)
                            <tr>
                                <td class="py-4 px-6 border-t border-grey-light">{{ $index + 1 }}</td>
                                <td class="py-4 px-6 border-t border-grey-light">{{ $order->order_code }}</td>
                                <td class="py-4 px-6 border-t border-grey-light">{{ $order->user->name }}</td>
                                <td class="py-4 px-6 border-t border-grey-light">Rp.
                                    {{ number_format($order->final_price) }}</td>
                                <td class="py-4 px-6 border-t border-grey-light">{{ $order->courier }}</td>
                                <td class="py-4 px-6 border-t border-grey-light">
                                    @if ($order->status == 0)
                                        <span class="text-red-600 font-bold">Belum Dibayar</span>
                                    @elseif($order->status == 1)
                                        <span class="text-green-400 font-bold">Sudah Dibayar</span>
                                    @elseif($order->status == 2)
                                        <span class="text-blue-600 font-bold">Proses</span>
                                    @elseif($order->status == 3)
                                        <span class="text-green-600 font-bold">Sudah Dikirim</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6 border-t border-grey-light">
                                    <a href="{{ route('detail-transaction', $order->id) }}"
                                        class="text-grey-lighter font-bold py-1 px-3 rounded text-xl bg-green hover:bg-green-dark"><i
                                            class="fas fa-eye"></i></a>
                                    @if ($order->status != 0)
                                        <a href="{{ route('edit-transaction', $order->id) }}"
                                            class="text-grey-lighter font-bold py-1 px-3 rounded text-xl bg-blue hover:bg-blue-dark"><i
                                                class="fas fa-edit"></i></a>
                                    @endif
                                </td>
                            @empty
                            <tr>
                                <td colspan="6" align="center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-5">
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
