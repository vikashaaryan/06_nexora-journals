@extends('layouts.app')

@section('title', $page?->meta_title ?: $journal->title)

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
                    <div class="text-center">
                        <h2 class="text-4xl font-semibold text-slate-800">
                            {{ $page->title ?? 'About Journal' }}
                        </h2>
                        <div class="mx-auto mt-4 h-1 w-32 rounded-full bg-[#1f4f9d]"></div>
                    </div>

                    <div class="mt-6 space-y-6 text-[17px] leading-9 text-slate-800">
                        @if ($page && $page->short_description)
                            <p>{{ $page->short_description }}</p>
                        @endif

                        @if ($page && $page->long_description)
                            <div class="prose max-w-none prose-headings:text-slate-800 prose-p:text-slate-700 prose-li:text-slate-700">
                                {!! $page->long_description !!}
                            </div>
                        @endif

                        {{-- EBOARD SECTION --}}
                        @if ($page && $page->show_eboard_list && isset($eboards) && $eboards->count())
                            <div class="space-y-6">
                                @foreach ($eboards as $member)
                                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition hover:shadow-md">
                                        <div class="flex flex-col gap-5 md:flex-row md:items-start md:justify-between">
                                            <div class="flex-1">
                                                <h3 class="text-2xl font-semibold text-[#2c6cb0]">
                                                    {{ $member->name }}
                                                </h3>

                                                @if ($member->designation)
                                                    <p class="mt-1 text-slate-800">{{ $member->designation }}</p>
                                                @endif

                                                @if ($member->institution)
                                                    <p class="text-slate-800">{{ $member->institution }}</p>
                                                @endif

                                                @if ($member->address)
                                                    <p class="whitespace-pre-line text-slate-800">{{ $member->address }}</p>
                                                @endif

                                                <button
                                                    type="button"
                                                    class="mt-4 inline-flex items-center rounded-lg text-[#2c6cb0] transition hover:text-[#163d7a] hover:underline"
                                                    onclick="openProfileModal(
                                                        @js($member->name),
                                                        @js($member->designation),
                                                        @js($member->institution),
                                                        @js($member->address),
                                                        @js($member->full_profile),
                                                        @js($member->image ? asset($member->image) : '')
                                                    )"
                                                >
                                                    » View Profile
                                                </button>
                                            </div>

                                            <div class="shrink-0">
                                                <img
                                                    src="{{ $member->image ? asset($member->image) : 'https://via.placeholder.com/130x130?text=Profile' }}"
                                                    alt="{{ $member->name }}"
                                                    class="h-[130px] w-[130px] rounded-lg border border-slate-200 object-cover"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        {{-- ARCHIVE --}}
                        @if ($page && $page->show_issue_volume && Str::contains($pageKey, 'archive'))
                            <div class="space-y-6">
                                @forelse($archiveGroups as $group)
                                    <div class="overflow-hidden rounded-2xl border border-cyan-300 bg-white shadow-sm">
                                        <div class="bg-gradient-to-r from-cyan-500 to-cyan-600 px-4 py-3 text-2xl font-semibold italic text-white">
                                            Year: {{ $group['year'] }}
                                        </div>

                                        <div class="space-y-3 px-6 py-5 text-xl">
                                            @forelse($group['items'] as $item)
                                                @if ($item->volume && $item->issue)
                                                    <div>
                                                        <a href="{{ route('journal.issue.articles', [$journal->id, $item->volume->id, $item->issue->id]) }}"
                                                           class="font-medium text-[#2c6cb0] transition hover:text-[#163d7a] hover:underline">
                                                            » {{ $item->volume->name }} {{ $item->issue->name }}
                                                        </a>
                                                    </div>
                                                @endif
                                            @empty
                                                <div class="text-slate-500">No archive records found.</div>
                                            @endforelse
                                        </div>
                                    </div>
                                @empty
                                    <p>No archive data available.</p>
                                @endforelse
                            </div>
                        @endif

                        {{-- EARLY VIEW / INPRESS --}}
                        @if ($page && $page->show_issue_volume && (Str::contains($pageKey, 'early-view') || Str::contains($pageKey, 'inpress')))
                            <div class="space-y-6">
                                @forelse($earlyViewArticles as $article)
                                    @php
                                        $googleScholarUrl = 'https://scholar.google.com/scholar?q=' . urlencode($article->paper_title);
                                        $googleSearchUrl = 'https://www.google.com/search?q=' . urlencode($article->paper_title . ' ' . $article->author_name);
                                        $doiUrl = $article->doi ? 'https://doi.org/' . ltrim($article->doi, '/') : null;
                                    @endphp

                                    <div class="overflow-hidden rounded-2xl border border-cyan-400 bg-white shadow-sm transition hover:shadow-md">
                                        <div class="flex items-center justify-between bg-gradient-to-r from-cyan-500 to-cyan-600 px-4 py-3 text-white">
                                            <span class="rounded-full bg-white/15 px-3 py-1 text-lg font-semibold italic">
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
                                    </div>
                                @empty
                                    <p>No early view articles found.</p>
                                @endforelse
                            </div>
                        @endif

                        {{-- CURRENT ISSUE --}}
                        @if ($page && $page->show_issue_volume && Str::contains($pageKey, 'current-issue'))
                            @if ($latestCurrentIssue)
                                <div class="mb-4 rounded-xl bg-slate-100 px-4 py-3 text-lg font-semibold text-slate-700">
                                    Showing latest issue: {{ $latestCurrentIssue->name }}
                                </div>
                            @endif

                            <div class="space-y-6">
                                @forelse($currentIssueArticles as $article)
                                    @php
                                        $googleScholarUrl = 'https://scholar.google.com/scholar?q=' . urlencode($article->paper_title);
                                        $googleSearchUrl = 'https://www.google.com/search?q=' . urlencode($article->paper_title . ' ' . $article->author_name);
                                        $doiUrl = $article->doi ? 'https://doi.org/' . ltrim($article->doi, '/') : null;
                                    @endphp

                                    <div class="overflow-hidden rounded-2xl border border-cyan-400 bg-white shadow-sm transition hover:shadow-md">
                                        <div class="flex items-center justify-between bg-gradient-to-r from-cyan-500 to-cyan-600 px-4 py-3 text-white">
                                            <span class="rounded-full bg-white/15 px-3 py-1 text-lg font-semibold italic">
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
                                    </div>
                                @empty
                                    <p>No current issue articles found.</p>
                                @endforelse
                            </div>
                        @endif

                        @if (!$page || (!$page->long_description && !$page->show_eboard_list && !$page->show_issue_volume))
                            <p>No page content available.</p>
                        @endif
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
                            @if(isset($earlyViewArticles) && $earlyViewArticles->count())
                                @foreach($earlyViewArticles->take(6) as $moreArticle)
                                    <a href="https://www.google.com/search?q={{ urlencode($moreArticle->paper_title) }}"
                                       target="_blank"
                                       class="block border-b border-slate-100 pb-3 text-[16px] text-slate-700 hover:text-[#1f4f9d] hover:underline">
                                        » {{ $moreArticle->paper_title }}
                                    </a>
                                @endforeach
                            @elseif(isset($currentIssueArticles) && $currentIssueArticles->count())
                                @foreach($currentIssueArticles->take(6) as $moreArticle)
                                    <a href="https://www.google.com/search?q={{ urlencode($moreArticle->paper_title) }}"
                                       target="_blank"
                                       class="block border-b border-slate-100 pb-3 text-[16px] text-slate-700 hover:text-[#1f4f9d] hover:underline">
                                        » {{ $moreArticle->paper_title }}
                                    </a>
                                @endforeach
                            @else
                                <p class="text-[16px] leading-7 text-slate-600">
                                    Explore recent papers, article updates, and related research topics through quick search links.
                                </p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <h3 class="text-xl font-semibold text-slate-800">About This Section</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Browse published articles, search research records, open document files, and access quick academic search options
                        for a smoother reading experience.
                    </p>
                </div>
            </aside>
        </div>
    </div>
</section>

<div id="profileModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 p-4">
    <div class="relative max-h-[90vh] w-full max-w-5xl overflow-y-auto rounded-2xl bg-white shadow-2xl">
        <button type="button" onclick="closeProfileModal()"
            class="absolute right-4 top-4 text-3xl text-slate-400 hover:text-slate-700">
            &times;
        </button>

        <div class="border-b border-slate-200 px-6 py-5">
            <h2 id="modalName" class="text-3xl font-semibold text-slate-800"></h2>
        </div>

        <div class="grid gap-6 p-6 md:grid-cols-[1fr_180px]">
            <div>
                <p id="modalDesignation" class="font-semibold text-slate-700"></p>
                <p id="modalInstitution" class="mt-2 text-slate-700"></p>
                <p id="modalAddress" class="mt-2 whitespace-pre-line text-slate-700"></p>

                <div id="modalProfile" class="mt-5 prose max-w-none text-slate-700"></div>
            </div>

            <div>
                <img id="modalImage" src="" alt=""
                    class="w-full rounded-lg border border-slate-200 object-cover">
            </div>
        </div>
    </div>
</div>

<script>
    function openProfileModal(name, designation, institution, address, profile, image) {
        document.getElementById('modalName').innerText = name || '';
        document.getElementById('modalDesignation').innerText = designation || '';
        document.getElementById('modalInstitution').innerText = institution || '';
        document.getElementById('modalAddress').innerText = address || '';
        document.getElementById('modalProfile').innerHTML = profile ? profile.replace(/\n/g, '<br>') : 'No profile available.';
        document.getElementById('modalImage').src = image || 'https://via.placeholder.com/180x180?text=Profile';

        const modal = document.getElementById('profileModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');
    }

    function closeProfileModal() {
        const modal = document.getElementById('profileModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
    }

    document.addEventListener('click', function(e) {
        const modal = document.getElementById('profileModal');
        if (e.target === modal) {
            closeProfileModal();
        }
    });
</script>
@endsection