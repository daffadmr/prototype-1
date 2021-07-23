<div>
    <section class="container admin my-5">
    <div class="w-full">
            <div class="py-3 mb-4 text-black text-sm">
                <ul class="flex">
                    <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="font-bold">Halaman Admin (Produk)</li>
                </ul>
            </div>
    </div>

    <p class="text-3xl mt-4 font-bold">Halaman Admin (Produk)</p>
    <div class="flex justify-center my-6">
        <div class="flex flex-col rounded-md w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y">
            <div class="p-4 bg-gray-100 rounded-full">
                <h1 class="ml-2 font-bold uppercase">List Produk</h1>
            </div>

            <div class="flex mt-3">
                <input wire:model="search" type="text" class="border-2 form-input mt-4 w-72" placeholder="Search Product">
            </div>

            <div class="flex mt-2">
            <a href="{{ route('create-product') }}" class="inline-flex justify-center px-8 py-2 w-72 text-white font-semibold bg-green-500 hover:bg-green-800 rounded-md shadow-sm"> <i class="fas fa-plus"></i>&nbsp;Create Product </a>
            </div>

            <table class="text-left w-full border-collapse mt-5"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">No</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nama Produk</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Gambar</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Harga</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Stok</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $index => $product)
                <tr>
                <td class="py-4 px-6 border-t border-grey-light">{{ $index + 1 }}</td>
                <td class="py-4 px-6 border-t border-grey-light">{{ $product->name }}</td>
                <td class="py-4 px-6 border-t border-grey-light">
                    <img src="{{asset('storage/images/'.$product->product_image)}}" class="w-28 rounded" alt="">
                </td>
                <td class="py-4 px-6 border-t border-grey-light">Rp{{ number_format($product->price) }}</td>
                <td class="py-4 px-6 border-t border-grey-light">
                    @if($product->is_ready == 1)
                        Ready Stock
                    @else
                        Stok Kosong
                    @endif
                </td>
                <td class="py-4 px-6 border-t border-grey-light">
                    <a href="{{ route('product-detail', $product->id ) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xl bg-green hover:bg-green-dark"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('edit-product', $product->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xl bg-blue hover:bg-blue-dark"><i class="fas fa-edit"></i></a>
                    <button type="button" onclick="return confirm('Apakah yakin ingin menghapus produk ini?') || event.stopImmediatePropagation()" wire:click="delete({{ $product->id }})" class="text-grey-lighter font-bold py-1 px-3 rounded text-xl bg-blue hover:bg-blue-dark"><i class="text-red-500 fas fa-trash"></i></a>
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>

            <div class="mt-5">
                {{ $products->links() }}
            </div>
        </div>
    </div>
    </section>
</div>
