<div>
    <section class="pembayaran my-5">
        <div class="lg:container lg:w-full lg:ml-9 text-black text-sm">
            <ul class="flex">
                <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="font-bold">Pembayaran</li>
            </ul>
            <p class="text-3xl mt-4 font-bold">Pembayaran</p>
        </div>

        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                    <p class="text-center mb-4 font-bold">Silahkan scan Qr Code di bawah ini untuk melakukan pembayaran</p>
                    <hr>
                    <div class="p-4">
                        <div class="flex justify-center py-4">
                            <div class="shadow-2xl">{!! QrCode::size(250)->generate(route('home')); !!}</div>
                        </div>
                        
                    <div class="flex justify-end">
                    </div>
                    </div>
            </div>
        </div>
    </section>
</div>
<script>
    setTimeout(function() {
        window.location.href = '/pembayaran-sukses';
    }, 60000);
</script>