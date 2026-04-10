<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nexora Journals')</title>
    <meta name="description" content="@yield('meta_description', 'Nexora Journals')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">
    <div class="min-h-screen flex flex-col">
        @include('partials.header')

        <main class="flex-1">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
</body>
</html>