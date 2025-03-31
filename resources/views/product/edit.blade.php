@extends('layouts.default')

@section('page_title')
    Edit
@endsection

@section('main')
    <form action="{{route("products.update", $product)}}" method="POST">
        @csrf
        @method("PUT")

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value={{$product->name}} required>

        <label for="description">Description</label>
        <input type="text" name="description" id="description" value={{$product->description}} required>

        <label for="stock">Stock</label>
        <input type="number" min="1" max="999" name="stock" id="stock" value={{$product->stock}} required>
        
        <label for="price">Price</label>
        <input type="number" min="0.00" max="99999999.00" step="0.01" name="price" id="price" value={{$product->price}} required>

        <input type="submit" value="Update">
    </form>
@endsection