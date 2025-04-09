@extends('layouts.default')

@section('page_title')
    {{$product->name}}
@endsection

@section('main')
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-900">{{$product->name}}</h1>
            <p class="text-xl text-gray-600">{{$product->company->name}}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex justify-center items-center">
                <img src="{{$product->image_url ? asset('storage/' . $product->image_url) : asset('storage/placeholder.png')}}" alt="{{$product->name}}" class="max-w-full">
            </div>
            <div class="flex flex-col justify-start space-y-4">
                <p class="text-lg text-gray-700 font-semibold">Description:</p>
                <p class="text-base text-gray-500">{{$product->description}}</p>

                <div class="flex justify-between items-center">
                    <p class="text-lg text-gray-800 font-semibold">Price:</p>
                    <p class="text-xl text-green-500 font-bold">${{$product->price}}</p>
                </div>

                <div class="flex justify-between items-center">
                    <p class="text-lg text-gray-800 font-semibold">Stock:</p>
                    <p class="text-xl text-blue-500 font-bold">{{$product->stock}}</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center gap-3">
            <div class="flex gap-3">
                <a href="{{route('products.edit', $product->id)}}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</a>
                <button onclick="openModal('{{ $product->id }}')" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                    Delete
                </button>
            </div>
        </div>

        <dialog id="delete-dialog-{{ $product->id }}" class="rounded-lg p-6 w-full max-w-md shadow-xl backdrop:bg-black/40 opacity-0 transform scale-50 transition-all duration-300 ease-out">
            <form method="dialog" class="flex justify-end">
                <button class="text-gray-500 hover:text-gray-800 text-xl font-bold">&times;</button>
            </form>
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Confirm deletion</h2>
            <p class="text-gray-600 mb-6">
                Are you sure you want to eliminate <strong>{{ $product->name }}</strong>? This action cannot be reverted!
            </p>
            <div class="flex justify-end gap-3">
                <form method="dialog">
                    <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">
                        Cancel
                    </button>
                </form>
                <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                        Delete
                    </button>
                </form>
            </div>
        </dialog>
    
        <script>
            function openModal(productId) {
                const dialog = document.getElementById('delete-dialog-' + productId);
                dialog.showModal();
                setTimeout(() => {
                    dialog.classList.remove('opacity-0', 'scale-50');
                    dialog.classList.add('opacity-100', 'scale-100');
                }, 30);
            }
        </script>
    </div>
@endsection

