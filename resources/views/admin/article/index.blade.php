@extends('layouts.journal')

@section('title', 'Manage Articles')
@section('page_title', 'Article Publication Manager')

@section('content')
<div class="space-y-6">

    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">Article Publications</h2>
            <p class="mt-1 text-sm text-slate-500">
                Manage articles for <span class="font-semibold text-blue-700">{{ $journal->title }}</span>
            </p>
        </div>

        <a href="{{ route('admin.journal.articles.create', $journal->id) }}"
           class="rounded-lg bg-blue-600 px-5 py-3 text-sm font-semibold text-white hover:bg-blue-700">
            + Add Article
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-sm">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">#</th>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">Paper Title</th>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">Author</th>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">Volume</th>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">Issue</th>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">Year</th>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">Status</th>
                        <th class="px-5 py-4 text-center font-semibold text-slate-700">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100 bg-white">
                    @forelse($articles as $key => $item)
                        <tr class="hover:bg-slate-50">
                            <td class="px-5 py-4 text-slate-600">{{ $key + 1 }}</td>
                            <td class="px-5 py-4 font-medium text-slate-800">{{ $item->paper_title }}</td>
                            <td class="px-5 py-4 text-slate-700">{{ $item->author_name }}</td>
                            <td class="px-5 py-4 text-slate-700">{{ $item->volume?->name ?? '-' }}</td>
                            <td class="px-5 py-4 text-slate-700">{{ $item->issue?->name ?? '-' }}</td>
                            <td class="px-5 py-4 text-slate-700">{{ $item->year ?? '-' }}</td>
                            <td class="px-5 py-4">
                                @if($item->is_active)
                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">Active</span>
                                @else
                                    <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">Inactive</span>
                                @endif
                            </td>
                            <td class="px-5 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.journal.articles.edit', [$journal->id, $item->id]) }}"
                                       class="rounded-lg bg-amber-100 px-3 py-2 text-xs font-semibold text-amber-700 hover:bg-amber-200">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.journal.articles.delete', [$journal->id, $item->id]) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this article?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="rounded-lg bg-red-100 px-3 py-2 text-xs font-semibold text-red-700 hover:bg-red-200">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-5 py-10 text-center text-slate-500">
                                No articles found for this journal.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection