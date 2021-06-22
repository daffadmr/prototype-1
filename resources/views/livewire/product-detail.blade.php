<div>
    <section class="container text-gray-700 body-font my-5 bg-gray-100">
        <div class="w-full">
            <div class="py-3 mb-4 text-black text-sm">
                <ul class="flex">
                    <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li><a href="{{ route('product-index') }}" class="underline">Products Index</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="font-bold">Product Detail</li>
                </ul>
            </div>
        </div>

        <div>
            <div>
                @if(session()->has('message'))
                <div class="border border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>

        <p class="text-3xl mt-4 font-bold">Product Detail</p>

        <div class="container px-0 py-4 mx-auto">
            <div class="mx-auto flex flex-wrap">
                <img alt="jersey" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{asset('storage/images/'.$product->product_image)}}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    
                        <form wire:submit.prevent="shoppingCart">
                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"> {{$product->name}}</h1>
                            <div class="flex mb-2">
    
                            </div>
                            <p class="leading-relaxed">
                            League <img src="{{ url('img/asset/liga/') }}/{{ $product->leagues->league_image }}" class="w-16 mt-1" alt=""> <br>
                            Stock   : @if($product->is_ready == 1) 
                                    <b> Ready Stock </b>
                                    @else
                                    <b> Out Of Stock </b>
                                    @endif
                                    <br>
                            Weight   : {{ $product->weight }} Kg.<br>
                            </p>


                            <div class="flex mt-6 items-center pb-5 border-gray-200 mb-5">
                            
                            <div class="flex items-center">
                                <span class="mr-3">Quantity</span>
                                <div class="relative">
                                <select wire:model="quantity" class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-black text-base pl-3 pr-10">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                    

                                <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                                </div>
                            </div>
                            </div>


                            <div class="flex mt-6 items-center pb-5  border-gray-200 mb-5">     
                            <div class="flex items-center">
                                <span class="mr-3">Size</span>
                                <div class="relative">
                                <select wire:model="size" class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-black text-base pl-3 pr-10">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>

                                <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                                </div>
                            </div>
                            </div>


                            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                            <div class="flex items-center">
                                <span class="mr-3">Note</span>
                                <div class="relative">
                                <textarea wire:model="note" class="w-full px-3 py-2 text-gray-700 focus:border-black border rounded-lg focus:outline-none" rows="4" placeholder="Additional Notes"></textarea>
                            </div>
                            </div>
                            </div>


                            <div class="flex">
                                <span class="title-font font-medium text-2xl text-gray-900">Rp. {{ number_format($product->price) }}</span>
                                @if (!Auth::user())
                                <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded"><a href="{{ route('login') }}"><i class="fas fa-shopping-cart"></i></a></button>
                                    @else
                                    @if(Auth::user()->is_admin == 0)
                                        @if($product->is_ready == 1) 
                                            <button type="submit" class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded"> <i class="fas fa-shopping-cart"></i> </button>
                                        @else
                                            <button type="button" class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded opacity-50 cursor-not-allowed"> <i class="fas fa-times"></i> </button>
                                        @endif
                                    @endif
                                @endif
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
</div>