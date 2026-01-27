@extends('layouts.app')

@section('title', 'Project details')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 lg:grid-cols-3 gap-10">

    {{-- RIJ 1: HERO + SIDEBAR --}}
    <div class="lg:col-span-2">
        <x-project-hero />
    </div>

    <div class="lg:col-span-1">
        <x-project-sidebar />
    </div>

    {{-- RIJ 2: GALLERY --}}
    <div class="lg:col-span-3">
        <x-project-gallery />
    </div>

    {{-- RIJ 3: ABOUT --}}
    <div class="lg:col-span-3">
        <x-project-about />
    </div>

    {{-- RIJ 4: AMENITIES + MAP (naast elkaar, samen volle breedte) --}}
    <div class="lg:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-10">
        <x-project-amenities />
        <x-project-map />
    </div>

    {{-- RIJ 5: SIMILAR STAYS --}}
    <div class="lg:col-span-3">
        <x-similar-stays-card image="images/image.jpg" />
    </div>

</section>
@endsection