<div>
    <section class="container index-of-product-based-on-league my-5">
        <div class="w-full">
            <div class="py-3 mb-4 text-black text-sm">
                <ul class="flex">
                    <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="font-bold">Products Index</li>
                </ul>
            </div>
        </div>

        <p class="text-3xl mt-4 font-bold">{{ $title }} Jersey</p>
        <input wire:model="search" type="text" class="border-2 form-input mt-4 w-72" placeholder="Search Product">
        <div class="p-4 flex flex-wrap items-start">
            @foreach ($product as $produk)
                <a href="{{ route('product-detail', $produk->id )}}">
                    <div
                        class="py-4 w-56 h-80 flex-shrink-0 m-6 bg-gray-100 rounded-lg max-w-xs shadow-lg">
                        <div class="relative px-4 flex items-center justify-center">
                            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3">
                            </div>
                            <img class="relative"
                                src="{{asset('storage/images/'.$produk->product_image)}}">
                        </div>
                        <div class="pt-5 px-2 relative text-center">
                            <h4 class="font-semibold">{{ $produk->name }}</h4>
                            <br>
                            <h4 class="mb-5">Rp. {{ number_format($produk->price)}}</h4>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        {{ $product->links() }}
    </section>
</div>
