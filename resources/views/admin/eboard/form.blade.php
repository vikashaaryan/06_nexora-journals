@extends('layouts.journal')

@section('title', $eboard ? 'Edit Editorial Board Member' : 'Add Editorial Board Member')
@section('page_title', $eboard ? 'Edit Editorial Board Member' : 'Add Editorial Board Member')

@section('content')
<div class="space-y-6">

    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">
                {{ $eboard ? 'Edit Editorial Board Member' : 'Add Editorial Board Member' }}
            </h2>
            <p class="mt-1 text-sm text-slate-500">
                Journal: <span class="font-semibold text-blue-700">{{ $journal->title }}</span>
            </p>
        </div>

        <a href="{{ route('admin.journal.eboards.index', $journal->id) }}"
           class="rounded-lg bg-slate-200 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-300">
            Back
        </a>
    </div>

    @if ($errors->any())
        <div class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <form action="{{ $eboard ? route('admin.journal.eboards.update', [$journal->id, $eboard->id]) : route('admin.journal.eboards.store', $journal->id) }}"
              method="POST"
              enctype="multipart/form-data"
              class="grid gap-6 md:grid-cols-2">
            @csrf

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Name *</label>
                <input type="text" name="name" value="{{ old('name', $eboard->name ?? '') }}"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600" required>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Designation</label>
                <input type="text" name="designation" value="{{ old('designation', $eboard->designation ?? '') }}"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Institution</label>
                <input type="text" name="institution" value="{{ old('institution', $eboard->institution ?? '') }}"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Address</label>
                <textarea name="address" rows="4"
                          class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">{{ old('address', $eboard->address ?? '') }}</textarea>
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Short Description</label>
                <textarea name="short_description" rows="3"
                          class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">{{ old('short_description', $eboard->short_description ?? '') }}</textarea>
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Full Profile</label>
                <textarea name="full_profile" rows="10"
                          class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">{{ old('full_profile', $eboard->full_profile ?? '') }}</textarea>
            </div>

            <div class="md:col-span-2">
                <label class="mb-2 block text-sm font-medium text-slate-700">Image</label>
                <input type="file" name="image"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none focus:border-blue-600">

                @if(!empty($eboard?->image))
                    <img src="{{ asset($eboard->image) }}" alt="{{ $eboard->name }}"
                         class="mt-3 h-24 w-24 rounded-lg object-cover border border-slate-200">
                @endif
            </div>

            <div class="md:col-span-2">
                <label class="inline-flex items-center gap-3">
                    <input type="checkbox" name="is_active" value="1"
                           {{ old('is_active', $eboard->is_active ?? true) ? 'checked' : '' }}>
                    <span class="text-sm font-medium text-slate-700">Active</span>
                </label>
            </div>

            <div class="md:col-span-2">
                <button type="submit"
                        class="rounded-lg bg-indigo-600 px-8 py-3 text-sm font-semibold text-white hover:bg-indigo-700">
                    {{ $eboard ? 'Update Member' : 'Save Member' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection