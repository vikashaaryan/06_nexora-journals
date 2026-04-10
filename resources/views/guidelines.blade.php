@extends('layouts.app')

@section('title', 'Author Guidelines')

@section('content')
    <div class="pt-24 pb-16 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-6">Author Guidelines</h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">Comprehensive guidelines to help you prepare and submit your manuscript successfully. Following these guidelines ensures a smooth review and publication process.</p>
            </div>

            <!-- Quick Navigation -->
            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 mb-12">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Quick Navigation</h2>
                <div class="flex flex-wrap gap-3">
                    <a href="#manuscript-preparation" class="bg-blue-100 text-blue-700 px-4 py-2 rounded-lg hover:bg-blue-200 transition-colors">Manuscript Preparation</a>
                    <a href="#submission-process" class="bg-green-100 text-green-700 px-4 py-2 rounded-lg hover:bg-green-200 transition-colors">Submission Process</a>
                    <a href="#peer-review" class="bg-purple-100 text-purple-700 px-4 py-2 rounded-lg hover:bg-purple-200 transition-colors">Peer Review</a>
                    <a href="#ethical-guidelines" class="bg-red-100 text-red-700 px-4 py-2 rounded-lg hover:bg-red-200 transition-colors">Ethical Guidelines</a>
                    <a href="#formatting-requirements" class="bg-orange-100 text-orange-700 px-4 py-2 rounded-lg hover:bg-orange-200 transition-colors">Formatting</a>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-12">
                    <!-- Manuscript Preparation -->
                    <div id="manuscript-preparation" class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Manuscript Preparation</h2>

                        <div class="space-y-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">General Requirements</h3>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                            <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Originality</h4>
                                            <p class="text-gray-600">Manuscripts must be original work not previously published or under consideration elsewhere.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                            <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Language</h4>
                                            <p class="text-gray-600">All manuscripts must be written in clear, concise English. Non-native speakers are encouraged to have their work professionally edited.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                            <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900">Word Count</h4>
                                            <p class="text-gray-600">Original research articles: 3,000-8,000 words. Review articles: 5,000-12,000 words. Short communications: 1,000-3,000 words.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Manuscript Structure</h3>
                                <div class="bg-gray-50 rounded-lg p-6">
                                    <h4 class="font-semibold text-gray-900 mb-3">Required Sections (Original Research)</h4>
                                    <ol class="list-decimal list-inside space-y-2 text-gray-600">
                                        <li>Title page with author details and affiliations</li>
                                        <li>Abstract (150-250 words) with keywords</li>
                                        <li>Introduction</li>
                                        <li>Materials and Methods</li>
                                        <li>Results</li>
                                        <li>Discussion</li>
                                        <li>Conclusion</li>
                                        <li>Acknowledgments</li>
                                        <li>References</li>
                                        <li>Supporting information (if applicable)</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Formatting Requirements -->
                    <div id="formatting-requirements" class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Formatting Requirements</h2>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Text Formatting</h3>
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Font: Times New Roman, 12pt
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Double-spaced throughout
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        1-inch margins on all sides
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Page numbers in footer
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Figures & Tables</h3>
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-blue-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        High-resolution (300 DPI minimum)
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-blue-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        TIFF, JPEG, or EPS formats
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-blue-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Clear legends and captions
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-blue-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Numbered sequentially
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- References -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">References & Citations</h2>

                        <div class="space-y-6">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Citation Style</h3>
                                <p class="text-gray-600 mb-4">We use APA 7th edition formatting for all references and in-text citations. Please ensure consistency throughout your manuscript.</p>
                            </div>

                            <div class="bg-gray-50 rounded-lg p-6">
                                <h4 class="font-semibold text-gray-900 mb-3">Examples:</h4>
                                <div class="space-y-3 text-sm">
                                    <div>
                                        <strong class="text-gray-900">Journal Article:</strong>
                                        <code class="bg-white px-2 py-1 rounded text-gray-800">Smith, J., & Johnson, A. (2023). Title of the article. Journal Name, 45(2), 123-145.</code>
                                    </div>
                                    <div>
                                        <strong class="text-gray-900">Book:</strong>
                                        <code class="bg-white px-2 py-1 rounded text-gray-800">Brown, R. (2022). Book title. Publisher Name.</code>
                                    </div>
                                    <div>
                                        <strong class="text-gray-900">Website:</strong>
                                        <code class="bg-white px-2 py-1 rounded text-gray-800">Author, A. (2023). Title of page. Site Name. https://www.example.com</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ethical Guidelines -->
                    <div id="ethical-guidelines" class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Ethical Guidelines</h2>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Research Ethics</h3>
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-red-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        Human subjects research requires IRB approval
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-red-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        Animal research must follow institutional guidelines
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-red-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        Clinical trials must be registered
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Publication Ethics</h3>
                                <ul class="space-y-3 text-gray-600">
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-orange-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        No plagiarism or data fabrication
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-orange-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        Proper attribution of sources
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-orange-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        Conflict of interest disclosure
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">
                    <!-- Quick Checklist -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Submission Checklist</h3>
                        <div class="space-y-3">
                            <label class="flex items-start">
                                <input type="checkbox" class="mt-1 mr-3 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-600">Manuscript follows journal formatting guidelines</span>
                            </label>
                            <label class="flex items-start">
                                <input type="checkbox" class="mt-1 mr-3 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-600">All authors have approved the submission</span>
                            </label>
                            <label class="flex items-start">
                                <input type="checkbox" class="mt-1 mr-3 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-600">Abstract is within word limit and includes keywords</span>
                            </label>
                            <label class="flex items-start">
                                <input type="checkbox" class="mt-1 mr-3 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-600">Figures and tables are high-resolution and properly labeled</span>
                            </label>
                            <label class="flex items-start">
                                <input type="checkbox" class="mt-1 mr-3 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-600">References are complete and follow APA style</span>
                            </label>
                            <label class="flex items-start">
                                <input type="checkbox" class="mt-1 mr-3 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-600">Conflict of interest statement included</span>
                            </label>
                        </div>
                    </div>

                    <!-- Contact Support -->
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-6 border border-blue-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Need Help?</h3>
                        <p class="text-gray-600 mb-4">Our editorial team is here to assist you with any questions about manuscript preparation or submission.</p>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                guidelines@nexorajournals.com
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                +1 (555) 123-4567
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium mt-4">
                            Contact Us
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Download Templates -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Download Templates</h3>
                        <div class="space-y-3">
                            <a href="#" class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <div>
                                    <div class="font-medium text-gray-900">Manuscript Template</div>
                                    <div class="text-sm text-gray-600">DOC format</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <div>
                                    <div class="font-medium text-gray-900">Reference Guide</div>
                                    <div class="text-sm text-gray-600">APA 7th edition</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5 text-purple-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                <div>
                                    <div class="font-medium text-gray-900">Figure Guidelines</div>
                                    <div class="text-sm text-gray-600">PDF format</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection