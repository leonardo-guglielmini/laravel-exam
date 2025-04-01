@extends('layouts.default')

@section('page_title')
    Create
@endsection

@section('main')
    <form action="{{route("products.store")}}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Description</label>
        <input type="text" name="description" id="description" required>

        <label for="stock">Stock</label>
        <input type="number" min="1" max="999" name="stock" id="stock" required>
        
        <label for="price">Price</label>
        <input type="number" min="0.00" max="99999999.00" step="0.01" name="price" id="price" required>

        <label for="company_id">Company</label>
        <select name="company_id" id="company_id">
            @foreach ($companies as $company)
                <option value={{$company->id}}>{{$company->name}}</option>
            @endforeach
        </select>
        
        <input type="submit" value="Create">
    </form>
@endsection