<section>
    <h2 class="text-xl font-semibold mb-4">Similar stays</h2>

    <div class="grid grid-cols-3 gap-6">
        @foreach($projects as $project)
            <x-stay-card
                :image="$project['image']"
                :title="$project['title']"
                :location="$project['location']"
                :price="$project['price']"
            />
        @endforeach
    </div>
</section>