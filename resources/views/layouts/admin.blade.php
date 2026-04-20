<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - Nexora Journals')</title>
    <meta name="description" content="@yield('meta_description', 'Admin Panel - Nexora Journals')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="bg-[#f3f4f6] text-slate-800 antialiased">

<div x-data="{ sidebarOpen: false }" class="min-h-screen">

    <!-- Mobile Overlay -->
    <div
        x-show="sidebarOpen"
        x-cloak
        class="fixed inset-0 z-40 bg-black/40 lg:hidden"
        @click="sidebarOpen = false">
    </div>

    <!-- Sidebar -->
    <aside
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
        class="fixed top-0 left-0 z-50 h-screen w-72 transform border-r border-slate-200 bg-white shadow-lg transition-transform duration-300 lg:translate-x-0"
    >
        <!-- Logo -->
        <div class="flex h-20 items-center justify-between border-b border-slate-200 px-6">
            <div>
                <h2 class="text-xl font-bold text-blue-700">Nexora</h2>
                <p class="text-sm text-slate-500">Journal Management</p>
            </div>

            <button
                @click="sidebarOpen = false"
                class="rounded-md p-2 text-slate-500 hover:bg-slate-100 lg:hidden"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Menu -->
        <div class="flex h-[calc(100vh-5rem)] flex-col justify-between overflow-y-auto p-4">
            <nav class="space-y-2">
                <a href="{{ route('admin.journals') }}"
                   class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6.75A2.25 2.25 0 016.25 4.5h11.5A2.25 2.25 0 0120 6.75v10.5A2.25 2.25 0 0117.75 19.5H6.25A2.25 2.25 0 014 17.25V6.75z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 8h8M8 12h8M8 16h5"/>
                    </svg>
                    <span>Manage Journal</span>
                </a>

                <a href="{{ route('admin.journal.create') }}"
                   class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                    </svg>
                    <span>Add Journal</span>
                </a>
            </nav>

            <div class="rounded-xl bg-slate-50 p-4 text-xs text-slate-500">
                Journal admin panel
            </div>
        </div>
    </aside>

    <!-- Right Content Area -->
    <div class="lg:pl-72">
        
        <!-- Fixed Header -->
        <header class="fixed top-0 right-0 left-0 z-30 h-20 border-b border-slate-200 bg-white/95 backdrop-blur lg:left-72">
            <div class="flex h-full items-center justify-between px-4 sm:px-6 lg:px-8">
                <div class="flex items-center gap-4">
                    <button
                        @click="sidebarOpen = true"
                        class="rounded-lg border border-slate-200 bg-white p-2 text-slate-600 hover:bg-slate-50 lg:hidden"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>

                    <div>
                        <h1 class="text-lg font-bold text-slate-800 sm:text-2xl">
                            @yield('page_title', 'Journal Manager')
                        </h1>
                        <p class="text-sm text-slate-500">
                            Manage all journal content from one place
                        </p>
                    </div>
                </div>

                <div class="hidden sm:flex items-center gap-3">
                    <a href="{{ route('admin.journal.create') }}"
                       class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white transition hover:bg-blue-700">
                        Add Journal
                    </a>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="min-h-screen px-4 pb-6 pt-24 sm:px-6 lg:px-8">
            @yield('content')
        </main>
    </div>
</div>

</body>
</html>