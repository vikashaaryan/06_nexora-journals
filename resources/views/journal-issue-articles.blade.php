@extends('layouts.app')

@section('title', $journal->title . ' - ' . $volume->name . ' ' . $issue->name)

@section('content')
<section class="bg-[#f4f6f8] pb-16">
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
                <div class="rounded-2xl bg-[#304e78]/90 px-8 py-4 shadow-lg">
                    <h1 class="text-3xl font-semibold tracking-tight text-white md:text-5xl">
                        {{ $journal->title }}
                    </h1>
                </div>

                <div class="mt-5 rounded-2xl bg-[#304e78]/90 px-8 py-3 shadow-lg">
                    <p class="text-2xl font-medium text-white md:text-4xl">
                        ISSN: {{ $journal->issn }}
                    </p>
                </div>
            </div>

            <div class="mt-8 flex justify-end">
                <a href="{{ route('journal.submit') }}"
                   class="inline-flex items-center rounded-xl bg-gradient-to-r from-fuchsia-700 to-pink-600 px-6 py-3 text-base font-semibold text-white shadow-md transition hover:scale-[1.01]">
                    Submit Manuscript
                </a>
            </div>
        </div>
    </div>

    <div class="mx-auto mt-4 max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-6 lg:grid-cols-12">

            <!-- Left Sidebar -->
            <aside class="space-y-5 lg:col-span-3">
                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <div class="bg-[#8b005e] px-5 py-4 text-center">
                        <h3 class="text-2xl font-semibold text-white">Journal Menu</h3>
                    </div>

                    <div class="space-y-[1px] bg-slate-200">
                        @foreach ($menus as $item)
                            <a href="{{ route('journal.menu.page', [$journal->id, $item->id]) }}"
                               class="block px-5 py-3 text-lg text-white transition hover:bg-[#163d7a] {{ $activeMenu && $activeMenu->id == $item->id ? 'bg-[#163d7a]' : 'bg-[#1f4f9d]' }}">
                                » {{ $item->menu_name }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <div class="bg-[#8b005e] px-5 py-4 text-center">
                        <h3 class="text-2xl font-semibold text-white">Abstracting and Indexing</h3>
                    </div>

                    <div class="space-y-[1px] bg-slate-200">
                        @forelse($indexings as $indexing)
                            <a href="{{ $indexing->link ?: '#' }}" target="_blank"
                               class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white transition hover:bg-[#163d7a]">
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
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="mb-6 text-center">
                        <h2 class="text-4xl font-semibold text-slate-800">
                            Articles in {{ $volume->name }} {{ $issue->name }}
                        </h2>
                        <div class="mx-auto mt-3 h-1 w-28 rounded-full bg-[#1f4f9d]"></div>
                    </div>

                    <div class="space-y-6">
                        @forelse($articles as $article)
                            @php
                                $googleScholarUrl = 'https://scholar.google.com/scholar?q=' . urlencode($article->paper_title);
                                $googleSearchUrl = 'https://www.google.com/search?q=' . urlencode($article->paper_title . ' ' . $article->author_name);
                                $doiUrl = $article->doi ? 'https://doi.org/' . ltrim($article->doi, '/') : null;
                            @endphp

                            <article class="overflow-hidden rounded-2xl border border-cyan-400 bg-white shadow-sm transition hover:shadow-md">
                                <div class="flex items-center justify-between bg-gradient-to-r from-cyan-500 to-cyan-600 px-4 py-3 text-white">
                                    <span class="rounded-full bg-white/15 px-3 py-1 text-lg font-semibold italic tracking-wide">
                                        {{ $article->article_type ?: 'Research Article' }}
                                    </span>
                                    <span class="text-base font-semibold uppercase tracking-wide">Article</span>
                                </div>

                                <div class="p-5">
                                    @if($article->doi)
                                        <div class="mb-4">
                                            <a href="{{ $doiUrl }}" target="_blank"
                                               class="inline-flex items-center gap-2 rounded-full bg-amber-50 px-3 py-1.5 text-sm font-semibold text-amber-700 ring-1 ring-amber-200 hover:bg-amber-100">
                                                <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-amber-500 text-white text-xs font-bold">
                                                    DOI
                                                </span>
                                                <span>{{ $article->doi }}</span>
                                            </a>
                                        </div>
                                    @endif

                                    <h3 class="text-[28px] font-semibold leading-9 text-[#1f4f9d]">
                                        {{ $article->paper_title }}
                                    </h3>

                                    <div class="mt-3 space-y-1 text-[16px] leading-8 text-slate-700">
                                        <p>
                                            <span class="font-semibold text-slate-900">Published On:</span>
                                            {{ $article->created_at->format('Y-m-d') }}
                                        </p>
                                        <p>
                                            <span class="font-semibold text-slate-900">Authors:</span>
                                            {{ $article->author_name }}
                                        </p>
                                        @if($article->page_number)
                                            <p>
                                                <span class="font-semibold text-slate-900">Pages:</span>
                                                {{ $article->page_number }}
                                            </p>
                                        @endif
                                    </div>

                                    @if($article->abstract)
                                        <p class="mt-4 leading-8 text-slate-700">
                                            {{ $article->abstract }}
                                        </p>
                                    @endif

                                    <div class="mt-5 flex flex-wrap items-center gap-2">
                                        @if($article->upload_doc)
                                            <a href="{{ asset('storage/' . $article->upload_doc) }}"
                                               target="_blank"
                                               title="View PDF / Document"
                                               class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-red-200 bg-red-50 text-red-600 shadow-sm transition hover:-translate-y-0.5 hover:bg-red-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M7 2h7l5 5v13a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm7 1.5V8h4.5"/>
                                                    <path d="M8 13h2.2a1.8 1.8 0 0 1 0 3.6H9.2V19H8v-6zm1.2 1.1v1.4h.9a.7.7 0 1 0 0-1.4h-.9zM13 13h1.9c1.4 0 2.4 1 2.4 2.8S16.3 19 14.9 19H13v-6zm1.2 1.1v3.8h.6c.8 0 1.3-.6 1.3-1.9s-.5-1.9-1.3-1.9h-.6z"/>
                                                </svg>
                                            </a>
                                        @endif

                                        @if($article->upload_link)
                                            <a href="{{ $article->upload_link }}"
                                               target="_blank"
                                               title="Open Article Link"
                                               class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-blue-200 bg-blue-50 text-blue-600 shadow-sm transition hover:-translate-y-0.5 hover:bg-blue-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 010 5.656l-3 3a4 4 0 01-5.656-5.656l1.5-1.5M10.172 13.828a4 4 0 010-5.656l3-3a4 4 0 115.656 5.656l-1.5 1.5"/>
                                                </svg>
                                            </a>
                                        @endif

                                        @if($article->doi)
                                            <a href="{{ $doiUrl }}" target="_blank"
                                               title="Open DOI"
                                               class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-amber-200 bg-amber-50 text-amber-600 shadow-sm transition hover:-translate-y-0.5 hover:bg-amber-100">
                                                <span class="text-[11px] font-bold">DOI</span>
                                            </a>
                                        @endif

                                        <a href="{{ $googleScholarUrl }}" target="_blank"
                                           title="Search on Google Scholar"
                                           class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-indigo-200 bg-indigo-50 text-indigo-600 shadow-sm transition hover:-translate-y-0.5 hover:bg-indigo-100">
                                            <span class="text-[11px] font-bold">GS</span>
                                        </a>

                                        <a href="{{ $googleSearchUrl }}" target="_blank"
                                           title="Search on Google"
                                           class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-emerald-200 bg-emerald-50 text-emerald-600 shadow-sm transition hover:-translate-y-0.5 hover:bg-emerald-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M21.35 11.1H12v2.98h5.38c-.23 1.5-1.76 4.4-5.38 4.4-3.24 0-5.88-2.68-5.88-5.98s2.64-5.98 5.88-5.98c1.84 0 3.07.79 3.77 1.46l2.58-2.5C16.7 3.96 14.6 3 12 3 6.98 3 3 7.03 3 12s3.98 9 9 9c5.2 0 8.65-3.65 8.65-8.8 0-.6-.06-.86-.15-1.1z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @empty
                            <div class="rounded-2xl border border-slate-200 bg-slate-50 px-6 py-10 text-center text-slate-500">
                                No articles found for {{ $volume->name }} {{ $issue->name }}.
                            </div>
                        @endforelse
                    </div>
                </div>
            </main>

            <!-- Right Sidebar -->
            <aside class="space-y-5 lg:col-span-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-[#2d6aa9]">
                            Pub<span class="text-[60px] font-extrabold">M</span>ed
                        </div>
                        <p class="mt-3 text-3xl text-slate-700">
                            {{ $journal->nlm_id ?: 'NLM ID' }}
                        </p>
                    </div>
                </div>

                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <div class="bg-[#8b005e] px-5 py-4 text-center">
                        <h3 class="text-2xl font-semibold text-white">Journal Statistics</h3>
                    </div>

                    <div class="bg-teal-700 px-6 py-6 text-white">
                        <div class="space-y-5 text-[17px] leading-8">
                            <p>☼ Impact Factor: <strong>{{ $journal->impact_factor }}</strong></p>
                            <p>📄 Acceptance Rate: <strong>74.36%</strong></p>
                            <p>🕒 Time to first decision: <strong>10.4 days</strong></p>
                            <p>📬 Time from article received to acceptance: <strong>2-3 weeks</strong></p>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <div class="bg-[#8b005e] px-5 py-4 text-center">
                        <h3 class="text-2xl font-semibold text-white">Discover More</h3>
                    </div>

                    <div class="p-5">
                        <div class="space-y-3 text-sm leading-7 text-slate-700">
                            @foreach($articles->take(8) as $moreArticle)
                                <a href="{{ $googleSearchUrl = 'https://www.google.com/search?q=' . urlencode($moreArticle->paper_title) }}"
                                   target="_blank"
                                   class="block border-b border-slate-100 pb-3 text-[16px] text-slate-700 hover:text-[#1f4f9d] hover:underline">
                                    » {{ $moreArticle->paper_title }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <h3 class="text-xl font-semibold text-slate-800">About This Issue</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        This section contains curated articles from <strong>{{ $volume->name }} {{ $issue->name }}</strong>.
                        Readers can browse article files, external links, DOI pages, and quick academic search options.
                    </p>
                </div>
            </aside>

        </div>
    </div>
</section>
@endsection