@extends('layouts.app')

@section('title', 'Sign up')

@section('content')
<x-auth-hero>
    <x-auth-card>
        <x-auth-form />
        <x-auth-socials />
    </x-auth-card>
</x-auth-hero>
@endsection