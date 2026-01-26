<section class="max-w-7xl mx-auto px-6 py-16">

    <h2 class="text-xl font-semibold mb-6">
        Stays nearby: Toronto Ontario
    </h2>

    <div class="grid grid-cols-4 gap-6">
        @foreach ($stays as $stay)
            <div class="border rounded-xl overflow-hidden">

                <img
                    src="{{ $stay['image'] }}"
                    alt="{{ $stay['title'] }}"
                    class="h-48 w-full object-cover"
                >

                <div class="p-2 grid grid-cols-3 grid-rows-2 justify-around justify-center gap-y-4">
                    <div class="col-span-2">
                        <h3 class="font-medium">{{ $stay['title'] }}</h3>
                        <p class="text-sm text-gray-500">{{ $stay['location'] }}</p>
                    </div>
                    <span class="text-sm text-yellow-500 flex justify-center">★ {{ $stay['rating'] }}</span>
                    <span class="font-semibold col-span-2">{{ $stay['price'] }}</span>
                
                </div>

            </div>
        @endforeach
    </div>

</section>