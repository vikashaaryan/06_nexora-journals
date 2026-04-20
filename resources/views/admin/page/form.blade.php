@extends('layouts.journal')

@section('title', $page ? 'Edit Page' : 'Create Page')
@section('page_title', $page ? 'Edit Page' : 'Create Page')

@section('content')
<div class="max-w-5xl">
    <form action="{{ $page ? route('admin.journal.pages.update', [$journal->id, $page->id]) : route('admin.journal.pages.store', $journal->id) }}" method="POST" class="space-y-5 rounded-xl border bg-white p-6 shadow-sm">
        @csrf

        <div>
            <label class="mb-2 block text-sm font-medium">Title</label>
            <input type="text" name="title" value="{{ old('title', $page->title ?? '') }}" class="w-full rounded border px-4 py-3">
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Short Description</label>
            <textarea name="short_description" class="w-full rounded border px-4 py-3">{{ old('short_description', $page->short_description ?? '') }}</textarea>
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Show Eboard List</label>
            <div class="flex gap-4">
                <label><input type="radio" name="show_eboard_list" value="1" {{ old('show_eboard_list', $page->show_eboard_list ?? 0) == 1 ? 'checked' : '' }}> Yes</label>
                <label><input type="radio" name="show_eboard_list" value="0" {{ old('show_eboard_list', $page->show_eboard_list ?? 0) == 0 ? 'checked' : '' }}> No</label>
            </div>
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Total Eboard List Show On Page</label>
            <input type="number" name="eboard_limit" value="{{ old('eboard_limit', $page->eboard_limit ?? '') }}" class="w-full rounded border px-4 py-3">
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Show Issue & Volume</label>
            <div class="flex gap-4">
                <label><input type="radio" name="show_issue_volume" value="1" {{ old('show_issue_volume', $page->show_issue_volume ?? 0) == 1 ? 'checked' : '' }}> Yes</label>
                <label><input type="radio" name="show_issue_volume" value="0" {{ old('show_issue_volume', $page->show_issue_volume ?? 0) == 0 ? 'checked' : '' }}> No</label>
            </div>
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Page Link</label>
            <input type="text" name="page_link" value="{{ old('page_link', $page->page_link ?? '') }}" class="w-full rounded border px-4 py-3">
        </div>

     <div class="mb-4">
    <label class="mb-2 block text-sm font-medium text-gray-700">Long Description</label>
    <textarea id="editor" name="long_description">{{ old('long_description', $page->long_description ?? '') }}</textarea>
</div>

<style>
    .cke_chrome {
        border: 1px solid #d1d5db !important;
        border-radius: 6px !important;
        overflow: hidden;
    }
    .cke_top {
        background: #f9fafb !important;
        border-bottom: 1px solid #e5e7eb !important;
    }
</style>

<script src="https://cdn.ckeditor.com/4.22.1/full-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor', {
        height: 380,
        allowedContent: true,
        extraPlugins: 'colorbutton,font,justify,iframe,showblocks',
        toolbar: [
            {
                name: 'toolbar1',
                items: [
                    'Source',
                    '-',
                    'Format',
                    '-',
                    'Bold', 'Italic', 'Underline', 'Strike',
                    'Subscript', 'Superscript',
                    '-',
                    'Link',
                    '-',
                    'BulletedList', 'NumberedList',
                    '-',
                    'TextColor', 'BGColor'
                ]
            },
            {
                name: 'toolbar2',
                items: [
                    'Font',
                    'FontSize',
                    '-',
                    'RemoveFormat',
                    'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock',
                    '-',
                    'SpecialChar',
                    'Image',
                    'Blockquote',
                    'Table',
                    'Iframe',
                    '-',
                    'Undo', 'Redo'
                ]
            }
        ]
    });
</script>
        <div>
            <label class="mb-2 block text-sm font-medium">Meta Title</label>
            <input type="text" name="meta_title" value="{{ old('meta_title', $page->meta_title ?? '') }}" class="w-full rounded border px-4 py-3">
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Meta Description</label>
            <textarea name="meta_description" class="w-full rounded border px-4 py-3">{{ old('meta_description', $page->meta_description ?? '') }}</textarea>
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Meta Keyword</label>
            <textarea name="meta_keyword" class="w-full rounded border px-4 py-3">{{ old('meta_keyword', $page->meta_keyword ?? '') }}</textarea>
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium">Status</label>
            <select name="is_active" class="w-full rounded border px-4 py-3">
                <option value="1" {{ old('is_active', $page->is_active ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('is_active', $page->is_active ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button class="rounded bg-indigo-600 px-8 py-3 text-white">{{ $page ? 'Update' : 'Save' }}</button>
    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor.create(document.querySelector('#editor')).catch(error => console.error(error));
</script>
@endsection