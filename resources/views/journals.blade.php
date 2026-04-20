@extends('layouts.app')

@section('title', 'Journals List')

@section('content')
<section class="bg-[#f5f5f5] py-14 md:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="mb-14 text-center">
            <h1 class="text-3xl font-semibold text-slate-800 md:text-5xl">Journals List</h1>
            <div class="mx-auto mt-5 h-1 w-32 bg-[#1f4f9d]"></div>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach($journals as $journal)
                <a href="{{ route('journal.details', $journal->id) }}"
                   class="overflow-hidden rounded-md border border-slate-300 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                    <div class="h-52 overflow-hidden">
                        <img src="{{ $journal->image ? asset($journal->image) : 'https://via.placeholder.com/500x300?text=Journal+Image' }}"
                             alt="{{ $journal->title }}"
                             class="h-full w-full object-cover transition duration-500 hover:scale-105">
                    </div>

                    <div class="px-4 py-6 text-center">
                        <h3 class="min-h-[88px] text-[22px] font-medium leading-10 text-[#174a9c]">
                            {{ $journal->title }}
                        </h3>

                        <div class="mt-4 flex items-center justify-between gap-3 text-left">
                            <p class="text-[15px] font-semibold text-black">
                                ISSN: {{ $journal->issn }}
                            </p>
                            <p class="text-[15px] font-semibold text-black">
                                IF: {{ $journal->impact_factor }} *
                            </p>
                        </div>

                        <div class="mt-8 flex flex-col items-center justify-center">
                            <div class="flex items-end text-[#2d6aa9]">
                                <span class="text-[18px] font-bold">Pub</span>
                                <span class="mx-1 text-[28px] font-extrabold leading-none">M</span>
                                <span class="text-[18px] font-bold">ed</span>
                            </div>
                            <p class="mt-1 text-sm text-slate-600">
                                {{ $journal->nlm_id ?: 'NLM ID' }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</section>
@endsection