<footer class="bg-gray-100 border-t mt-10 py-6">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
        <p class="text-sm text-gray-500">
            &copy; {{ date('Y') }} All rights reserved.
        </p>

        <div class="space-x-4 text-sm">
            <a href="{{ url('/privacy') }}" class="text-gray-600 hover:text-indigo-600">Privacy</a>
            <a href="{{ url('/terms') }}" class="text-gray-600 hover:text-indigo-600">Terms</a>
            <a href="{{ url('/contact') }}" class="text-gray-600 hover:text-indigo-600">Contact</a>
        </div>

        <div class="space-x-3 text-gray-500">
            <a href="#" class="hover:text-indigo-600" aria-label="Twitter">
                <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0022.43.36a9.08 9.08 0 01-2.88 1.1A4.52 4.52 0 0016.5 0c-2.52 0-4.57 2.02-4.57 4.52 0 .35.04.69.12 1.02C7.69 5.36 4.07 3.57 1.64.85A4.48 4.48 0 00.94 3.5c0 1.57.8 2.96 2.02 3.77A4.52 4.52 0 01.9 6.4v.06c0 2.2 1.57 4.04 3.65 4.46-.38.1-.79.16-1.2.16-.3 0-.58-.03-.86-.08.59 1.8 2.28 3.11 4.29 3.15A9.04 9.04 0 010 19.54a12.77 12.77 0 006.92 2.02c8.3 0 12.84-6.79 12.84-12.67 0-.2 0-.39-.01-.58A9.02 9.02 0 0023 3z"/>
                </svg>
            </a>
            <a href="#" class="hover:text-indigo-600" aria-label="GitHub">
                <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.1.82-.26.82-.58 0-.28-.01-1.02-.02-2-3.34.73-4.04-1.6-4.04-1.6-.55-1.38-1.35-1.75-1.35-1.75-1.1-.74.08-.72.08-.72 1.22.09 1.87 1.25 1.87 1.25 1.08 1.84 2.83 1.31 3.52 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.34-5.47-5.95 0-1.32.47-2.4 1.24-3.25-.12-.3-.54-1.51.12-3.15 0 0 1-.32 3.3 1.23a11.5 11.5 0 016 0C17 3.43 18 3.75 18 3.75c.66 1.64.24 2.85.12 3.15.77.85 1.24 1.93 1.24 3.25 0 4.62-2.8 5.64-5.48 5.94.43.38.81 1.12.81 2.26 0 1.63-.02 2.94-.02 3.34 0 .32.21.69.83.57C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>