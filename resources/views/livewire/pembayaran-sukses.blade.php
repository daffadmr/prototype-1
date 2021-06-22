<div>
    <section class="pembayaran-sukses my-5">
        <div class="lg:container lg:w-full lg:ml-9 text-black text-sm">
            <ul class="flex">
                <li><a href="{{ route('all-transaction') }}" class="underline">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="#" class="underline">Pembayaran Sukses</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="font-bold">Pembayaran Sukses</li>                
            </ul>
            <p class="text-3xl mt-4 font-bold">Pembayaran Sukses</p>
        </div>

        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                <p class="text-center mb-4 text-2xl font-bold">Pembayaran Anda Telah Berhasil Dilakukan!</p>
                <hr>
                <p class="text-center mt-4 mb-4 text-lg">Anda akan diredirect ke Halaman Home dalam waktu 5 detik</p>
            </div>
        </div>
    </section>
</div>
<script>
    setTimeout(function() {
        window.location.href = '/';
    }, 5000);
</script>
