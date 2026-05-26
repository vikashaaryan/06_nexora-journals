@extends('layouts.app')

@section('title', $subject->title . ' Journals')

@section('content')
<section class="bg-[#f4f6f8] pb-16">
    {{-- Subject Banner --}}
    <div class="relative overflow-hidden bg-slate-200">
        <div class="absolute inset-0">
            @if($subject->image)
                <img src="{{ asset($subject->image) }}"
                     alt="{{ $subject->title }}"
                     class="h-full w-full object-cover opacity-80">
            @endif
            <div class="absolute inset-0 bg-black/25"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <div class="rounded-2xl bg-[#304e78]/85 px-8 py-4 shadow-lg">
                    <h1 class="text-3xl font-semibold text-white md:text-5xl">
                        {{ $subject->title }}
                    </h1>
                </div>
            </div>
        </div>
    </div>

    {{-- Subject Content --}}
    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        @if($subject->description)
            <div class="mx-auto max-w-6xl text-lg leading-9 text-slate-700">
                {!! nl2br(e($subject->description)) !!}
            </div>
        @elseif($subject->short_description)
            <div class="mx-auto max-w-6xl text-lg leading-9 text-slate-700">
                <p>{{ $subject->short_description }}</p>
            </div>
        @endif

        <div class="mt-12 text-center">
            <h2 class="text-3xl font-bold text-slate-800 md:text-4xl">
                {{ $subject->title }} Journals List
            </h2>
            <div class="mx-auto mt-4 h-1 w-28 rounded-full bg-blue-700"></div>
        </div>

        <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @forelse($journals as $journal)
                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <a href="{{ route('journal.details', $journal->id) }}" class="block">
                        <div class="h-52 overflow-hidden bg-slate-100">
                            <img
                                src="{{ $journal->image ? asset($journal->image) : 'https://via.placeholder.com/500x300?text=Journal+Image' }}"
                                alt="{{ $journal->title }}"
                                class="h-full w-full object-cover"
                            >
                        </div>

                        <div class="p-5 text-center">
                            <h3 class="min-h-[88px] text-xl font-semibold leading-8 text-[#174a9c]">
                                {{ $journal->title }}
                            </h3>

                            <div class="mt-4 flex items-center justify-between gap-2 text-left">
                                <p class="text-sm font-semibold text-black">
                                    ISSN: {{ $journal->issn }}
                                </p>
                                <p class="text-sm font-semibold text-black">
                                    IF: {{ $journal->impact_factor }} *
                                </p>
                            </div>

                            <div class="mt-6 flex flex-col items-center justify-center">
                                <div class="flex items-end text-[#2d6aa9] leading-none">
                                    <span class="text-[16px] font-bold">Pub</span>
                                    <span class="mx-1 text-[32px] font-extrabold">M</span>
                                    <span class="text-[16px] font-bold">ed</span>
                                </div>
                                <p class="mt-1 text-sm text-slate-600">
                                    {{ $journal->nlm_id ?: 'NLM ID' }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full rounded-2xl border border-dashed border-slate-300 bg-white px-6 py-12 text-center">
                    <h3 class="text-2xl font-semibold text-slate-700">No journals found</h3>
                    <p class="mt-2 text-slate-500">
                        No active journals are available under this subject right now.
                    </p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection