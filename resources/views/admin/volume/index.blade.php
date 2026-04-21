@extends('layouts.journal')

@section('title', 'Manage Volumes')
@section('page_title', 'Volume Manager')

@section('content')
<div class="space-y-6">

    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-6 py-5">
            <h2 class="text-2xl font-bold text-slate-800">Volume</h2>
            <p class="mt-1 text-sm text-slate-500">
                Manage volumes for <span class="font-semibold text-blue-700">{{ $journal->title }}</span>
            </p>
        </div>

        <div class="p-6">
            @if(session('success'))
                <div class="mb-5 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @php
                $isEdit = isset($volume) && $volume;
            @endphp

            <div class="mb-8 rounded-xl border border-slate-200 bg-slate-50 p-5">
                <div class="mb-4 flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-slate-700">
                        {{ $isEdit ? 'Edit Volume' : 'Add Volume' }}
                    </h3>

                    @if($isEdit)
                        <a href="{{ route('admin.journal.volumes.index', $journal->id) }}"
                           class="rounded-lg bg-slate-200 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-300">
                            Cancel
                        </a>
                    @endif
                </div>

                <form action="{{ $isEdit ? route('admin.journal.volumes.update', [$journal->id, $volume->id]) : route('admin.journal.volumes.store', $journal->id) }}"
                      method="POST"
                      class="space-y-5">
                    @csrf

                    <div class="grid gap-5 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-700">Volume Name *</label>
                            <input type="text"
                                   name="name"
                                   value="{{ old('name', $volume->name ?? '') }}"
                                   placeholder="Enter Volume"
                                   class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-600"
                                   required>
                        </div>

                        <div class="flex items-end">
                            <label class="inline-flex items-center gap-3">
                                <input type="checkbox"
                                       name="is_active"
                                       value="1"
                                       {{ old('is_active', $volume->is_active ?? true) ? 'checked' : '' }}>
                                <span class="text-sm font-medium text-slate-700">Active</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                                class="rounded-lg bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow hover:bg-indigo-700">
                            {{ $isEdit ? 'Update Volume' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="overflow-hidden rounded-xl border border-slate-200">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200 text-sm">
                        <thead class="bg-slate-50">
                            <tr>
                                <th class="px-5 py-4 text-left font-semibold text-slate-700">#</th>
                                <th class="px-5 py-4 text-left font-semibold text-slate-700">Name</th>
                                <th class="px-5 py-4 text-left font-semibold text-slate-700">Status</th>
                                <th class="px-5 py-4 text-center font-semibold text-slate-700">Action</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-slate-100 bg-white">
                            @forelse($volumes as $key => $item)
                                <tr class="hover:bg-slate-50">
                                    <td class="px-5 py-4 text-slate-600">{{ $key + 1 }}</td>

                                    <td class="px-5 py-4 font-medium text-slate-800">
                                        {{ $item->name }}
                                    </td>

                                    <td class="px-5 py-4">
                                        @if($item->is_active)
                                            <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                                                Active
                                            </span>
                                        @else
                                            <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">
                                                Inactive
                                            </span>
                                        @endif
                                    </td>

                                    <td class="px-5 py-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <a href="{{ route('admin.journal.volumes.edit', [$journal->id, $item->id]) }}"
                                               class="rounded-lg bg-amber-100 px-3 py-2 text-xs font-semibold text-amber-700 hover:bg-amber-200">
                                                Edit
                                            </a>

                                            <form action="{{ route('admin.journal.volumes.delete', [$journal->id, $item->id]) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Are you sure you want to delete this volume?')">
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
                                    <td colspan="4" class="px-5 py-10 text-center text-slate-500">
                                        No volumes found for this journal.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection