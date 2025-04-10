@extends('layouts.default')

@section('page_title')
    Index
@endsection

@section('page_heading')
    Listing of all products
@endsection

@section('main')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"> 
    <div class="bg-white rounded-2xl shadow-md p-6 border border-gray-200 hover:shadow-lg transition flex items-center justify-center">
        <a href="{{route('products.create')}}" class="flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>     
            <p>Add a product</p> 
        </a>
            
    </div>
    @foreach ($products as $product)
        <x-card>
            <x-slot:name>{{ $product->name }}</x-slot:name>
            <x-slot:release_date>{{ $product->release_date }}</x-slot:release_date>
            <x-slot:price>{{ $product->price }}</x-slot:price>
            <x-slot:discounted_price>{{round(($product->price/100) * (100-$product->tag->price_reduction_percentage),2)}}</x-slot:discounted_price>
            <x-slot:stock>{{ $product->stock }}</x-slot:stock>
            <x-slot:id>{{$product->id}}</x-slot:id>
        </x-card>
    @endforeach
</div>
@endsection
