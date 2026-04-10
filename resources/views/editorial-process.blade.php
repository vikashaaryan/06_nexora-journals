@extends('layouts.app')

@section('title', 'Editorial Process')

@section('content')
    <div class="pt-24 pb-16 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-6">Editorial Process</h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">Our rigorous peer review and editorial process ensures the highest quality publications while maintaining efficiency and transparency.</p>
            </div>

            <!-- Process Timeline -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 mb-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Publication Journey</h2>
                <div class="relative">
                    <!-- Timeline line -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-gradient-to-b from-blue-400 to-purple-600 h-full rounded-full"></div>

                    <div class="space-y-16">
                        <!-- Step 1 -->
                        <div class="relative flex items-center">
                            <div class="flex-1 text-right pr-8">
                                <div class="bg-gradient-to-r from-blue-500 to-purple-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <span class="text-white font-bold text-lg">1</span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Manuscript Submission</h3>
                                <p class="text-gray-600">Authors submit their research through our online portal with all required documentation and declarations.</p>
                            </div>
                            <div class="w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="flex-1 pl-8"></div>
                        </div>

                        <!-- Step 2 -->
                        <div class="relative flex items-center">
                            <div class="flex-1 pr-8"></div>
                            <div class="w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="flex-1 text-left pl-8">
                                <div class="bg-gradient-to-r from-green-500 to-teal-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <span class="text-white font-bold text-lg">2</span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Initial Screening</h3>
                                <p class="text-gray-600">Editorial team reviews for compliance with submission guidelines, originality, and suitability for the journal.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="relative flex items-center">
                            <div class="flex-1 text-right pr-8">
                                <div class="bg-gradient-to-r from-purple-500 to-pink-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <span class="text-white font-bold text-lg">3</span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Peer Review Assignment</h3>
                                <p class="text-gray-600">Manuscripts are assigned to expert reviewers in the field for double-blind peer review evaluation.</p>
                            </div>
                            <div class="w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="flex-1 pl-8"></div>
                        </div>

                        <!-- Step 4 -->
                        <div class="relative flex items-center">
                            <div class="flex-1 pr-8"></div>
                            <div class="w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="flex-1 text-left pl-8">
                                <div class="bg-gradient-to-r from-orange-500 to-red-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <span class="text-white font-bold text-lg">4</span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Peer Review Process</h3>
                                <p class="text-gray-600">Reviewers provide detailed feedback on methodology, significance, and scientific merit within 4-6 weeks.</p>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="relative flex items-center">
                            <div class="flex-1 text-right pr-8">
                                <div class="bg-gradient-to-r from-cyan-500 to-blue-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <span class="text-white font-bold text-lg">5</span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Editorial Decision</h3>
                                <p class="text-gray-600">Editor makes final decision based on reviewer feedback: Accept, Minor Revision, Major Revision, or Reject.</p>
                            </div>
                            <div class="w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="flex-1 pl-8"></div>
                        </div>

                        <!-- Step 6 -->
                        <div class="relative flex items-center">
                            <div class="flex-1 pr-8"></div>
                            <div class="w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="flex-1 text-left pl-8">
                                <div class="bg-gradient-to-r from-green-500 to-emerald-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <span class="text-white font-bold text-lg">6</span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Revision & Acceptance</h3>
                                <p class="text-gray-600">Authors revise manuscript based on feedback, and final version is accepted for publication.</p>
                            </div>
                        </div>

                        <!-- Step 7 -->
                        <div class="relative flex items-center">
                            <div class="flex-1 text-right pr-8">
                                <div class="bg-gradient-to-r from-indigo-500 to-purple-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <span class="text-white font-bold text-lg">7</span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Production & Publication</h3>
                                <p class="text-gray-600">Manuscript undergoes copyediting, typesetting, and is published online with DOI assignment.</p>
                            </div>
                            <div class="w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="flex-1 pl-8"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                <!-- Review Process Details -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Peer Review Details</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Double-Blind Review</h3>
                                <p class="text-gray-600 text-sm">Both reviewer and author identities are concealed to ensure unbiased evaluation.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Expert Reviewers</h3>
                                <p class="text-gray-600 text-sm">Manuscripts are reviewed by at least two qualified experts in the relevant field.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Timely Process</h3>
                                <p class="text-gray-600 text-sm">Complete review cycle typically takes 4-8 weeks with regular status updates.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Detailed Feedback</h3>
                                <p class="text-gray-600 text-sm">Reviewers provide constructive feedback to help authors improve their work.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Editorial Standards -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Editorial Standards</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Scientific Integrity</h3>
                                <p class="text-gray-600 text-sm">All published research must demonstrate originality, validity, and scientific rigor.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-cyan-100 rounded-lg flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-4 h-4 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Ethical Standards</h3>
                                <p class="text-gray-600 text-sm">Adherence to international research ethics guidelines and publication ethics.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-rose-100 rounded-lg flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Conflict Resolution</h3>
                                <p class="text-gray-600 text-sm">Transparent handling of potential conflicts of interest and appeals process.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-amber-100 rounded-lg flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Continuous Improvement</h3>
                                <p class="text-gray-600 text-sm">Regular review and updating of editorial policies based on community feedback.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Appeals Process -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-700 rounded-3xl p-12 text-white">
                <h2 class="text-3xl font-bold mb-8 text-center">Appeals Process</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Submit Appeal</h3>
                        <p class="opacity-90">Authors may appeal editorial decisions within 30 days, providing detailed justification.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Independent Review</h3>
                        <p class="opacity-90">Appeals are reviewed by an independent editorial committee not involved in original decision.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Final Resolution</h3>
                        <p class="opacity-90">Final decision communicated within 4 weeks with detailed reasoning provided.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection