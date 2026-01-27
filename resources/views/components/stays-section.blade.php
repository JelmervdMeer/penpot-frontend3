<section class="relative max-w-7xl mx-auto px-6 py-16">

  <div class="absolute top-10 right-3 z-10 p-3">
    <img src="{{ asset('images/switch.png') }}" class="w-15 h-10">
</div>

    <h2 class="text-xl font-semibold mb-6">
        Stays nearby: Toronto Ontario
    </h2>

    <div class="grid grid-cols-4 gap-6">
        @foreach ($stays as $stay)
            <div class="border rounded-xl overflow-hidden relative">

                <img
                    src="{{ $stay['image'] }}"
                    alt="{{ $stay['title'] }}"
                    class="h-48 w-full object-cover"
                >
                <div class="h-5 w-5">
                <span class="absolute top-2 right-2 
             flex items-center justify-center
             w-7 h-7 
             text-2xl 
             bg-white rounded-full cursor-pointer">
    &#9825;
</span>
</div>

                <div class="p-2 grid grid-cols-3 grid-rows-2 justify-around justify-center gap-y-4">
                    <div class="col-span-2">
                        <h3 class="font-medium">{{ $stay['title'] }}</h3>
                        <p class="text-sm text-gray-500">{{ $stay['location'] }}</p>
                    </div>
                    <div class="flex">
                     <span>{{ $stay['rating'] }}</span><span class="text-sm text-yellow-500 flex justify-center">★</span> <span class="text-l text-yellow-500 flex justify-center">★</span>
</div>
                    <span class="font-semibold col-span-2">{{ $stay['price'] }}</span>
                    <span class="text-[#00c29f]">Price chart</span>
                
                </div>

            </div>
        @endforeach
     
</div>
<div class="flex justify-center items-center w-full mt-10">
    <button class=
    "px-6 py-2 rounded-lg border border-&#00c29f;-500 text-teal-600 hover:bg-teal-50 transition">SHOW MORE</button>
    </div>

</section>