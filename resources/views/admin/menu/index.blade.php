@extends('layouts.journal')

@section('title', 'Manage Menus')
@section('page_title', 'Manage Menus')

@section('content')
<div class="mb-4 flex items-center justify-between">
    <h2 class="text-2xl font-bold text-slate-800">Manage Menus</h2>

    <a href="{{ route('admin.journal.menus.create', $journal->id) }}"
       class="rounded bg-indigo-600 px-4 py-2 text-white">
        Add Menu
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
                <th class="px-4 py-3 text-left">Menu Name</th>
                <th class="px-4 py-3 text-left">Type</th>
                <th class="px-4 py-3 text-left">Page / Link</th>
                <th class="px-4 py-3 text-left">Sort</th>
                <th class="px-4 py-3 text-left">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($menus as $menu)
                <tr class="border-t">
                    <td class="px-4 py-3">{{ $menu->journal->title ?? '-' }}</td>
                    <td class="px-4 py-3">{{ $menu->menu_name }}</td>
                    <td class="px-4 py-3">
                        @if($menu->menu_type === 'page')
                            <span class="rounded bg-blue-100 px-2 py-1 text-xs font-semibold text-blue-700">Page</span>
                        @else
                            <span class="rounded bg-purple-100 px-2 py-1 text-xs font-semibold text-purple-700">Custom</span>
                        @endif
                    </td>
                    <td class="px-4 py-3">
                        {{ $menu->page->title ?? ($menu->menu_link ?: '-') }}
                    </td>
                    <td class="px-4 py-3">{{ $menu->sort_order }}</td>
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-3">
                            <a href="{{ route('admin.journal.menus.edit', [$journal->id, $menu->id]) }}"
                               class="text-blue-600">
                                Edit
                            </a>

                            <form action="{{ route('admin.journal.menus.delete', [$journal->id, $menu->id]) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this menu?')">
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
                        No menu found for this journal.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection