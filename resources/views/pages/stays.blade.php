@extends('layouts.app')

@section('title', 'Project details')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-3 gap-10">

    <div class="col-span-2 space-y-10">
    
        <x-project-hero />

        <x-project-gallery />
    </div>
    <x-project-sidebar/>
    <div class="col-span-3">
        <x-project-about />
    </div>
    <div class="col-span-2">
        <x-project-amenities />
    </div>
    <x-project-map />
    <div class="col-span-3">
        <x-similar-stays />
    </div>

    

</section>
@endsection