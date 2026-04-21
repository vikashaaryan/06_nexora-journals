<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Journal Dashboard - Nexora Journals')</title>
    <meta name="description" content="@yield('meta_description', 'Journal Dashboard - Nexora Journals')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="bg-slate-100 text-slate-800 antialiased">
    <div
        x-data="{
            sidebarOpen: false,
            profileOpen: false,
            openJournalSetup: true,
            openIssueVolume: false,
            openExtraSettings: false
        }"
        class="min-h-screen"
    >
        <!-- Mobile Overlay -->
        <div
            x-show="sidebarOpen"
            x-cloak
            class="fixed inset-0 z-40 bg-black/40 lg:hidden"
            @click="sidebarOpen = false"
        ></div>

        <!-- Sidebar -->
        <aside
            class="fixed inset-y-0 left-0 z-50 flex w-72 flex-col border-r border-slate-200 bg-[#f7f7fb] shadow-sm transition-transform duration-300 lg:translate-x-0"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
        >
            <!-- Sidebar Header -->
            <div class="border-b border-slate-200 bg-white px-6 py-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">
                            Journal Workspace
                        </p>
                        <h2 class="mt-1 text-2xl font-bold text-slate-800">Administrator</h2>
                    </div>

                    <button
                        class="rounded-md p-2 text-slate-500 hover:bg-slate-100 lg:hidden"
                        @click="sidebarOpen = false"
                        type="button"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

              
            </div>

            <!-- Sidebar Menu -->
            <div class="flex-1 overflow-y-auto px-4 py-6">
                <p class="mb-4 px-3 text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">
                    Journal Navigation
                </p>

                <nav class="space-y-2">
                    <!-- Back to Journals -->
                    <a href="{{ route('admin.journals') }}"
                       class="flex items-center gap-3 rounded-lg px-4 py-3 text-[15px] font-medium text-slate-700 transition hover:bg-slate-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Back to Journals
                    </a>

                    <!-- Dashboard -->
                    @isset($journal)
                        <a href="{{ route('admin.journal.dashboard', $journal->id) }}"
                           class="flex items-center gap-3 rounded-lg px-4 py-3 text-[15px] font-medium transition
                           {{ request()->routeIs('admin.journal.dashboard') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-700 hover:bg-slate-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18v10H3V7zm0 10l4-4m14 4l-4-4"/>
                            </svg>
                            Dashboard
                        </a>
                    @endisset

                    <!-- Journal Setup -->
                    <div class="rounded-xl">
                        <button
                            type="button"
                            @click="openJournalSetup = !openJournalSetup"
                            class="flex w-full items-center justify-between rounded-lg px-4 py-3 text-[15px] font-medium text-slate-700 transition hover:bg-slate-100"
                        >
                            <span class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Journal Setup
                            </span>

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-4 w-4 text-slate-500 transition-transform duration-200"
                                 :class="openJournalSetup ? 'rotate-180' : ''"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div x-show="openJournalSetup" x-cloak class="mt-1 space-y-1 pl-14 pr-3 pb-2">
                            @isset($journal)
                                

                                <a href="{{ route('admin.journal.menus.index', $journal->id) }}"
                                   class="block rounded-md px-3 py-2 text-[15px] text-slate-700 transition hover:bg-slate-100 hover:text-indigo-700">
                                    Manage Menus
                                </a>

                                <a href="{{ route('admin.journal.pages.index', $journal->id) }}"
                                   class="block rounded-md px-3 py-2 text-[15px] text-slate-700 transition hover:bg-slate-100 hover:text-indigo-700">
                                    Manage Pages
                                </a>

                                <a href="{{ route('admin.journal.indexings.index', $journal->id) }}"
                                   class="block rounded-md px-3 py-2 text-[15px] text-slate-700 transition hover:bg-slate-100 hover:text-indigo-700">
                                    Abstracting & Indexing
                                </a>

                                <a href=""
                                   class="block rounded-md px-3 py-2 text-[15px] text-slate-700 transition hover:bg-slate-100 hover:text-indigo-700">
                                    Editorial Board
                                </a>
                            @endisset
                        </div>
                    </div>

                    <!-- Submitted Papers -->
                    @isset($journal)
                        <a href="{{ route('journal.submissions.index', $journal->id) }}"
                           class="flex items-center justify-between rounded-lg px-4 py-3 text-[15px] font-medium text-slate-700 transition hover:bg-slate-100">
                            <span class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M7 4h7l5 5v11a1 1 0 01-1 1H7a1 1 0 01-1-1V5a1 1 0 011-1z"/>
                                </svg>
                                Submitted Papers
                            </span>
                        </a>
                    @endisset

                    <!-- Article Publication -->
                    @isset($journal)
                        <a href=""
                           class="flex items-center justify-between rounded-lg px-4 py-3 text-[15px] font-medium text-slate-700 transition hover:bg-slate-100">
                            <span class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M7 4h7l5 5v11a1 1 0 01-1 1H7a1 1 0 01-1-1V5a1 1 0 011-1z"/>
                                </svg>
                                Article Publication
                            </span>
                        </a>
                    @endisset

                    <!-- Issue & Volume -->
                    <div class="rounded-xl">
                        <button
                            type="button"
                            @click="openIssueVolume = !openIssueVolume"
                            class="flex w-full items-center justify-between rounded-lg px-4 py-3 text-[15px] font-medium text-slate-700 transition hover:bg-slate-100"
                        >
                            <span class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M7 4h7l5 5v11a1 1 0 01-1 1H7a1 1 0 01-1-1V5a1 1 0 011-1z"/>
                                </svg>
                                Issue & Volume
                            </span>

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-4 w-4 text-slate-500 transition-transform duration-200"
                                 :class="openIssueVolume ? 'rotate-180' : ''"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div x-show="openIssueVolume" x-cloak class="mt-1 pl-14 pr-3 pb-2 space-y-1">
                            @isset($journal)
                                <a href=""
                                   class="block rounded-md px-3 py-2 text-[15px] text-slate-700 transition hover:bg-slate-100 hover:text-indigo-700">
                                    Manage Issues
                                </a>
                                <a href=""
                                   class="block rounded-md px-3 py-2 text-[15px] text-slate-700 transition hover:bg-slate-100 hover:text-indigo-700">
                                    Manage Volumes
                                </a>
                            @endisset
                        </div>
                    </div>

                    <!-- Extra Settings -->
                    <div class="rounded-xl">
                        <button
                            type="button"
                            @click="openExtraSettings = !openExtraSettings"
                            class="flex w-full items-center justify-between rounded-lg px-4 py-3 text-[15px] font-medium text-slate-700 transition hover:bg-slate-100"
                        >
                            <span class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z"/>
                                </svg>
                                Extra Settings
                            </span>

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-4 w-4 text-slate-500 transition-transform duration-200"
                                 :class="openExtraSettings ? 'rotate-180' : ''"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div x-show="openExtraSettings" x-cloak class="mt-1 pl-14 pr-3 pb-2 space-y-1">
                            @isset($journal)
                                <a href=""
                                   class="block rounded-md px-3 py-2 text-[15px] text-slate-700 transition hover:bg-slate-100 hover:text-indigo-700">
                                    Company Logos
                                </a>

                                <a href=""
                                   class="block rounded-md px-3 py-2 text-[15px] text-slate-700 transition hover:bg-slate-100 hover:text-indigo-700">
                                    Contact Settings
                                </a>

                                <a href=""
                                   class="block rounded-md px-3 py-2 text-[15px] text-slate-700 transition hover:bg-slate-100 hover:text-indigo-700">
                                    SEO Settings
                                </a>

                                <a href=""
                                   class="block rounded-md px-3 py-2 text-[15px] text-slate-700 transition hover:bg-slate-100 hover:text-indigo-700">
                                    Journal Appearance
                                </a>
                            @endisset
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Sidebar Footer -->
            <div class="border-t border-slate-200 bg-white p-4">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button
                        type="submit"
                        class="flex w-full items-center justify-center gap-2 rounded-lg bg-red-50 px-4 py-3 text-sm font-medium text-red-600 transition hover:bg-red-100"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V6m-7 14h8a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Wrapper -->
        <div class="lg:pl-72">
            <!-- Topbar -->
            <header class="sticky top-0 z-30 border-b border-slate-200 bg-white">
                <div class="flex h-20 items-center justify-between px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center gap-4">
                        <button
                            class="rounded-md p-2 text-slate-600 hover:bg-slate-100 lg:hidden"
                            @click="sidebarOpen = true"
                            type="button"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>

                        <div>
                            <h1 class="text-xl font-bold text-slate-800 sm:text-2xl">
                                @isset($journal)
                                    {{ $journal->title }}
                                @else
                                    Journal Workspace
                                @endisset
                            </h1>
                            <p class="text-sm text-slate-500">@yield('page_title', 'Journal Dashboard')</p>
                        </div>
                    </div>

                    <!-- Profile -->
                    <div class="relative">
                        <button
                            @click="profileOpen = !profileOpen"
                            class="flex items-center gap-3 rounded-lg bg-white px-3 py-2 transition hover:bg-slate-50"
                            type="button"
                        >
                            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-100 text-sm font-bold text-blue-700">
                                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                            </div>

                            <div class="hidden text-left sm:block">
                                <p class="text-sm font-semibold text-slate-800">{{ auth()->user()->name ?? 'Administrator' }}</p>
                                <p class="text-xs text-slate-500">Administrator</p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-500" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div
                            x-show="profileOpen"
                            x-cloak
                            @click.outside="profileOpen = false"
                            class="absolute right-0 mt-2 w-56 overflow-hidden rounded-lg border border-slate-200 bg-white shadow-lg"
                        >
                            <div class="border-b border-slate-100 px-4 py-3">
                                <p class="text-sm font-semibold text-slate-800">{{ auth()->user()->name ?? 'Administrator' }}</p>
                                <p class="text-xs text-slate-500">{{ auth()->user()->email ?? 'admin@example.com' }}</p>
                            </div>

                            <a href="#" class="block px-4 py-3 text-sm text-slate-700 hover:bg-slate-50">
                                Profile Settings
                            </a>

                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <button type="submit" class="block w-full px-4 py-3 text-left text-sm text-red-600 hover:bg-red-50">
                                    Sign Out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="px-4 py-8 sm:px-6 lg:px-8">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>