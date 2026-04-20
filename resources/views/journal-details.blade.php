@extends('layouts.app')

@section('title', $page?->meta_title ?: $journal->title)

@section('content')
    <section class="bg-[#f3f3f3] pb-16">
        <!-- Hero Banner -->
        <div class="relative overflow-hidden bg-[#b8d9ea]">
            <div class="absolute inset-0">
                @if ($journal->image)
                    <img src="{{ asset($journal->image) }}" alt="{{ $journal->title }}"
                        class="h-full w-full object-cover opacity-35">
                @endif
            </div>

            <div class="relative mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
                <div class="flex flex-col items-center justify-center text-center">
                    <div class="rounded-xl bg-[#304e78]/90 px-8 py-4 shadow-lg">
                        <h1 class="text-3xl font-semibold text-white md:text-5xl">
                            {{ $journal->title }}
                        </h1>
                    </div>

                    <div class="mt-5 rounded-xl bg-[#304e78]/90 px-8 py-3 shadow-lg">
                        <p class="text-2xl font-medium text-white md:text-4xl">
                            ISSN: {{ $journal->issn }}
                        </p>
                    </div>
                </div>

                <div class="mt-8 flex justify-end">
                    <a href="{{ route('journal.submit', $journal->id) }}"
                        class="inline-block bg-teal-600 px-6 py-3 text-base font-semibold text-white shadow hover:bg-teal-700">
                        Submit Manuscript
                    </a>
                </div>
            </div>
        </div>

        <div class="mx-auto mt-3 max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 lg:grid-cols-12">

                <!-- Left Sidebar -->
                <aside class="lg:col-span-3 space-y-5">
                    <div class="overflow-hidden border border-slate-300 bg-white shadow-sm">
                        <div class="bg-[#8b005e] px-5 py-4 text-center">
                            <h3 class="text-2xl font-semibold text-white">Journal Menu</h3>
                        </div>

                        <div class="space-y-[1px] bg-slate-200">
                            @foreach ($menus as $item)
                                <a href="{{ route('journal.menu.page', [$journal->id, $item->id]) }}"
                                    class="block px-5 py-3 text-lg text-white hover:bg-[#163d7a] {{ $activeMenu && $activeMenu->id == $item->id ? 'bg-[#163d7a]' : 'bg-[#1f4f9d]' }}">
                                    » {{ $item->menu_name }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="overflow-hidden border border-slate-300 bg-white shadow-sm">
                        <div class="bg-[#8b005e] px-5 py-4 text-center">
                            <h3 class="text-2xl font-semibold text-white">Abstracting and Indexing</h3>
                        </div>

                        <div class="space-y-[1px] bg-slate-200">
                            @forelse($indexings as $indexing)
                                <a href="{{ $indexing->link ?: '#' }}" target="_blank"
                                    class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">
                                    » {{ $indexing->title }}
                                </a>
                            @empty
                                <div class="bg-white px-5 py-4 text-slate-500">
                                    No indexing data found.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </aside>

                <!-- Center Content -->
                <main class="lg:col-span-6">
                    <div class="bg-white p-6 shadow-sm">
                        <div class="text-center">
                            <h2 class="text-4xl font-semibold text-slate-800">
                                {{ $page->title ?? 'About Journal' }}
                            </h2>
                            <div class="mx-auto mt-4 h-1 w-32 bg-[#1f4f9d]"></div>
                        </div>

                        <div class="mt-6 space-y-6 text-[17px] leading-9 text-slate-800">
                            @if ($page && $page->short_description)
                                <p>{{ $page->short_description }}</p>
                            @endif

                            @if ($page && $page->long_description)
                                <div class="prose max-w-none">
                                    {!! $page->long_description !!}
                                </div>
                            @else
                                <p>No page content available.</p>
                            @endif
                        </div>
                    </div>
                </main>

                <!-- Right Sidebar -->
                <aside class="lg:col-span-3 space-y-5">
                    <div class="border border-slate-300 bg-white p-6 shadow-sm">
                        <div class="text-center">
                            <div class="text-5xl font-bold text-[#2d6aa9]">
                                Pub<span class="text-[60px] font-extrabold">M</span>ed
                            </div>
                            <p class="mt-3 text-3xl text-slate-700">
                                {{ $journal->nlm_id ?: 'NLM ID' }}
                            </p>
                        </div>
                    </div>

                    <div class="overflow-hidden border border-slate-300 bg-white shadow-sm">
                        <div class="bg-[#8b005e] px-5 py-4 text-center">
                            <h3 class="text-2xl font-semibold text-white">Journal Statistics</h3>
                        </div>

                        <div class="bg-teal-700 px-6 py-6 text-white">
                            <div class="space-y-6 text-[17px] leading-8">
                                <p>☼ Impact Factor: <strong>* {{ $journal->impact_factor }}</strong></p>
                                <p>📄 Journal Status:
                                    <strong>{{ $journal->is_active ? 'Active' : 'Inactive' }}</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
