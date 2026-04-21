<footer class="bg-[#0f172a] text-slate-300">
    <div class="border-b border-white/10">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-5">

                <!-- Brand -->
                <div class="lg:col-span-2">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center bg-[#1f4f9d] text-lg font-bold text-white">
                            N
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-white">Nexora Journals</h2>
                            <p class="text-sm text-slate-400">Advancing Research Without Barriers</p>
                        </div>
                    </a>

                    <p class="mt-5 max-w-md text-sm leading-7 text-slate-400">
                        Nexora Journals is an open access academic publishing platform dedicated to high-quality,
                        peer-reviewed research in medicine, life sciences, public health, and related disciplines.
                    </p>

                    <div class="mt-6 grid grid-cols-2 gap-2 text-xs sm:max-w-sm">
                        <div class="border border-white/10 bg-white/5 px-3 py-2 text-center text-slate-200">PubMed Indexed</div>
                        <div class="border border-white/10 bg-white/5 px-3 py-2 text-center text-slate-200">Open Access</div>
                        <div class="border border-white/10 bg-white/5 px-3 py-2 text-center text-slate-200">CC BY 4.0</div>
                        <div class="border border-white/10 bg-white/5 px-3 py-2 text-center text-slate-200">Peer Reviewed</div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Quick Links</h3>
                    <ul class="mt-5 space-y-3 text-sm">
                        <li><a href="{{ route('home') }}" class="transition hover:text-white">Home</a></li>
                        <li><a href="{{ route('about') }}" class="transition hover:text-white">About Us</a></li>
                        <li><a href="{{ route('journals') }}" class="transition hover:text-white">Journals</a></li>
                        <li><a href="{{ route('membership') }}" class="transition hover:text-white">Membership</a></li>
                        <li><a href="{{ route('contact') }}" class="transition hover:text-white">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Author Resources -->
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Author Resources</h3>
                    <ul class="mt-5 space-y-3 text-sm">
                        <li><a href="{{ route('guidelines') }}" class="transition hover:text-white">Author Guidelines</a></li>
                        <li><a href="{{ route('editorial') }}" class="transition hover:text-white">Editorial Process</a></li>
                        <li><a href="{{ route('apc') }}" class="transition hover:text-white">APC Information</a></li>
                        <li><a href="{{ route('contact') }}" class="transition hover:text-white">Editorial Office</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Contact</h3>
                    <ul class="mt-5 space-y-3 text-sm text-slate-400">
                        <li>Editorial Office</li>
                        <li>
                            <a href="mailto:support@nexorajournals.com" class="transition hover:text-white">
                                support@nexorajournals.com
                            </a>
                        </li>
                        <li>
                            <a href="mailto:submissions@nexorajournals.com" class="transition hover:text-white">
                                submissions@nexorajournals.com
                            </a>
                        </li>
                        <li>
                            <a href="tel:+919876543210" class="transition hover:text-white">
                                +91 98765 43210
                            </a>
                        </li>
                        <li>Mon - Sat, 9:00 AM - 6:00 PM</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-4 border-t border-white/10 pt-6 md:flex-row md:items-center md:justify-between">
            <p class="text-sm text-slate-500">
                © {{ date('Y') }} Nexora Journals. All rights reserved.
            </p>

            <div class="flex flex-wrap items-center gap-4 text-sm text-slate-500">
                <a href="{{ route('guidelines') }}" class="transition hover:text-white">Guidelines</a>
                <a href="{{ route('editorial') }}" class="transition hover:text-white">Editorial Process</a>
                <a href="{{ route('apc') }}" class="transition hover:text-white">APC</a>
                <a href="{{ route('contact') }}" class="transition hover:text-white">Contact</a>
            </div>
        </div>
    </div>
</footer>