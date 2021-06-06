<div class="lg:container mx-10">
    <section class="index-of-product my-5">
    <p class="text-3xl mt-4 font-bold">All Products</p>
    <input wire:model="search" type="text" class="border-2 form-input mt-4 w-72" placeholder="Search Product">
    <div class="p-4 flex flex-wrap items-start">
            @foreach ($products as $product)
                <a href="{{ route('product-detail', $product->id ) }}">
                    <div
                        class="py-4 w-64 h-96 flex-shrink-0 m-6 bg-gray-100 rounded-lg max-w-xs shadow-lg">
                        <div class="px-4 flex items-center justify-center">
                            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3">
                            </div>
                            <img
                                src="{{ url('img/asset/jersey/') }}/{{ $product->product_image }}">
                        </div>
                        <div class="pt-5 px-2 relative text-center">
                            <h4 class="font-semibold">{{ $product->name }}</h4>
                            <br>
                            <h4 class="mb-5">Rp. {{ number_format($product->price)}}</h4>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        {{ $products->links() }}
    </section>
</div>
