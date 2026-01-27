<div class="relative bg-white rounded-xl overflow-hidden shadow">

    {{-- ICONS --}}
    
        
      
    

    {{-- IMAGE --}}
    <img src="{{ asset($image) }}"
         alt="{{ $title }}"
         class="w-full h-56 object-cover">

    {{-- TEXT --}}
    <div class="p-4">
        <h3 class="font-semibold">{{ $title }}</h3>
        <p class="text-sm text-gray-500">{{ $location }}</p>
        <p class="mt-1 font-medium">{{ $price }}</p>
    </div>
</div>