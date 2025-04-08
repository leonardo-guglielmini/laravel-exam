@extends('layouts.default')

@section('page_title')
    Create Product
@endsection

@section('main')
    <div class="max-w-2xl mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-center text-gray-900 mb-6">Create New Product</h1>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-gray-700">Description</label>
                <input type="text" name="description" id="description" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="company_id" class="block text-sm font-semibold text-gray-700">Company</label>
                <select name="company_id" id="company_id" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500" size="5">
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="stock" class="block text-sm font-semibold text-gray-700">Stock</label>
                <input type="number" min="1" max="999" name="stock" id="stock" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-semibold text-gray-700">Price</label>
                <input type="number" min="0.00" max="99999999.00" step="0.01" name="price" id="price" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="image" class="block text-sm font-semibold text-gray-700">Product Image</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*">
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    Create Product
                </button>
            </div>
        </form>
    </div>
@endsection
