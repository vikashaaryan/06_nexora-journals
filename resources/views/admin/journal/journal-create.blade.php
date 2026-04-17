@extends('layouts.admin')

@section('title', $journal ? 'Edit Journal' : 'Create Journal')
@section('page_title', $journal ? 'Edit Journal' : 'Create Journal')

@section('content')
<div class="max-w-5xl">
    <div class="mb-6 flex items-center justify-between">
        <h2 class="text-2xl font-bold text-slate-800">
            {{ $journal ? 'Edit Journal' : 'Create Journal' }}
        </h2>

        <a href="{{ route('admin.journal.index') }}"
           class="rounded-lg bg-slate-200 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-300">
            Manage Journals
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700">
            <ul class="space-y-1">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
        <form
            action="{{ $journal ? route('admin.journal.update', $journal->id) : route('admin.journal.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="grid gap-6 md:grid-cols-2"
        >
            @csrf

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-semibold text-slate-700">Journal Title</label>
                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $journal->title ?? '') }}"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500"
                    placeholder="Enter journal title"
                >
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">ISSN</label>
                <input
                    type="text"
                    name="issn"
                    value="{{ old('issn', $journal->issn ?? '') }}"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500"
                    placeholder="Enter ISSN"
                >
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">NLM ID</label>
                <input
                    type="text"
                    name="nlm_id"
                    value="{{ old('nlm_id', $journal->nlm_id ?? '') }}"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500"
                    placeholder="Enter NLM ID"
                >
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Impact Factor</label>
                <input
                    type="number"
                    step="0.01"
                    name="impact_factor"
                    value="{{ old('impact_factor', $journal->impact_factor ?? '') }}"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500"
                    placeholder="Enter impact factor"
                >
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Status</label>
                <select
                    name="is_active"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500"
                >
                    <option value="1" {{ old('is_active', $journal->is_active ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('is_active', $journal->is_active ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-semibold text-slate-700">Journal Image</label>
                <input
                    type="file"
                    name="image"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500"
                >

                @if(!empty($journal?->image))
                    <div class="mt-4">
                        <img src="{{ asset($journal->image) }}" alt="Journal Image" class="h-32 rounded-lg border border-slate-200 object-cover">
                    </div>
                @endif
            </div>

            <div class="md:col-span-2 flex gap-3">
                <button
                    type="submit"
                    class="rounded-lg bg-blue-600 px-6 py-3 text-sm font-semibold text-white hover:bg-blue-700"
                >
                    {{ $journal ? 'Update Journal' : 'Create Journal' }}
                </button>

                @if($journal)
                    <a href="{{ route('admin.journal.create') }}"
                       class="rounded-lg bg-slate-200 px-6 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-300">
                        Reset
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection