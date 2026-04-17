<section class="relative overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img 
            src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1920&q=80" 
            alt="Scientific Publishing Banner"
            class="h-full w-full object-cover"
        >
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-fuchsia-700/35 via-blue-600/40 to-cyan-500/35"></div>
    <div class="absolute inset-0 bg-slate-900/20"></div>

    <!-- Content -->
    <div class="relative mx-auto flex min-h-[520px] max-w-7xl items-center justify-center px-4 py-20 text-center sm:px-6 lg:min-h-[650px] lg:px-8">
        <div class="mx-auto max-w-5xl">
            
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 rounded-full border border-white/30 bg-white/10 px-5 py-2 text-xs font-semibold uppercase tracking-wider text-white backdrop-blur sm:text-sm">
                <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-emerald-500 text-[10px] font-bold text-white">
                    ✓
                </span>
                Open Access Since 2016
            </div>

            <!-- Heading -->
            <h1 class="mt-8 text-4xl font-extrabold leading-tight text-white drop-shadow-[0_3px_10px_rgba(0,0,0,0.45)] sm:text-5xl md:text-6xl lg:text-7xl">
                Breaking Barriers To Scientific Knowledge
            </h1>

            <!-- Description -->
            <p class="mx-auto mt-8 max-w-4xl text-lg leading-9 text-white/95 drop-shadow-[0_2px_8px_rgba(0,0,0,0.35)] sm:text-xl md:text-2xl">
                All Fortune Journals articles are freely available — no subscriptions,
                no paywalls. Indexed in PubMed, PMC, and other leading databases
                for maximum reach.
            </p>

            <!-- Button -->
            <div class="mt-12">
                <a href="{{ route('journals') }}"
                   class="inline-flex items-center gap-3 rounded-full bg-gradient-to-r from-orange-500 to-pink-500 px-8 py-4 text-lg font-bold text-white shadow-[0_12px_30px_rgba(0,0,0,0.25)] transition duration-300 hover:scale-[1.02] hover:shadow-[0_16px_36px_rgba(0,0,0,0.3)]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6M7 4h7l5 5v11a1 1 0 01-1 1H7a1 1 0 01-1-1V5a1 1 0 011-1z" />
                    </svg>
                    Browse All Journals
                </a>
            </div>

           
        </div>
    </div>
</section>