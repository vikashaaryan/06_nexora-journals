@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
<section class="bg-[#f4f6f8] py-14">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="bg-[#1f4f9d] px-6 py-4 text-center">
                <h1 class="text-3xl font-bold text-white">Search Results</h1>
            </div>

            <div class="border-b border-slate-200 bg-slate-50 px-6 py-4">
                <p class="text-lg text-slate-700">
                    Searching for: <span class="font-bold text-slate-900">{{ $query ?: '—' }}</span>
                </p>
            </div>

            <div class="p-6">
                @if(!$query)
                    <div class="py-12 text-center">
                        <h2 class="text-3xl font-bold text-slate-700">Enter a keyword to search</h2>
                        <p class="mt-3 text-slate-500">Search by article title, author, DOI, journal, or subject.</p>
                    </div>
                @elseif($articles->isEmpty() && $journals->isEmpty() && $subjects->isEmpty())
                    <div class="py-12 text-center">
                        <h2 class="text-4xl font-bold text-slate-700">No results found</h2>
                        <p class="mt-3 text-lg text-slate-500">
                            Try different search terms or
                            <a href="{{ route('journals') }}" class="font-semibold text-blue-700 hover:underline">browse our journals</a>.
                        </p>
                    </div>
                @else
                    <div class="space-y-10">

                        {{-- Subjects --}}
                        @if($subjects->count())
                            <div>
                                <h2 class="mb-5 text-2xl font-bold text-slate-800">Subjects</h2>
                                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                                    @foreach($subjects as $subject)
                                        <a href="{{ route('subject.journals', $subject->id) }}"
                                           class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                                            <div class="flex items-center gap-4">
                                                <img src="{{ $subject->image ? asset($subject->image) : 'https://via.placeholder.com/80x80?text=Subject' }}"
                                                     alt="{{ $subject->title }}"
                                                     class="h-20 w-20 rounded-xl object-cover">
                                                <div>
                                                    <h3 class="text-xl font-semibold text-blue-700">{{ $subject->title }}</h3>
                                                    <p class="mt-1 text-sm text-slate-600">
                                                        {{ \Illuminate\Support\Str::limit($subject->short_description, 90) }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Journals --}}
                        @if($journals->count())
                            <div>
                                <h2 class="mb-5 text-2xl font-bold text-slate-800">Journals</h2>
                                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                                    @foreach($journals as $journal)
                                        <a href="{{ route('journal.details', $journal->id) }}"
                                           class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                                            <div class="flex items-center gap-4">
                                                <img src="{{ $journal->image ? asset($journal->image) : 'https://via.placeholder.com/80x80?text=Journal' }}"
                                                     alt="{{ $journal->title }}"
                                                     class="h-20 w-20 rounded-xl object-cover">
                                                <div>
                                                    <h3 class="text-lg font-semibold text-blue-700">{{ $journal->title }}</h3>
                                                    <p class="text-sm text-slate-600">ISSN: {{ $journal->issn }}</p>
                                                    <p class="text-sm text-slate-600">IF: {{ $journal->impact_factor }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Articles --}}
                        @if($articles->count())
                            <div>
                                <h2 class="mb-5 text-2xl font-bold text-slate-800">Articles</h2>
                                <div class="space-y-5">
                                    @foreach($articles as $article)
                                        @php
                                            $googleScholarUrl = 'https://scholar.google.com/scholar?q=' . urlencode($article->paper_title);
                                            $googleSearchUrl = 'https://www.google.com/search?q=' . urlencode($article->paper_title . ' ' . $article->author_name);
                                            $doiUrl = $article->doi ? 'https://doi.org/' . ltrim($article->doi, '/') : null;
                                        @endphp

                                        <div class="rounded-2xl border border-cyan-300 bg-white shadow-sm">
                                            <div class="flex flex-col justify-between gap-2 bg-gradient-to-r from-cyan-600 to-teal-500 px-4 py-3 text-white sm:flex-row sm:items-center">
                                                <span class="text-lg font-bold">{{ $article->article_type ?: 'Research Article' }}</span>
                                                <span class="text-sm font-bold">{{ $article->journal->title ?? 'Journal Article' }}</span>
                                            </div>

                                            <div class="p-5">
                                                @if($article->doi)
                                                    <div class="mb-3 text-base font-semibold text-amber-600">
                                                        DOI {{ $article->doi }}
                                                    </div>
                                                @endif

                                                <h3 class="text-2xl font-semibold leading-9 text-blue-700">
                                                    {{ $article->paper_title }}
                                                </h3>

                                                <p class="mt-3 text-lg italic text-slate-700">
                                                    <span class="font-bold not-italic">Authors:</span> {{ $article->author_name }}
                                                </p>

                                                @if($article->abstract)
                                                    <p class="mt-3 leading-8 text-slate-600">
                                                        {{ \Illuminate\Support\Str::limit($article->abstract, 220) }}
                                                    </p>
                                                @endif

                                                <div class="mt-5 flex flex-wrap gap-3">
                                                    @if($article->upload_doc)
                                                        <a href="{{ asset('storage/' . $article->upload_doc) }}"
                                                           target="_blank"
                                                           class="rounded-lg bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-red-700">
                                                            PDF
                                                        </a>
                                                    @endif

                                                    @if($article->upload_link)
                                                        <a href="{{ $article->upload_link }}"
                                                           target="_blank"
                                                           class="rounded-lg bg-slate-700 px-4 py-2 text-sm font-medium text-white hover:bg-slate-800">
                                                            Fulltext
                                                        </a>
                                                    @endif

                                                    @if($doiUrl)
                                                        <a href="{{ $doiUrl }}"
                                                           target="_blank"
                                                           class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">
                                                            DOI
                                                        </a>
                                                    @endif

                                                    <a href="{{ $googleScholarUrl }}"
                                                       target="_blank"
                                                       class="rounded-lg bg-emerald-500 px-4 py-2 text-sm font-medium text-white hover:bg-emerald-600">
                                                        Google Scholar
                                                    </a>

                                                    <a href="{{ $googleSearchUrl }}"
                                                       target="_blank"
                                                       class="rounded-lg bg-fuchsia-600 px-4 py-2 text-sm font-medium text-white hover:bg-fuchsia-700">
                                                        Search
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection