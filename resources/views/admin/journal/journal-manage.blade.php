@extends('layouts.admin')

@section('title', 'Manage Journals')
@section('page_title', 'Journal Manager')

@section('content')
<div class="space-y-8">

    <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
        <div>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Manage Journals</h2>
            <p class="mt-2 text-sm text-slate-500">
                First select a journal, then manage only that journal's pages, menus, indexing and other content.
            </p>
        </div>

        <a href="{{ route('admin.journal.create') }}"
           class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-5 py-3 text-sm font-medium text-white hover:bg-blue-700 transition">
            + Create Journal
        </a>
    </div>

    @if (session('success'))
        <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="rounded-2xl border border-slate-200 bg-white p-4 sm:p-6 shadow-sm">
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-semibold text-slate-800 md:text-4xl">Select Journal Workspace</h1>
            <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
        </div>

        @if($journals->count())
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-4 xl:gap-8">
                @foreach ($journals as $journal)
                    <div class="overflow-hidden rounded-xl border border-slate-300 bg-[#f8f8f8] shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                        
                        <a href="{{ route('admin.journal.dashboard', $journal->id) }}" class="block">
                            
                            <!-- Image -->
                            <div class="h-32 sm:h-40 md:h-44 lg:h-48 overflow-hidden bg-slate-100">
                                <img
                                    src="{{ $journal->image ? asset($journal->image) : 'https://via.placeholder.com/500x300?text=Journal+Image' }}"
                                    alt="{{ $journal->title }}"
                                    class="h-full w-full object-cover"
                                >
                            </div>

                            <!-- Content -->
                            <div class="px-3 sm:px-4 py-2 sm:py-5 text-center">
                                
                                <!-- Title -->
                                <h3 class="min-h-[58px] sm:min-h-[72px] text-lg sm:text-[20px] font-medium leading-8 text-[#174a9c]">
                                    {{ $journal->title }}
                                </h3>

                                <!-- ISSN / IF -->
                                <div class=" flex items-center justify-between gap-2 text-left">
                                    <p class="text-[13px] sm:text-[15px] font-semibold text-black">
                                        ISSN: {{ $journal->issn }}
                                    </p>
                                    <p class="text-[13px] sm:text-[15px] font-semibold text-black">
                                        IF: {{ $journal->impact_factor }} *
                                    </p>
                                </div>

                                <!-- PubMed -->
                                <div class="mt-6 flex flex-col items-center justify-center">
                                    <div class="flex items-end text-[#2d6aa9] leading-none">
                                        <span class="text-[16px] sm:text-[18px] font-bold">Pub</span>
                                        <span class="mx-1 text-[30px] sm:text-[34px] font-extrabold">M</span>
                                        <span class="text-[16px] sm:text-[18px] font-bold">ed</span>
                                    </div>
                                    <p class="mt-1 text-xs sm:text-sm text-slate-600">
                                        {{ $journal->nlm_id ?: 'NLM ID' }}
                                    </p>
                                </div>

                             
                            </div>
                        </a>

                        <!-- Action Buttons -->
                        <div class="border-t border-slate-200 px-3 sm:px-4 py-3 bg-white">
                            <div class="flex items-center justify-between gap-2">
                                <a href="{{ route('admin.journal.edit', $journal->id) }}"
                                   class="flex-1 rounded-md bg-amber-100 px-3 py-2 text-center text-xs sm:text-sm font-medium text-amber-700 hover:bg-amber-200 transition">
                                    Edit
                                </a>

                                <form action="{{ route('admin.journal.delete', $journal->id) }}" method="POST" class="flex-1"
                                      onsubmit="return confirm('Are you sure you want to delete this journal?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="w-full rounded-md bg-red-100 px-3 py-2 text-xs sm:text-sm font-medium text-red-700 hover:bg-red-200 transition">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        @else
            <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50 px-6 py-12 text-center">
                <h3 class="text-xl font-semibold text-slate-700">No journals found</h3>
                <p class="mt-2 text-sm text-slate-500">Create your first journal to start managing journal-specific content.</p>

                <a href="{{ route('admin.journal.create') }}"
                   class="mt-6 inline-flex rounded-lg bg-blue-600 px-5 py-3 text-sm font-medium text-white hover:bg-blue-700">
                    + Create First Journal
                </a>
            </div>
        @endif
    </div>
</div>
@endsection