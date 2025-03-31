@extends('layouts.default')

@section('page_title')
    Index
@endsection

@section('main')
    @foreach ($products as $product)
    <h1>{{$product->name}}</h1>    
    @endforeach    
@endsection
