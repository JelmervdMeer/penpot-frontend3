<div class="flex gap-3">
    @foreach($images as $image)
        <img src="{{ asset($image) }}"
             class="w-40 h-20 object-cover rounded-lg"
             alt="Gallery image">
    @endforeach
</div>