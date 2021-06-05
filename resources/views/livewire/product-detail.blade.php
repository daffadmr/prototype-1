<div>
    catatan sementara untuk produk detail <br>
    {{$product->name}}<br>
    Harga: Rp. {{ number_format($product->price) }} <br>
    Gambar: <br>
        <img src="{{ url('img/asset/jersey/') }}/{{ $product->product_image }}" alt=""><br>
    Berat: {{ $product->weight }}<br>
    League: <img src="{{ url('img/asset/liga/') }}/{{ $product->leagues->league_image }}" alt=""><br>
    Stok: 
    @if($product->is_ready == 1) 
        ready stock
    @else
        stok kosong
    @endif
    <br>catatan: tambahkan input untuk jumlah beli dan keterangan (catatan), tambahkan button beli
    <br> hint: bisa pake fontawesome buat icon
    
</div>
