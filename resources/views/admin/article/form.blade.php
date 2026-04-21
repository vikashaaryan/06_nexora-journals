@extends('layouts.journal')

@section('title', $article ? 'Edit Article' : 'Add Article')
@section('page_title', $article ? 'Edit Article' : 'Add Article')

@section('content')
<div class="space-y-6">

    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">
                {{ $article ? 'Edit Article' : 'Add Article' }}
            </h2>
            <p class="mt-1 text-sm text-slate-500">
                Journal: <span class="font-semibold text-blue-700">{{ $journal->title }}</span>
            </p>
        </div>

        <a href="{{ route('admin.journal.articles.index', $journal->id) }}"
           class="rounded-lg bg-slate-200 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-300">
            Back
        </a>
    </div>

    @if ($errors->any())
        <div class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <form action="{{ $article ? route('admin.journal.articles.update', [$journal->id, $article->id]) : route('admin.journal.articles.store', $journal->id) }}"
              method="POST"
              enctype="multipart/form-data"
              class="grid gap-6 md:grid-cols-2">
            @csrf

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Paper Title *</label>
                <input type="text" name="paper_title" value="{{ old('paper_title', $article->paper_title ?? '') }}"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600" required>
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Article Type</label>
                <input type="text" name="article_type" value="{{ old('article_type', $article->article_type ?? '') }}"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Author Name *</label>
                <input type="text" name="author_name" value="{{ old('author_name', $article->author_name ?? '') }}"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600" required>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Select Volume</label>
                <select name="volume_id" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">
                    <option value="">Select volume</option>
                    @foreach($volumes as $volume)
                        <option value="{{ $volume->id }}" {{ old('volume_id', $article->volume_id ?? '') == $volume->id ? 'selected' : '' }}>
                            {{ $volume->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Select Issue</label>
                <select name="issue_id" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">
                    <option value="">Select issue</option>
                    @foreach($issues as $issue)
                        <option value="{{ $issue->id }}" {{ old('issue_id', $article->issue_id ?? '') == $issue->id ? 'selected' : '' }}>
                            {{ $issue->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Page Number</label>
                <input type="text" name="page_number" value="{{ old('page_number', $article->page_number ?? '') }}"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Enter Year</label>
                <input type="text" name="year" value="{{ old('year', $article->year ?? '') }}"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">DOI</label>
                <input type="text" name="doi" value="{{ old('doi', $article->doi ?? '') }}"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Keywords</label>
                <input type="text" name="keywords" value="{{ old('keywords', $article->keywords ?? '') }}"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Abstract</label>
                <textarea name="abstract" rows="4"
                          class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">{{ old('abstract', $article->abstract ?? '') }}</textarea>
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Upload Link</label>
                <input type="text" name="upload_link" value="{{ old('upload_link', $article->upload_link ?? '') }}"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Upload Doc</label>
                <input type="file" name="upload_doc"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">

                @if(!empty($article?->upload_doc))
                    <a href="{{ asset('storage/' . $article->upload_doc) }}" target="_blank"
                       class="mt-2 inline-block text-sm font-medium text-blue-700 hover:underline">
                        View Current File
                    </a>
                @endif
            </div>

            <div class="md:col-span-2">
                <label class="inline-flex items-center gap-3">
                    <input type="checkbox" name="is_active" value="1"
                           {{ old('is_active', $article->is_active ?? true) ? 'checked' : '' }}>
                    <span class="text-sm font-medium text-slate-700">Active</span>
                </label>
            </div>

            <div class="md:col-span-2">
                <button type="submit"
                        class="rounded-lg bg-indigo-600 px-8 py-3 text-sm font-semibold text-white hover:bg-indigo-700">
                    {{ $article ? 'Update' : 'Save' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection