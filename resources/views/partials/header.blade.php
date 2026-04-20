<header x-data="{ mobileMenu: false }" class="w-full shadow-sm">
    <div class="bg-[#f3f3f3]">
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
            
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex shrink-0 items-center">
                <div>
                    <h1 class="text-3xl font-extrabold leading-none tracking-tight text-sky-600 sm:text-4xl">
                        nexora
                    </h1>
                    <p class="-mt-1 text-right text-sm font-medium text-slate-500 sm:text-base">
                        Journals
                    </p>
                </div>
            </a>

            <!-- Desktop Search -->
            <div class="hidden w-full max-w-xl lg:block">
                <form action="#" method="GET" class="flex overflow-hidden rounded-md border border-slate-300 bg-white">
                    <input
                        type="text"
                        name="search"
                        placeholder="Type your keyword..."
                        class="w-full border-0 px-4 py-3 text-sm text-slate-700 placeholder:text-slate-400 focus:outline-none"
                    >
                    <button
                        type="submit"
                        class="bg-sky-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-sky-600"
                    >
                        Search
                    </button>
                </form>
            </div>

            <!-- Mobile Toggle -->
            <button
                type="button"
                @click="mobileMenu = !mobileMenu"
                class="inline-flex items-center justify-center rounded-md border border-slate-300 bg-white p-2 text-slate-700 lg:hidden"
                aria-label="Toggle navigation"
                :aria-expanded="mobileMenu.toString()"
            >
                <svg x-show="!mobileMenu" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg x-show="mobileMenu" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Search -->
        <div class="px-4 pb-4 lg:hidden">
            <form action="#" method="GET" class="flex overflow-hidden rounded-md border border-slate-300 bg-white">
                <input
                    type="text"
                    name="search"
                    placeholder="Type your keyword..."
                    class="w-full border-0 px-4 py-3 text-sm text-slate-700 placeholder:text-slate-400 focus:outline-none"
                >
                <button
                    type="submit"
                    class="bg-sky-500 px-5 py-3 text-sm font-semibold text-white transition hover:bg-sky-600"
                >
                    Search
                </button>
            </form>
        </div>
    </div>

    <!-- Desktop Nav -->
    <div class="hidden bg-[#1f4f9d] lg:block">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <nav class="flex flex-wrap items-center justify-center gap-x-8 gap-y-3 py-4">
                <a href="{{ route('home') }}" class="text-[15px] font-medium text-white transition hover:text-sky-200 {{ request()->routeIs('home') ? 'underline underline-offset-8' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="text-[15px] font-medium text-white transition hover:text-sky-200 {{ request()->routeIs('about') ? 'underline underline-offset-8' : '' }}">About Us</a>
                <a href="{{ route('journals') }}" class="text-[15px] font-medium text-white transition hover:text-sky-200 {{ request()->routeIs('journals') || request()->routeIs('journal.details') ? 'underline underline-offset-8' : '' }}">Journals</a>
                <a href="{{ route('apc') }}" class="text-[15px] font-medium text-white transition hover:text-sky-200 {{ request()->routeIs('apc') ? 'underline underline-offset-8' : '' }}">Articles Processing Charges</a>
                <a href="{{ route('editorial') }}" class="text-[15px] font-medium text-white transition hover:text-sky-200 {{ request()->routeIs('editorial') ? 'underline underline-offset-8' : '' }}">Editorial Process</a>
                <a href="{{ route('membership') }}" class="text-[15px] font-medium text-white transition hover:text-sky-200 {{ request()->routeIs('membership') ? 'underline underline-offset-8' : '' }}">Membership</a>
                <a href="{{ route('guidelines') }}" class="text-[15px] font-medium text-white transition hover:text-sky-200 {{ request()->routeIs('guidelines') ? 'underline underline-offset-8' : '' }}">Guidelines</a>
                <a href="{{ route('contact') }}" class="text-[15px] font-medium text-white transition hover:text-sky-200 {{ request()->routeIs('contact') ? 'underline underline-offset-8' : '' }}">Contact Us</a>
            </nav>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div
        x-show="mobileMenu"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="bg-[#1f4f9d] lg:hidden"
    >
        <nav class="space-y-1 px-4 py-4">
            <a href="{{ route('home') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/10">Home</a>
            <a href="{{ route('about') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/10">About Us</a>
            <a href="{{ route('journals') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/10">Journals</a>
            <a href="{{ route('submit') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/10">Submit Manuscript</a>
            <a href="{{ route('apc') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/10">Articles Processing Charges</a>
            <a href="{{ route('editorial') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/10">Editorial Process</a>
            <a href="{{ route('membership') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/10">Membership</a>
            <a href="{{ route('guidelines') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/10">Guidelines</a>
            <a href="{{ route('contact') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/10">Contact Us</a>
        </nav>
    </div>
</header>