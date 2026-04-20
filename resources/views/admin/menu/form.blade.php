@extends('layouts.journal')

@section('title', $menu ? 'Edit Menu' : 'Create Menu')
@section('page_title', $menu ? 'Edit Menu' : 'Create Menu')

@section('content')
<div class="max-w-4xl">
    <form
        action="{{ $menu ? route('admin.journal.menus.update', [$journal->id, $menu->id]) : route('admin.journal.menus.store', $journal->id) }}"
        method="POST"
        class="space-y-5 rounded-xl border bg-white p-6 shadow-sm"
        x-data="{
            menuType: '{{ old('menu_type', $menu->menu_type ?? 'page') }}'
        }"
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

        <!-- Selected Journal -->
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
            <label class="mb-2 block text-sm font-medium">Menu</label>
            <input
                type="text"
                name="menu"
                value="{{ old('menu', $menu->menu ?? 'Journal Menu') }}"
                class="w-full rounded border px-4 py-3"
                placeholder="Header Menu / Journal Menu"
            >
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Menu Type</label>
            <select name="menu_type" x-model="menuType" class="w-full rounded border px-4 py-3">
                <option value="page">Page</option>
                <option value="custom">Custom</option>
            </select>
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Parent Menu</label>
            <select name="parent_id" class="w-full rounded border px-4 py-3">
                <option value="">Select Parent Menu</option>
                @foreach($parents as $parent)
                    <option value="{{ $parent->id }}" {{ old('parent_id', $menu->parent_id ?? '') == $parent->id ? 'selected' : '' }}>
                        {{ $parent->menu_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div x-show="menuType === 'page'" x-cloak>
            <label class="mb-2 block text-sm font-medium">Pages</label>
            <select name="page_id" class="w-full rounded border px-4 py-3">
                <option value="">Select Page</option>
                @foreach($pages as $page)
                    <option value="{{ $page->id }}" {{ old('page_id', $menu->page_id ?? '') == $page->id ? 'selected' : '' }}>
                        {{ $page->title }}
                    </option>
                @endforeach
            </select>
            @error('page_id')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Menu Name</label>
            <input
                type="text"
                name="menu_name"
                value="{{ old('menu_name', $menu->menu_name ?? '') }}"
                class="w-full rounded border px-4 py-3"
                placeholder="Menu Name"
            >
        </div>

        <div x-show="menuType === 'custom'" x-cloak class="space-y-5">
            <div>
                <label class="mb-2 block text-sm font-medium">Menu Link</label>
                <input
                    type="text"
                    name="menu_link"
                    value="{{ old('menu_link', $menu->menu_link ?? '') }}"
                    class="w-full rounded border px-4 py-3"
                    placeholder="Menu Link"
                >
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium">Short Description</label>
                <textarea
                    name="short_description"
                    rows="3"
                    class="w-full rounded border px-4 py-3"
                    placeholder="Short Description"
                >{{ old('short_description', $menu->short_description ?? '') }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium">Meta Title</label>
                <input
                    type="text"
                    name="meta_title"
                    value="{{ old('meta_title', $menu->meta_title ?? '') }}"
                    class="w-full rounded border px-4 py-3"
                    placeholder="Meta Title"
                >
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium">Meta Description</label>
                <textarea
                    name="meta_description"
                    rows="4"
                    class="w-full rounded border px-4 py-3"
                    placeholder="Meta Description"
                >{{ old('meta_description', $menu->meta_description ?? '') }}</textarea>
            </div>
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Sort Order</label>
            <input
                type="number"
                name="sort_order"
                value="{{ old('sort_order', $menu->sort_order ?? 0) }}"
                class="w-full rounded border px-4 py-3"
                placeholder="Sort Order"
            >
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Status</label>
            <select name="is_active" class="w-full rounded border px-4 py-3">
                <option value="1" {{ old('is_active', $menu->is_active ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('is_active', $menu->is_active ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button class="rounded bg-indigo-600 px-8 py-3 text-white hover:bg-indigo-700">
            {{ $menu ? 'Update' : 'Save' }}
        </button>
    </form>
</div>
@endsection