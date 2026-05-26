@extends('layouts.admin')

@section('title', $subject ? 'Edit Subject' : 'Create Subject')
@section('page_title', $subject ? 'Edit Subject' : 'Create Subject')

@section('content')
<div class="max-w-5xl">
    <div class="mb-6 flex items-center justify-between">
        <h2 class="text-2xl font-bold text-slate-800">
            {{ $subject ? 'Edit Subject' : 'Create Subject' }}
        </h2>

        <a href="{{ route('admin.subjects.index') }}"
           class="rounded-lg bg-slate-200 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-300">
            Manage Subjects
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700">
            <ul class="space-y-1">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
        <form
            action="{{ $subject ? route('admin.subjects.update', $subject->id) : route('admin.subjects.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="grid gap-6 md:grid-cols-2"
        >
            @csrf

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-semibold text-slate-700">Subject Title</label>
                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $subject->title ?? '') }}"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500"
                    placeholder="Enter subject title"
                >
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-semibold text-slate-700">Short Description</label>
                <textarea
                    name="short_description"
                    rows="4"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500"
                    placeholder="Enter short description"
                >{{ old('short_description', $subject->short_description ?? '') }}</textarea>
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-semibold text-slate-700">Description</label>
                <textarea
                    name="description"
                    rows="6"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500"
                    placeholder="Enter full description"
                >{{ old('description', $subject->description ?? '') }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Status</label>
                <select
                    name="is_active"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500"
                >
                    <option value="1" {{ old('is_active', $subject->is_active ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('is_active', $subject->is_active ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Subject Image</label>
                <input
                    type="file"
                    name="image"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500"
                >

                @if(!empty($subject?->image))
                    <div class="mt-4">
                        <img src="{{ asset($subject->image) }}" alt="Subject Image" class="h-32 rounded-lg border border-slate-200 object-cover">
                    </div>
                @endif
            </div>

            <div class="md:col-span-2 flex gap-3">
                <button
                    type="submit"
                    class="rounded-lg bg-blue-600 px-6 py-3 text-sm font-semibold text-white hover:bg-blue-700"
                >
                    {{ $subject ? 'Update Subject' : 'Create Subject' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection