@extends('layouts.app')

@section('title', 'Home - Nexora Journals')

@section('content')
    @include('partials.hero')

    {{-- Indexed & Recognised By --}}
    <section class="bg-white py-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-sm font-bold uppercase tracking-[0.25em] text-slate-500">Indexed & Recognised By</p>
            </div>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                @foreach($indexingBodies as $item)
                    <span class="rounded-xl border border-slate-200 bg-slate-50 px-5 py-3 text-sm font-semibold text-blue-700 shadow-sm">
                        {{ $item }}
                    </span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section class="bg-slate-50 py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-3xl font-bold text-blue-800 sm:text-4xl">About Nexora Journals</h2>
                <div class="mx-auto mt-4 h-1 w-28 rounded-full bg-blue-700"></div>
            </div>

            <div class="mx-auto mt-10 max-w-6xl space-y-6 text-lg leading-8 text-slate-700">
                <p>
                    Nexora Journals is an international, peer-reviewed open access publisher founded in 2016, dedicated to the rapid and unrestricted dissemination of high-quality scientific research. We publish across a broad range of disciplines including medicine, clinical science, life sciences, pharmacy, and public health — serving researchers, clinicians, and academics worldwide.
                </p>
                <p>
                    All articles published with Nexora Journals undergo rigorous double-blind peer review, are screened for plagiarism, and are permanently archived under the Creative Commons Attribution License (CC BY 4.0). Our growing portfolio includes multiple journals indexed in PubMed and PubMed Central, ensuring your work reaches the widest possible audience.
                </p>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                @foreach($features as $feature)
                    <div class="rounded-2xl border-l-4 border-blue-700 bg-white p-6 shadow-sm">
                        <h3 class="flex items-center gap-2 text-lg font-bold text-blue-800">
                            <span>{{ $feature['icon'] }}</span>
                            {{ $feature['title'] }}
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">
                            {{ $feature['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="bg-gradient-to-r from-blue-900 via-blue-700 to-cyan-500 py-14 text-white">
        <div class="mx-auto grid max-w-7xl grid-cols-2 gap-6 px-4 text-center sm:px-6 md:grid-cols-4 lg:px-8">
            @foreach($stats as $stat)
                <div class="rounded-2xl border border-white/15 bg-white/10 p-6 backdrop-blur">
                    <p class="text-3xl font-extrabold sm:text-4xl">{{ $stat['count'] }}</p>
                    <p class="mt-2 text-sm font-medium uppercase tracking-wide text-sky-100">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Browse by Subject --}}
    <section class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-blue-800 sm:text-4xl">Browse by Subject</h2>
                <div class="mx-auto mt-4 h-1 w-28 rounded-full bg-blue-700"></div>
            </div>

            <div class="mt-14 grid gap-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach($subjects as $subject)
                    <div class="group text-center">
                        <div class="mx-auto h-52 w-52 overflow-hidden rounded-full shadow-lg ring-4 ring-blue-50">
                            <img src="{{ $subject['image'] }}"
                                 alt="{{ $subject['title'] }}"
                                 class="h-full w-full object-cover transition duration-500 group-hover:scale-110">
                        </div>

                        <h3 class="mt-6 text-2xl font-bold text-slate-800">
                            {{ $subject['title'] }}
                        </h3>

                        <p class="mt-4 line-clamp-4 text-base leading-8 text-slate-600">
                            {{ $subject['description'] }}
                        </p>

                        <div class="mt-6">
                            <a href="{{ route('journals') }}"
                               class="inline-flex items-center rounded-full bg-blue-700 px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-800">
                                Read More
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Latest Articles --}}
    <section class="bg-slate-50 py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-2xl border border-cyan-200 bg-white shadow-sm">
                <div class="bg-blue-800 px-6 py-4 text-center">
                    <h2 class="text-2xl font-bold text-white">Latest PubMed Indexed Articles</h2>
                </div>

                <div class="space-y-6 p-6">
                    @foreach($articles as $article)
                        <div class="overflow-hidden rounded-2xl border border-cyan-300">
                            <div class="flex flex-col justify-between gap-3 bg-gradient-to-r from-cyan-600 to-teal-500 px-4 py-3 text-white sm:flex-row sm:items-center">
                                <span class="text-lg font-bold">{{ $article['type'] }}</span>
                                <span class="text-sm font-bold">{{ $article['country'] }}</span>
                            </div>

                            <div class="p-5">
                                <div class="text-lg font-semibold text-amber-600">
                                    DOI {{ $article['doi'] }}
                                </div>

                                <h3 class="mt-4 text-2xl font-semibold leading-9 text-blue-700">
                                    {{ $article['title'] }}
                                </h3>

                                <p class="mt-4 text-lg italic text-slate-700">
                                    <span class="font-bold not-italic">Authors:</span> {{ $article['authors'] }}
                                </p>

                                <div class="mt-6 flex flex-wrap gap-3">
                                    <a href="#" class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">Abstract</a>
                                    <a href="#" class="rounded-lg bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-red-700">PDF</a>
                                    <a href="#" class="rounded-lg bg-slate-700 px-4 py-2 text-sm font-medium text-white hover:bg-slate-800">Fulltext</a>
                                    <a href="#" class="rounded-lg bg-emerald-500 px-4 py-2 text-sm font-medium text-white hover:bg-emerald-600">PubMed</a>
                                    <a href="#" class="rounded-lg bg-fuchsia-600 px-4 py-2 text-sm font-medium text-white hover:bg-fuchsia-700">PMC</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="pt-4 text-center">
                        <a href="{{ route('journals') }}" class="inline-flex items-center text-lg font-semibold text-blue-700 hover:text-blue-800">
                            View All PubMed Articles →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Countrywise + Featured Journals --}}
    <section class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <div class="bg-blue-800 px-5 py-4">
                        <h3 class="text-2xl font-bold text-white">Countrywise Articles</h3>
                    </div>
                    <div class="grid gap-8 p-6 md:grid-cols-2">
                        @foreach($countries as $region => $items)
                            <div>
                                <h4 class="mb-4 text-xl font-bold text-slate-800">{{ $region }}</h4>
                                <ul class="space-y-2">
                                    @foreach($items as $country)
                                        <li>
                                            <a href="#" class="text-blue-600 hover:text-blue-800 hover:underline">› {{ $country }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <div class="bg-blue-800 px-5 py-4">
                        <h3 class="text-2xl font-bold text-white">Featured Journals</h3>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3">
                            @foreach($featuredJournals as $journal)
                                <li>
                                    <a href="{{ route('journals') }}" class="text-lg text-blue-600 transition hover:text-blue-800 hover:underline">
                                        » {{ $journal }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-gradient-to-r from-blue-800 to-cyan-600 py-16 text-white">
        <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold sm:text-4xl">Ready to Publish Your Research?</h2>
            <p class="mt-4 text-lg leading-8 text-blue-50">
                Join our global community of researchers and make your work freely accessible worldwide.
            </p>
            <div class="mt-8">
                <a href="{{ route('submit') }}"
                   class="inline-flex items-center rounded-full bg-white px-8 py-3.5 text-sm font-bold text-blue-800 transition hover:bg-slate-100">
                    Submit Your Manuscript →
                </a>
            </div>
        </div>
    </section>
@endsection