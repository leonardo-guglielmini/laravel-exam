<div class="bg-white rounded-2xl shadow-md p-6 space-y-3 border border-gray-200 hover:shadow-lg transition">
    <h2 class="text-xl font-semibold text-gray-800">{{ $name }}</h2>
    <p class="text-sm text-gray-500">
        Release date:
        <span class="font-medium text-gray-700">{{ $release_date }}</span>
    </p>
    <p class="text-sm text-gray-500">
        In stock: <span class="font-bold">{{ $stock }}</span>
    </p>
    <p class="text-lg text-green-600 font-bold flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <span class="line-through">{{$price}}</span> &nbsp; {{$discounted_price}}
    </p>
    <div class="flex justify-between items-center gap-3 ">
        <div class="flex gap-3">
            <a href="{{route('products.edit', $id)}}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</a>
            <button onclick="openModal('{{ $id }}')" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                Delete
            </button>
        </div>
        <a href="{{ route('products.show', $id) }}" class="flex items-center text-gray-900 hover:font-bold transition-all duration-100 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <p>Details</p>          
        </a>
    </div>

    <dialog id="delete-dialog-{{ $id }}" class="rounded-lg p-6 w-full max-w-md shadow-xl backdrop:bg-black/40 opacity-0 transform scale-50 transition-all duration-300 ease-out">
        <form method="dialog" class="flex justify-end">
            <button class="text-gray-500 hover:text-gray-800 text-xl font-bold">&times;</button>
        </form>
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Confirm deletion</h2>
        <p class="text-gray-600 mb-6">
            Are you sure you want to eliminate <strong>{{ $name }}</strong>? This action cannot be reverted!
        </p>
        <div class="flex justify-end gap-3">
            <form method="dialog">
                <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">
                    Cancel
                </button>
            </form>
            <form method="POST" action="{{ route('products.destroy', $id) }}">
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