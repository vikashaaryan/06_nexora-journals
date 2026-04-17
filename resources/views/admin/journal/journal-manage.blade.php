@extends('layouts.admin')

@section('title', 'Manage Journals')
@section('page_title', 'Manage Journals')

@section('content')
<div>
    <div class="mb-6 flex items-center justify-between">
        <h2 class="text-2xl font-bold text-slate-800">Manage Journals</h2>

        <a href="{{ route('admin.journal.create') }}"
           class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
            + Create Journal
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-slate-50">
                    <tr class="text-left text-sm font-semibold text-slate-700">
                        <th class="px-4 py-4">#</th>
                        <th class="px-4 py-4">Image</th>
                        <th class="px-4 py-4">Title</th>
                        <th class="px-4 py-4">ISSN</th>
                        <th class="px-4 py-4">NLM ID</th>
                        <th class="px-4 py-4">IF</th>
                        <th class="px-4 py-4">Status</th>
                        <th class="px-4 py-4">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    @forelse($journals as $key => $journal)
                        <tr class="text-sm text-slate-700">
                            <td class="px-4 py-4">{{ $key + 1 }}</td>
                            <td class="px-4 py-4">
                                @if($journal->image)
                                    <img src="{{ asset($journal->image) }}" alt="{{ $journal->title }}" class="h-14 w-20 rounded object-cover border">
                                @else
                                    <span class="text-slate-400">No Image</span>
                                @endif
                            </td>
                            <td class="px-4 py-4 font-medium">{{ $journal->title }}</td>
                            <td class="px-4 py-4">{{ $journal->issn }}</td>
                            <td class="px-4 py-4">{{ $journal->nlm_id ?? '-' }}</td>
                            <td class="px-4 py-4">{{ $journal->impact_factor }}</td>
                            <td class="px-4 py-4">
                                @if($journal->is_active)
                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">Active</span>
                                @else
                                    <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">Inactive</span>
                                @endif
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.journal.edit', $journal->id) }}"
                                       class="rounded-md bg-amber-100 px-3 py-2 text-xs font-semibold text-amber-700 hover:bg-amber-200">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.journal.delete', $journal->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this journal?')">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            class="rounded-md bg-red-100 px-3 py-2 text-xs font-semibold text-red-700 hover:bg-red-200"
                                        >
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-4 py-8 text-center text-slate-500">
                                No journals found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection