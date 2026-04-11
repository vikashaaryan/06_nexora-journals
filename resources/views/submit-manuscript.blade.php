@extends('layouts.app')

@section('title', 'Submit Manuscript')

@section('content')
<section class="bg-[#f5f5f5] py-14 md:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-slate-800 md:text-5xl">Submit Your Manuscript</h1>
            <div class="mx-auto mt-5 h-1 w-32 bg-[#1f4f9d]"></div>
            <p class="mx-auto mt-6 max-w-4xl text-base leading-8 text-slate-600 md:text-lg">
                Join our community of researchers by submitting your original work. We provide a streamlined editorial process, expert peer review, and open access publication.
            </p>
        </div>

        <div class="mt-14 grid gap-8 lg:grid-cols-3">
            <!-- Main Form -->
            <div class="lg:col-span-2">
                <div class="border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                    <h2 class="border-b border-slate-200 pb-4 text-2xl font-semibold text-slate-800">
                        Manuscript Submission Form
                    </h2>

                    <form class="mt-8 space-y-10">
                        <!-- Personal Information -->
                        <div>
                            <h3 class="mb-5 text-xl font-semibold text-[#1f4f9d]">Personal Information</h3>

                            <div class="grid gap-5 md:grid-cols-2">
                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">First Name *</label>
                                    <input type="text" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" required>
                                </div>

                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Last Name *</label>
                                    <input type="text" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" required>
                                </div>

                                <div class="md:col-span-2">
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Email Address *</label>
                                    <input type="email" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" required>
                                </div>

                                <div class="md:col-span-2">
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Affiliation</label>
                                    <input type="text" placeholder="University / Organization" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
                                </div>
                            </div>
                        </div>

                        <!-- Manuscript Details -->
                        <div>
                            <h3 class="mb-5 text-xl font-semibold text-[#1f4f9d]">Manuscript Details</h3>

                            <div class="grid gap-5">
                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Journal Selection *</label>
                                    <select class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" required>
                                        <option value="">Select a journal</option>
                                        <option>Cardiology and Cardiovascular Medicine</option>
                                        <option>Archives of Clinical and Biomedical Research</option>
                                        <option>Archives of Microbiology & Immunology</option>
                                        <option>Journal of Pharmacy and Pharmacology Research</option>
                                        <option>Journal of Surgery and Research</option>
                                        <option>Dental Research and Oral Health</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Manuscript Title *</label>
                                    <input type="text" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" required>
                                </div>

                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Abstract *</label>
                                    <textarea rows="5" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" placeholder="Provide a brief summary of your research..." required></textarea>
                                </div>

                                <div>
                                    <label class="mb-2 block text-sm font-medium text-slate-700">Keywords</label>
                                    <input type="text" placeholder="Separate keywords with commas" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
                                </div>
                            </div>
                        </div>

                        <!-- File Upload -->
                        <div>
                            <h3 class="mb-5 text-xl font-semibold text-[#1f4f9d]">File Upload</h3>

                            <div class="border border-dashed border-slate-300 bg-slate-50 p-8 text-center">
                                <svg class="mx-auto h-12 w-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>

                                <p class="mt-4 text-base text-slate-700">
                                    Drag and drop your manuscript file here, or click below to browse
                                </p>
                                <p class="mt-2 text-sm text-slate-500">
                                    Supported formats: PDF, DOC, DOCX (Max 50MB)
                                </p>

                                <input type="file" class="hidden" accept=".pdf,.doc,.docx" id="manuscript-file">

                                <label for="manuscript-file"
                                       class="mt-5 inline-block cursor-pointer bg-[#1f4f9d] px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#173d7c]">
                                    Choose File
                                </label>
                            </div>
                        </div>

                        <!-- Co Authors -->
                        <div>
                            <h3 class="mb-5 text-xl font-semibold text-[#1f4f9d]">Co-Authors</h3>

                            <div id="co-authors-container" class="space-y-4">
                                <div class="grid gap-4 md:grid-cols-2">
                                    <input type="text" placeholder="Co-author name" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
                                    <input type="email" placeholder="Co-author email" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
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
                                    <input type="checkbox" class="mt-1" required>
                                    <span class="text-sm leading-7 text-slate-600">
                                        I confirm that this manuscript has not been published elsewhere and is not under consideration by another journal.
                                    </span>
                                </label>

                                <label class="flex items-start gap-3">
                                    <input type="checkbox" class="mt-1" required>
                                    <span class="text-sm leading-7 text-slate-600">
                                        I agree to the terms of the Creative Commons Attribution License (CC BY) for open access publication.
                                    </span>
                                </label>

                                <label class="flex items-start gap-3">
                                    <input type="checkbox" class="mt-1" required>
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

        if (addBtn && container) {
            addBtn.addEventListener('click', function () {
                const wrapper = document.createElement('div');
                wrapper.className = 'grid gap-4 md:grid-cols-2';
                wrapper.innerHTML = `
                    <input type="text" placeholder="Co-author name" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
                    <input type="email" placeholder="Co-author email" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]">
                `;
                container.appendChild(wrapper);
            });
        }
    });
</script>
@endsection