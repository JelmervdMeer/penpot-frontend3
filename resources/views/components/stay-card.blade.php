<div class="border rounded-xl overflow-hidden">
    <img src="{{ asset($image) }}"
         class="h-40 w-full object-cover"
         alt="">

    <div class="p-3 space-y-1">
        <h3 class="font-semibold">{{ $title }}</h3>
        <p class="text-sm text-gray-500">{{ $location }}</p>
        <p class="font-bold">{{ $price }} <span class="text-sm font-normal">/ night</span></p>
    </div>
</div>