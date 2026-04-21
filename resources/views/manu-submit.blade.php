@extends('layouts.app')

@section('title', 'Submit Manuscript')

@section('content')
<section class="bg-[#f5f5f5] py-14 md:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="text-center">
            <h1 class="text-3xl font-semibold text-slate-800 md:text-5xl">Submit Your Manuscript</h1>
            <div class="mx-auto mt-5 h-1 w-32 bg-[#1f4f9d]"></div>
            <p class="mx-auto mt-6 max-w-4xl text-base leading-8 text-slate-600 md:text-lg">
                Join our community of researchers by submitting your original work.
            </p>
        </div>

        @if(session('success'))
            <div class="mx-auto mt-8 max-w-3xl rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mx-auto mt-8 max-w-3xl rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-14 grid gap-8 lg:grid-cols-3">
            <div class="lg:col-span-2">
                <div class="border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                    <h2 class="border-b border-slate-200 pb-4 text-2xl font-semibold text-slate-800">
                        Manuscript Submission Form
                    </h2>

                    <form action="{{ route('journal.submit.store') }}" method="POST" enctype="multipart/form-data" class="mt-8 space-y-10">
                        @csrf

                        <!-- Personal Information -->
                        <div>
                            <h3 class="mb-5 text-xl font-semibold text-[#1f4f9d]">Personal Information</h3>

                            <div class="grid gap-5 md:grid-cols-2">
                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">First Name *</label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" required>
                                </div>

                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Last Name *</label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" required>
                                </div>

                                <div class="md:col-span-2">
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Email Address *</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" required>
                                </div>

                                <div class="md:col-span-2">
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Affiliation</label>
                                    <input type="text" name="affiliation" value="{{ old('affiliation') }}" placeholder="University / Organization" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
                                </div>
                            </div>
                        </div>

                        <!-- Manuscript Details -->
                        <div>
                            <h3 class="mb-5 text-xl font-semibold text-[#1f4f9d]">Manuscript Details</h3>

                            <div class="grid gap-5">
                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Journal Selection *</label>
                                    <select name="journal_id" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" required>
                                        <option value="">Select a journal</option>
                                        @foreach($journals as $journal)
                                            <option value="{{ $journal->id }}" {{ old('journal_id') == $journal->id ? 'selected' : '' }}>
                                                {{ $journal->title }} (ISSN: {{ $journal->issn }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Manuscript Title *</label>
                                    <input type="text" name="manuscript_title" value="{{ old('manuscript_title') }}" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" required>
                                </div>

                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Abstract *</label>
                                    <textarea name="abstract" rows="5" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" placeholder="Provide a brief summary of your research..." required>{{ old('abstract') }}</textarea>
                                </div>

                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Keywords</label>
                                    <input type="text" name="keywords" value="{{ old('keywords') }}" placeholder="Separate keywords with commas" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
                                </div>
                            </div>
                        </div>

                        <!-- File Upload -->
                        <div>
                            <h3 class="mb-5 text-xl font-semibold text-[#1f4f9d]">File Upload</h3>

                            <div class="border border-dashed border-slate-300 bg-slate-50 p-8 text-center">
                                <input type="file" name="file" class="w-full text-sm" accept=".pdf,.doc,.docx" required>
                                <p class="mt-2 text-sm text-slate-500">
                                    Supported formats: PDF, DOC, DOCX (Max 50MB)
                                </p>
                            </div>
                        </div>

                        <!-- Co Authors -->
                        <div>
                            <h3 class="mb-5 text-xl font-semibold text-[#1f4f9d]">Co-Authors</h3>

                            <div id="co-authors-container" class="space-y-4">
                                <div class="grid gap-4 md:grid-cols-2">
                                    <input type="text" name="co_authors[0][name]" placeholder="Co-author name" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
                                    <input type="email" name="co_authors[0][email]" placeholder="Co-author email" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
                                </div>
                            </div>

                            <button type="button" id="add-co-author" class="mt-4 text-sm font-medium text-[#1f4f9d] hover:underline">
                                + Add Co-Author
                            </button>
                        </div>

                        <!-- Declarations -->
                        <div>
                            <h3 class="mb-5 text-xl font-semibold text-[#1f4f9d]">Declarations</h3>

                            <div class="space-y-4">
                                <label class="flex items-start gap-3">
                                    <input type="checkbox" name="declaration_one" value="1" class="mt-1" required>
                                    <span class="text-sm leading-7 text-slate-600">
                                        I confirm that this manuscript has not been published elsewhere and is not under consideration by another journal.
                                    </span>
                                </label>

                                <label class="flex items-start gap-3">
                                    <input type="checkbox" name="declaration_two" value="1" class="mt-1" required>
                                    <span class="text-sm leading-7 text-slate-600">
                                        I agree to the terms of the Creative Commons Attribution License (CC BY) for open access publication.
                                    </span>
                                </label>

                                <label class="flex items-start gap-3">
                                    <input type="checkbox" name="declaration_three" value="1" class="mt-1" required>
                                    <span class="text-sm leading-7 text-slate-600">
                                        All authors have approved the manuscript and agree with its submission to this journal.
                                    </span>
                                </label>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="pt-2">
                            <button type="submit"
                                    class="w-full bg-[#1f4f9d] px-6 py-4 text-base font-semibold text-white transition hover:bg-[#173d7c]">
                                Submit Manuscript
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <div class="border border-slate-200 bg-white shadow-sm">
                    <div class="bg-[#1f4f9d] px-5 py-4">
                        <h3 class="text-lg font-semibold text-white">Submission Guidelines</h3>
                    </div>
                    <div class="p-5">
                        <ul class="space-y-3 text-sm leading-7 text-slate-600">
                            <li>• Manuscripts must be original and unpublished</li>
                            <li>• Follow journal-specific formatting guidelines</li>
                            <li>• Include all figures and tables in the manuscript</li>
                            <li>• Provide complete author information</li>
                        </ul>

                        <a href="{{ route('guidelines') }}" class="mt-5 inline-block text-sm font-medium text-[#1f4f9d] hover:underline">
                            View Full Guidelines →
                        </a>
                    </div>
                </div>

                <div class="border border-slate-200 bg-white shadow-sm">
                    <div class="bg-[#1f4f9d] px-5 py-4">
                        <h3 class="text-lg font-semibold text-white">Processing Timeline</h3>
                    </div>
                    <div class="space-y-4 p-5">
                        <div class="flex items-start gap-3">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100 text-sm font-semibold text-[#1f4f9d]">1</div>
                            <div>
                                <p class="font-medium text-slate-800">Initial Review</p>
                                <p class="text-sm text-slate-500">2–3 weeks</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100 text-sm font-semibold text-[#1f4f9d]">2</div>
                            <div>
                                <p class="font-medium text-slate-800">Peer Review</p>
                                <p class="text-sm text-slate-500">4–8 weeks</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100 text-sm font-semibold text-[#1f4f9d]">3</div>
                            <div>
                                <p class="font-medium text-slate-800">Revision</p>
                                <p class="text-sm text-slate-500">2–4 weeks</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100 text-sm font-semibold text-[#1f4f9d]">4</div>
                            <div>
                                <p class="font-medium text-slate-800">Publication</p>
                                <p class="text-sm text-slate-500">1–2 weeks</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border border-slate-200 bg-white shadow-sm">
                    <div class="bg-[#1f4f9d] px-5 py-4">
                        <h3 class="text-lg font-semibold text-white">Article Processing Charges</h3>
                    </div>
                    <div class="p-5">
                        <p class="text-3xl font-bold text-[#1f4f9d]">$299</p>
                        <p class="mt-2 text-sm leading-7 text-slate-600">
                            One-time fee for accepted manuscripts.
                        </p>

                        <a href="{{ route('apc') }}" class="mt-5 inline-block text-sm font-medium text-[#1f4f9d] hover:underline">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addBtn = document.getElementById('add-co-author');
        const container = document.getElementById('co-authors-container');
        let index = 1;

        if (addBtn && container) {
            addBtn.addEventListener('click', function () {
                const wrapper = document.createElement('div');
                wrapper.className = 'grid gap-4 md:grid-cols-2';
                wrapper.innerHTML = `
                    <input type="text" name="co_authors[${index}][name]" placeholder="Co-author name" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
                    <input type="email" name="co_authors[${index}][email]" placeholder="Co-author email" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
                `;
                container.appendChild(wrapper);
                index++;
            });
        }
    });
</script>
@endsection