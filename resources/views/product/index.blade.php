@extends('layouts.default')

@section('page_title')
    Index
@endsection

@section('main')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($products as $product)
        <x-card>
            <x-slot:name>{{ $product->name }}</x-slot:name>
            <x-slot:release_date>{{ $product->release_date }}</x-slot:release_date>
            <x-slot:price>{{ $product->price }}</x-slot:price>
            <x-slot:stock>{{ $product->stock }}</x-slot:stock>
            <x-slot:id>{{$product->id}}</x-slot:id>
        </x-card>
    @endforeach
</div>
@endsection
