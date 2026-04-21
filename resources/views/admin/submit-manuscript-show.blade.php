@extends('layouts.journal')

@section('title', 'View Manuscript')
@section('page_title', 'View Manuscript Details')

@section('content')
<div class="space-y-6">

    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">Manuscript Details</h2>
            <p class="mt-1 text-sm text-slate-500">
                Journal: <span class="font-semibold text-blue-700">{{ $journal->title }}</span>
            </p>
        </div>

        <a href="{{ route('journal.submissions.index', $journal->id) }}"
           class="rounded-lg bg-slate-200 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-300">
            Back
        </a>
    </div>

    <div class="grid gap-6 lg:grid-cols-2">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="mb-4 text-lg font-semibold text-slate-800">Author Information</h3>

            <div class="space-y-3 text-sm text-slate-700">
                <p><span class="font-semibold">First Name:</span> {{ $manuscript->first_name }}</p>
                <p><span class="font-semibold">Last Name:</span> {{ $manuscript->last_name }}</p>
                <p><span class="font-semibold">Email:</span> {{ $manuscript->email }}</p>
                <p><span class="font-semibold">Affiliation:</span> {{ $manuscript->affiliation ?: 'N/A' }}</p>
            </div>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <h3 class="mb-4 text-lg font-semibold text-slate-800">Manuscript Info</h3>

            <div class="space-y-3 text-sm text-slate-700">
                <p><span class="font-semibold">Title:</span> {{ $manuscript->manuscript_title }}</p>
                <p><span class="font-semibold">Keywords:</span> {{ $manuscript->keywords ?: 'N/A' }}</p>
                <p><span class="font-semibold">Submitted On:</span> {{ $manuscript->created_at->format('d M Y h:i A') }}</p>
                <p>
                    <span class="font-semibold">File:</span>
                    <a href="{{ asset('storage/' . $manuscript->file) }}" target="_blank" class="text-blue-700 hover:underline">
                        Open File
                    </a>
                </p>
            </div>
        </div>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <h3 class="mb-4 text-lg font-semibold text-slate-800">Abstract</h3>
        <p class="leading-7 text-slate-700">{{ $manuscript->abstract }}</p>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <h3 class="mb-4 text-lg font-semibold text-slate-800">Co-Authors</h3>

        @if(!empty($manuscript->co_authors))
            <div class="space-y-3">
                @foreach($manuscript->co_authors as $author)
                    <div class="rounded-lg border border-slate-200 p-4 text-sm text-slate-700">
                        <p><span class="font-semibold">Name:</span> {{ $author['name'] ?? 'N/A' }}</p>
                        <p><span class="font-semibold">Email:</span> {{ $author['email'] ?? 'N/A' }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-sm text-slate-500">No co-authors added.</p>
        @endif
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <h3 class="mb-4 text-lg font-semibold text-slate-800">Declarations</h3>

        <div class="space-y-2 text-sm text-slate-700">
            <p>Declaration One: <span class="font-semibold">{{ $manuscript->declaration_one ? 'Yes' : 'No' }}</span></p>
            <p>Declaration Two: <span class="font-semibold">{{ $manuscript->declaration_two ? 'Yes' : 'No' }}</span></p>
            <p>Declaration Three: <span class="font-semibold">{{ $manuscript->declaration_three ? 'Yes' : 'No' }}</span></p>
        </div>
    </div>
</div>
@endsection