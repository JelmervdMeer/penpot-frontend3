<div class="flex flex-wrap gap-6">
    @foreach($projects as $project)
        <!-- Elke kaart -->
        <div class="flex bg-white rounded-xl shadow-md overflow-hidden w-full sm:w-[48%] lg:w-[32%]">
            <!-- Afbeelding -->
            <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-32 h-32 object-cover">

            <!-- Tekst -->
            <div class="p-4 flex flex-col justify-between">
                <div>
                    <h3 class="text-lg font-bold">{{ $project['title'] }}</h3>
                    <p class="text-gray-500">{{ $project['location'] }}</p>
                </div>
                <p class="mt-2 text-[#00c29f] font-semibold">{{ $project['price'] }}</p>
            </div>
        </div>
    @endforeach
</div>