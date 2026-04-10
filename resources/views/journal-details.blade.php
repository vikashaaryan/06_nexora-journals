@extends('layouts.app')

@section('title', 'Journal Details')

@section('content')
    <div class="pt-24 pb-16 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Journal Header -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 mb-12">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                    <div class="flex items-center mb-6 lg:mb-0">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mr-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">Journal of Advanced Research</h1>
                            <p class="text-lg text-gray-600">Multidisciplinary research covering breakthrough discoveries</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('submit-manuscript') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-shadow">
                            Submit Manuscript
                        </a>
                        <button class="border-2 border-gray-300 text-gray-700 px-6 py-3 rounded-lg font-semibold hover:border-gray-400 transition-colors">
                            Follow Journal
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-12">
                    <!-- About Section -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">About the Journal</h2>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            The Journal of Advanced Research is a premier multidisciplinary publication dedicated to showcasing cutting-edge research across all scientific disciplines. We provide a platform for researchers to share groundbreaking discoveries, innovative methodologies, and transformative ideas that advance human knowledge.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Our commitment to excellence is reflected in our rigorous peer-review process, international editorial board, and dedication to open access publishing. We believe that high-quality research should be accessible to all, fostering global collaboration and accelerating scientific progress.
                        </p>
                    </div>

                    <!-- Aims & Scope -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Aims & Scope</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Research Areas</h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Life Sciences & Biotechnology
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Physical Sciences & Engineering
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Social Sciences & Humanities
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Publication Types</h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Original Research Articles
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Review Articles
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        Short Communications
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Latest Articles -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Latest Articles</h2>
                        <div class="space-y-6">
                            <article class="border-b border-gray-100 pb-6 last:border-b-0 last:pb-0">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2 hover:text-blue-600 transition-colors cursor-pointer">
                                    Breakthrough in Quantum Computing: Novel Algorithm for Optimization Problems
                                </h3>
                                <p class="text-gray-600 mb-3">Authors: Dr. Sarah Chen, Prof. Michael Rodriguez, Dr. Emily Watson</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500">Published: March 15, 2024</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Open Access</span>
                                </div>
                            </article>
                            <article class="border-b border-gray-100 pb-6 last:border-b-0 last:pb-0">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2 hover:text-blue-600 transition-colors cursor-pointer">
                                    Climate Change Adaptation Strategies in Urban Environments
                                </h3>
                                <p class="text-gray-600 mb-3">Authors: Prof. David Kim, Dr. Lisa Thompson, Dr. Robert Garcia</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500">Published: March 8, 2024</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Open Access</span>
                                </div>
                            </article>
                            <article class="border-b border-gray-100 pb-6 last:border-b-0 last:pb-0">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2 hover:text-blue-600 transition-colors cursor-pointer">
                                    Machine Learning Applications in Drug Discovery
                                </h3>
                                <p class="text-gray-600 mb-3">Authors: Dr. Jennifer Liu, Prof. James Anderson, Dr. Maria Santos</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500">Published: February 28, 2024</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Open Access</span>
                                </div>
                            </article>
                        </div>
                        <div class="mt-8 text-center">
                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                                View All Articles
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">
                    <!-- Journal Stats -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Journal Statistics</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Impact Factor</span>
                                <span class="font-semibold text-gray-900">4.2</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Acceptance Rate</span>
                                <span class="font-semibold text-gray-900">28%</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Time to Publication</span>
                                <span class="font-semibold text-gray-900">45 days</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Citations</span>
                                <span class="font-semibold text-gray-900">2,847</span>
                            </div>
                        </div>
                    </div>

                    <!-- Editorial Board -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Editorial Board</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-semibold text-sm">SC</span>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Dr. Sarah Chen</div>
                                    <div class="text-sm text-gray-600">Editor-in-Chief</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-semibold text-sm">MR</span>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Prof. Michael Rodriguez</div>
                                    <div class="text-sm text-gray-600">Associate Editor</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-semibold text-sm">EW</span>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Dr. Emily Watson</div>
                                    <div class="text-sm text-gray-600">Review Editor</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Links</h3>
                        <div class="space-y-3">
                            <a href="{{ route('guidelines') }}" class="block text-gray-600 hover:text-blue-600 transition-colors">
                                Author Guidelines
                            </a>
                            <a href="{{ route('editorial-process') }}" class="block text-gray-600 hover:text-blue-600 transition-colors">
                                Editorial Process
                            </a>
                            <a href="{{ route('apc') }}" class="block text-gray-600 hover:text-blue-600 transition-colors">
                                Article Processing Charges
                            </a>
                            <a href="{{ route('submit-manuscript') }}" class="block text-blue-600 hover:text-blue-700 font-medium">
                                Submit Manuscript
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection