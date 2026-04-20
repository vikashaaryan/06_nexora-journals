@extends('layouts.journal')

@section('title', $journal->title . ' Dashboard')
@section('page_title', 'Journal Dashboard')

@section('content')
<div class="space-y-8">

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">
            <div class="flex items-start gap-5">
                <img
                    src="{{ $journal->image ? asset($journal->image) : 'https://via.placeholder.com/160x120?text=Journal' }}"
                    alt="{{ $journal->title }}"
                    class="h-24 w-32 rounded-lg border border-slate-200 object-cover"
                >

                <div>
                    <h2 class="text-2xl font-bold text-slate-800">{{ $journal->title }}</h2>
                    <div class="mt-2 space-y-1 text-sm text-slate-600">
                        <p><strong>ISSN:</strong> {{ $journal->issn }}</p>
                        <p><strong>NLM ID:</strong> {{ $journal->nlm_id ?: 'N/A' }}</p>
                        <p><strong>Impact Factor:</strong> {{ $journal->impact_factor }}</p>
                        <p>
                            <strong>Status:</strong>
                            <span class="{{ $journal->is_active ? 'text-green-600' : 'text-red-600' }}">
                                {{ $journal->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="{{ route('admin.journals') }}"
                   class="rounded-lg bg-slate-200 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-300">
                    Back to Journals
                </a>

                <a href="{{ route('admin.journal.edit', $journal->id) }}"
                   class="rounded-lg bg-amber-100 px-4 py-2 text-sm font-medium text-amber-700 hover:bg-amber-200">
                    Edit Journal
                </a>
            </div>
        </div>
    </div>

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <p class="text-sm text-slate-500">Total Menus</p>
            <h3 class="mt-3 text-4xl font-bold text-slate-800">{{ $menuCount }}</h3>
            <p class="mt-2 text-sm text-slate-500">Manage journal menu items</p>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <p class="text-sm text-slate-500">Total Pages</p>
            <h3 class="mt-3 text-4xl font-bold text-slate-800">{{ $pageCount }}</h3>
            <p class="mt-2 text-sm text-slate-500">Manage journal pages and editor content</p>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <p class="text-sm text-slate-500">Abstracting & Indexing</p>
            <h3 class="mt-3 text-4xl font-bold text-slate-800">{{ $indexingCount }}</h3>
            <p class="mt-2 text-sm text-slate-500">Manage indexing bodies for this journal</p>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <p class="text-sm text-slate-500">Journal Status</p>
            <h3 class="mt-3 text-2xl font-bold {{ $journal->is_active ? 'text-green-600' : 'text-red-600' }}">
                {{ $journal->is_active ? 'Active' : 'Inactive' }}
            </h3>
            <p class="mt-2 text-sm text-slate-500">Current publication visibility status</p>
        </div>
    </div>

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
        <a href="{{ route('admin.journal.menus.index', $journal->id) }}"
           class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
            <h4 class="text-lg font-semibold text-slate-800">Manage Menus</h4>
            <p class="mt-2 text-sm text-slate-500">Create and organize this journal's sidebar menu.</p>
        </a>

        <a href="{{ route('admin.journal.pages.index', $journal->id) }}"
           class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
            <h4 class="text-lg font-semibold text-slate-800">Manage Pages</h4>
            <p class="mt-2 text-sm text-slate-500">Add editor content only for this selected journal.</p>
        </a>

        <a href="{{ route('admin.journal.indexings.index', $journal->id) }}"
           class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
            <h4 class="text-lg font-semibold text-slate-800">Abstracting & Indexing</h4>
            <p class="mt-2 text-sm text-slate-500">Add indexing items only for this journal.</p>
        </a>

        <a href="{{ route('admin.journal.issues.index', $journal->id) }}"
           class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
            <h4 class="text-lg font-semibold text-slate-800">Issue & Volume</h4>
            <p class="mt-2 text-sm text-slate-500">Manage issues and volumes for this journal.</p>
        </a>
    </div>
</div>
@endsection