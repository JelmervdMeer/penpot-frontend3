<section
    class="relative bg-cover bg-center"
    style="background-image: url('{{ asset('images/herobg.jpg') }}')"
>
    <!-- Witte fade overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 to-transparent"></div>

    <!-- Content -->
    <div class="relative max-w-7xl mx-auto px-6 py-24 grid grid-cols-2 gap-12 items-center">
        <div>
            <h1 class="text-5xl font-bold text-gray-900 leading-tight whitespace-nowrap">
                Find a <span class="text-teal-600">host</span>
                for every journey
            </h1>

            <p class="mt-6 text-gray-700 max-w-md">
                Discover the best local rental properties that fits your every travel needs
            </p>

            <div class="mt-10">
                <x-search-bar />
            </div>
        </div>
    </div>
</section>