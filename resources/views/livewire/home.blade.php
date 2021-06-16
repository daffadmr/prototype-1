<div class="lg:container mx-10">
    <div class="banner">
        <img src="{{ url('img\asset\slider\slider1.jpg') }}" alt="">
    </div>

    <section class="pilih-liga my-5">
        <h1 class="sm:text-center lg:text-left font-bold text-3xl">Liga</h1>
        <div class="p-4 flex flex-wrap items-start justify-center">
            @foreach ($leagues as $league)
                <a href="{{ route('product-league', $league->id) }}">
                    <div
                        class="py-10 w-64 flex-shrink-0 m-6 relative overflow-hidden bg-gray-100 rounded-lg max-w-xs shadow-lg">
                        <div class="relative px-10 flex items-center justify-center">
                            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3">
                            </div>
                            <img class="relative w-40"
                                src="{{ url('img/asset/liga') }}/{{ $league->league_image }}">
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    <section class="champions-jersey">
        <h1 class="sm:text-center lg:text-left font-bold text-3xl">Jersey Juara Musim 2020 / 2021</h1>
        <div class="p-4 flex flex-wrap items-start justify-center">
            @foreach ($products as $product)
                <a href="{{ route('product-detail', $product->id ) }}">
                    <div
                        class="py-4 w-64 h-96 flex-shrink-0 m-6 bg-gray-100 rounded-lg max-w-xs shadow-lg">
                        <div class="relative px-4 flex items-center justify-center">
                            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3">
                            </div>
                            <img class="relative"
                                src="{{asset('storage/images/'.$product->product_image)}}">
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
    </section>
</div>
