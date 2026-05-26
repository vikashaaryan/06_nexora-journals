@extends('layouts.admin')

@section('title', 'Manage Subjects')
@section('page_title', 'Subject Manager')

@section('content')
<div class="space-y-8">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl md:text-3xl font-bold text-slate-800">Manage Subjects</h2>
            <p class="mt-2 text-sm text-slate-500">Create and manage homepage browse subjects.</p>
        </div>

        <a href="{{ route('admin.subjects.create') }}"
           class="rounded-lg bg-blue-600 px-5 py-3 text-sm font-medium text-white hover:bg-blue-700">
            + Create Subject
        </a>
    </div>

    @if(session('success'))
        <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
        <table class="min-w-full">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-4 py-3 text-left">Image</th>
                    <th class="px-4 py-3 text-left">Title</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($subjects as $subject)
                    <tr class="border-t">
                        <td class="px-4 py-3">
                            <img src="{{ $subject->image ? asset($subject->image) : 'https://via.placeholder.com/80x80?text=Subject' }}"
                                 class="h-16 w-16 rounded-lg object-cover border border-slate-200" alt="{{ $subject->title }}">
                        </td>
                        <td class="px-4 py-3">{{ $subject->title }}</td>
                        <td class="px-4 py-3">
                            @if($subject->is_active)
                                <span class="rounded bg-green-100 px-2 py-1 text-xs font-semibold text-green-700">Active</span>
                            @else
                                <span class="rounded bg-red-100 px-2 py-1 text-xs font-semibold text-red-700">Inactive</span>
                            @endif
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-3">
                                <a href="{{ route('admin.subjects.edit', $subject->id) }}" class="text-blue-600">Edit</a>

                                <form action="{{ route('admin.subjects.delete', $subject->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Delete this subject?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-slate-500">
                            No subjects found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection