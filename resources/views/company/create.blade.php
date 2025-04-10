@extends('layouts.default')

@section('page_title')
    Create Product
@endsection

@section('main')
    <div class="max-w-2xl mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-center text-gray-900 mb-6">Create New Company</h1>

        <form action="{{ route('companies.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500" required>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    Create Company
                </button>
            </div>
        </form>
    </div>
@endsection
