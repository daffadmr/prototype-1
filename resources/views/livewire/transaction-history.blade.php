<div>
    <section class="transaction-history my-5">
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
            <div class="mx-3 p-5">
                <?php $no = 1 ?>
                @forelse($orders as $order)
                    <p>{{ $no++ }}</p>
                    <p>{{ $order->order_code }}</p>
                    <p>Rp. {{ number_format($order->final_price) }}</p>
                    <p>
                        @if($order->status == 1)
                            Sudah Dibayar
                        @elseif($order->status == 2)
                            Proses
                        @elseif($order->status == 3)
                            Sudah Dikirim
                        @endif
                    </p>
                    <p>
                        <?php 
                        $order_details = \App\Models\OrderDetail::where('order_id', $order->id)->get(); 
                        ?>
                        @foreach ($order_details as $order_detail)
                            <br>
                                <img src="{{asset('storage/images/'.$order_detail->product->product_image)}}" class="w-28 rounded" alt="">
                            <br>
                            {{ $order_detail->product->name }} Size: {{ $order_detail->size }}, 
                            <br>x{{ $order_detail->total_order }}
                            <br> Note:
                            @if(!empty($order_detail->note))
                                {{ $order_detail->note }}
                            @else
                                -
                            @endif
                        @endforeach
                    </p>
                @empty
                    <p>Data Kosong</p>
                @endforelse
            </div>
        </div>
    </section>
</div>
