@extends('layouts.journal')

@section('title', 'Manage Submit Manuscripts')
@section('page_title', 'Manuscript Submission Manager')

@section('content')
<div class="space-y-6">

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
            <div>
                <h2 class="text-2xl font-bold text-slate-800">Submitted Manuscripts</h2>
                <p class="mt-1 text-sm text-slate-500">
                    Manage manuscript submissions for <span class="font-semibold text-blue-700">{{ $journal->title }}</span>
                </p>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-sm">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">#</th>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">Author</th>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">Email</th>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">Title</th>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">File</th>
                        <th class="px-5 py-4 text-left font-semibold text-slate-700">Submitted On</th>
                        <th class="px-5 py-4 text-center font-semibold text-slate-700">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100 bg-white">
                    @forelse($manuscripts as $key => $manuscript)
                        <tr class="hover:bg-slate-50">
                            <td class="px-5 py-4 text-slate-600">
                                {{ $key + 1 }}
                            </td>

                            <td class="px-5 py-4">
                                <div class="font-medium text-slate-800">
                                    {{ $manuscript->first_name }} {{ $manuscript->last_name }}
                                </div>
                                @if($manuscript->affiliation)
                                    <div class="text-xs text-slate-500">{{ $manuscript->affiliation }}</div>
                                @endif
                            </td>

                            <td class="px-5 py-4 text-slate-600">
                                {{ $manuscript->email }}
                            </td>

                            <td class="px-5 py-4 text-slate-700">
                                {{ $manuscript->manuscript_title }}
                            </td>

                            <td class="px-5 py-4">
                                <a href="{{ asset('storage/' . $manuscript->file) }}"
                                   target="_blank"
                                   class="inline-flex rounded-lg bg-blue-100 px-3 py-2 text-xs font-semibold text-blue-700 hover:bg-blue-200">
                                    View File
                                </a>
                            </td>

                            <td class="px-5 py-4 text-slate-600">
                                {{ $manuscript->created_at->format('d M Y') }}
                            </td>

                            <td class="px-5 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('journal.submissions.show', [$journal->id, $manuscript->id]) }}"
                                       class="rounded-lg bg-amber-100 px-3 py-2 text-xs font-semibold text-amber-700 hover:bg-amber-200">
                                        View
                                    </a>

                                    <form action="{{ route('journal.submissions.delete', [$journal->id, $manuscript->id]) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this manuscript?')">
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
                            <td colspan="7" class="px-5 py-10 text-center text-slate-500">
                                No manuscript submissions found for this journal.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection