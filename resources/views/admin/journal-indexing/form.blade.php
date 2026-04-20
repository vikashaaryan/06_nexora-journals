@extends('layouts.journal')

@section('title', $journalIndexing ? 'Edit Abstracting & Indexing' : 'Create Abstracting & Indexing')
@section('page_title', $journalIndexing ? 'Edit Abstracting & Indexing' : 'Create Abstracting & Indexing')

@section('content')
<div class="max-w-4xl">
    <form
        action="{{ $journalIndexing ? route('admin.journal.indexings.update', [$journal->id, $journalIndexing->id]) : route('admin.journal.indexings.store', $journal->id) }}"
        method="POST"
        class="space-y-5 rounded-xl border bg-white p-6 shadow-sm"
    >
        @csrf

        @if ($errors->any())
            <div class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700">
                <ul class="space-y-1 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label class="mb-2 block text-sm font-medium">Selected Journal</label>
            <input
                type="text"
                value="{{ $journal->title }}"
                class="w-full rounded border bg-slate-100 px-4 py-3"
                readonly
            >
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Indexing Title</label>
            <input
                type="text"
                name="title"
                value="{{ old('title', $journalIndexing->title ?? '') }}"
                class="w-full rounded border px-4 py-3"
                placeholder="PubMed NLM"
            >
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Link</label>
            <input
                type="text"
                name="link"
                value="{{ old('link', $journalIndexing->link ?? '') }}"
                class="w-full rounded border px-4 py-3"
                placeholder="https://..."
            >
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Sort Order</label>
            <input
                type="number"
                name="sort_order"
                value="{{ old('sort_order', $journalIndexing->sort_order ?? 0) }}"
                class="w-full rounded border px-4 py-3"
            >
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Status</label>
            <select name="is_active" class="w-full rounded border px-4 py-3">
                <option value="1" {{ old('is_active', $journalIndexing->is_active ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('is_active', $journalIndexing->is_active ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button class="rounded bg-indigo-600 px-8 py-3 text-white hover:bg-indigo-700">
            {{ $journalIndexing ? 'Update' : 'Save' }}
        </button>
    </form>
</div>
@endsection