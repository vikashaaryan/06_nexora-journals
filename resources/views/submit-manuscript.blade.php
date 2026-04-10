@extends('layouts.app')

@section('title', 'Submit Manuscript')

@section('content')
    <div class="pt-24 pb-16 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-6">Submit Your Manuscript</h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">Join our community of researchers by submitting your groundbreaking work. We provide a streamlined submission process with expert peer review.</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Submission Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-8">Manuscript Submission Form</h2>
                        <form class="space-y-6">
                            <!-- Personal Information -->
                            <div class="space-y-4">
                                <h3 class="text-lg font-semibold text-gray-900">Personal Information</h3>
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                    <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Affiliation</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="University/Organization">
                                </div>
                            </div>

                            <!-- Manuscript Details -->
                            <div class="space-y-4">
                                <h3 class="text-lg font-semibold text-gray-900">Manuscript Details</h3>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Journal Selection *</label>
                                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                                        <option value="">Select a journal</option>
                                        <option value="jar">Journal of Advanced Research</option>
                                        <option value="iji">International Journal of Innovation</option>
                                        <option value="jhs">Journal of Health Sciences</option>
                                        <option value="erq">Education Research Quarterly</option>
                                        <option value="sdj">Sustainable Development Journal</option>
                                        <option value="ber">Business & Economics Review</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Manuscript Title *</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Abstract *</label>
                                    <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Provide a brief summary of your research..." required></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Keywords</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Separate keywords with commas">
                                </div>
                            </div>

                            <!-- File Upload -->
                            <div class="space-y-4">
                                <h3 class="text-lg font-semibold text-gray-900">File Upload</h3>
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-blue-400 transition-colors">
                                    <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <p class="text-gray-600 mb-2">Drag and drop your manuscript file here, or click to browse</p>
                                    <p class="text-sm text-gray-500">Supported formats: PDF, DOC, DOCX (Max 50MB)</p>
                                    <input type="file" class="hidden" accept=".pdf,.doc,.docx" id="manuscript-file">
                                    <label for="manuscript-file" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 cursor-pointer mt-4">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        Choose File
                                    </label>
                                </div>
                            </div>

                            <!-- Co-Authors -->
                            <div class="space-y-4">
                                <h3 class="text-lg font-semibold text-gray-900">Co-Authors</h3>
                                <div id="co-authors-container">
                                    <div class="co-author-entry grid md:grid-cols-2 gap-4 mb-4">
                                        <input type="text" placeholder="Co-author name" class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                        <input type="email" placeholder="Co-author email" class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                </div>
                                <button type="button" id="add-co-author" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                    Add Co-Author
                                </button>
                            </div>

                            <!-- Declarations -->
                            <div class="space-y-4">
                                <h3 class="text-lg font-semibold text-gray-900">Declarations</h3>
                                <div class="space-y-3">
                                    <label class="flex items-start">
                                        <input type="checkbox" class="mt-1 mr-3 text-blue-600 focus:ring-blue-500" required>
                                        <span class="text-sm text-gray-600">I confirm that this manuscript has not been published elsewhere and is not under consideration by another journal.</span>
                                    </label>
                                    <label class="flex items-start">
                                        <input type="checkbox" class="mt-1 mr-3 text-blue-600 focus:ring-blue-500" required>
                                        <span class="text-sm text-gray-600">I agree to the terms of the Creative Commons Attribution License (CC BY) for open access publication.</span>
                                    </label>
                                    <label class="flex items-start">
                                        <input type="checkbox" class="mt-1 mr-3 text-blue-600 focus:ring-blue-500" required>
                                        <span class="text-sm text-gray-600">All authors have approved the manuscript and agree with its submission to this journal.</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-6">
                                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-6 rounded-lg font-semibold hover:shadow-lg transition-shadow">
                                    Submit Manuscript
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">
                    <!-- Submission Guidelines -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Submission Guidelines</h3>
                        <div class="space-y-3 text-sm text-gray-600">
                            <div class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Manuscripts must be original and unpublished
                            </div>
                            <div class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Follow journal-specific formatting guidelines
                            </div>
                            <div class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Include all figures and tables in the manuscript
                            </div>
                            <div class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Provide complete author information
                            </div>
                        </div>
                        <a href="{{ route('guidelines') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium mt-4">
                            View Full Guidelines
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Processing Timeline -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Processing Timeline</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-blue-600 font-semibold text-sm">1</span>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Initial Review</div>
                                    <div class="text-sm text-gray-600">2-3 weeks</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-blue-600 font-semibold text-sm">2</span>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Peer Review</div>
                                    <div class="text-sm text-gray-600">4-8 weeks</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-blue-600 font-semibold text-sm">3</span>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Revision</div>
                                    <div class="text-sm text-gray-600">2-4 weeks</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-blue-600 font-semibold text-sm">4</span>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Publication</div>
                                    <div class="text-sm text-gray-600">1-2 weeks</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- APC Information -->
                    <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl p-6 border border-green-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Article Processing Charges</h3>
                        <div class="text-3xl font-bold text-green-600 mb-2">$299</div>
                        <p class="text-gray-600 mb-4">One-time fee for accepted manuscripts</p>
                        <a href="{{ route('apc') }}" class="inline-flex items-center text-green-600 hover:text-green-700 font-medium">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection