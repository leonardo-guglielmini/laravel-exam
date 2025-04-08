<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>@yield('page_title')</title>
</head>
<body class="flex flex-col min-h-screen">
    @include('partials.header')

    <main class="flex-grow container mx-auto px-4 py-6">
        @yield('main')    
    </main>    

    @include('partials.footer')
</body>
</html>