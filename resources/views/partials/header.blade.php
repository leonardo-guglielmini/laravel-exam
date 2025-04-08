<header class="bg-white shadow-md p-4 sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between">
        <nav class="space-x-4">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-indigo-600">Home</a>
        </nav>

        <div class="space-x-2">
            @guest
                <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline">Login</a>
                <a href="{{ route('register') }}" class="text-sm text-white bg-indigo-600 hover:bg-indigo-700 px-3 py-1 rounded-lg">Register</a>
            @else
                <span class="text-gray-700 text-sm">Hi, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-sm text-red-500 hover:underline">Logout</button>
                </form>
            @endguest
        </div>
    </div>
</header>