@extends('layouts.journal')

@section('title', 'Manage Abstracting & Indexing')
@section('page_title', 'Manage Abstracting & Indexing')

@section('content')
<div class="mb-4 flex items-center justify-between">
    <h2 class="text-2xl font-bold text-slate-800">Manage Abstracting & Indexing</h2>

    <a href="{{ route('admin.journal.indexings.create', $journal->id) }}"
       class="rounded bg-indigo-600 px-4 py-2 text-white">
        Add Abstracting & Indexing
    </a>
</div>

@if(session('success'))
    <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
        {{ session('success') }}
    </div>
@endif

<div class="overflow-hidden rounded-xl border bg-white shadow-sm">
    <table class="min-w-full">
        <thead class="bg-slate-50">
            <tr>
                <th class="px-4 py-3 text-left">Journal</th>
                <th class="px-4 py-3 text-left">Title</th>
                <th class="px-4 py-3 text-left">Link</th>
                <th class="px-4 py-3 text-left">Sort</th>
                <th class="px-4 py-3 text-left">Status</th>
                <th class="px-4 py-3 text-left">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
                <tr class="border-t">
                    <td class="px-4 py-3">{{ $item->journal->title ?? '-' }}</td>
                    <td class="px-4 py-3">{{ $item->title }}</td>
                    <td class="px-4 py-3">
                        @if($item->link)
                            <a href="{{ $item->link }}" target="_blank" class="text-blue-600 hover:underline">
                                Open Link
                            </a>
                        @else
                            -
                        @endif
                    </td>
                    <td class="px-4 py-3">{{ $item->sort_order }}</td>
                    <td class="px-4 py-3">
                        @if($item->is_active)
                            <span class="rounded bg-green-100 px-2 py-1 text-xs font-semibold text-green-700">Active</span>
                        @else
                            <span class="rounded bg-red-100 px-2 py-1 text-xs font-semibold text-red-700">Inactive</span>
                        @endif
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-3">
                            <a href="{{ route('admin.journal.indexings.edit', [$journal->id, $item->id]) }}"
                               class="text-blue-600">
                                Edit
                            </a>

                            <form action="{{ route('admin.journal.indexings.delete', [$journal->id, $item->id]) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this indexing item?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-4 py-6 text-center text-slate-500">
                        No indexing items found for this journal.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection