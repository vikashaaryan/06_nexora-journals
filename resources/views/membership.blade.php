@extends('layouts.app')

@section('title', 'Membership')

@section('content')
    <div class="pt-24 pb-16 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-6">Join Our Community</h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">Become part of a global network of researchers, reviewers, and academic professionals. Unlock exclusive benefits and contribute to advancing scholarly communication.</p>
            </div>

            <!-- Membership Tiers -->
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Individual Membership -->
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-blue-400 to-blue-600 rounded-full -mr-16 -mt-16 opacity-10"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Individual Membership</h3>
                        <div class="text-4xl font-bold text-blue-600 mb-2">$49<span class="text-lg text-gray-600">/year</span></div>
                        <p class="text-gray-600 mb-6">Perfect for researchers, students, and academic professionals.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600">20% APC discount</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600">Priority manuscript processing</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600">Access to member webinars</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600">Exclusive research alerts</span>
                            </li>
                        </ul>

                        <button class="w-full bg-gradient-to-r from-blue-600 to-cyan-600 text-white py-3 px-6 rounded-lg font-semibold hover:shadow-lg transition-shadow">
                            Join as Individual
                        </button>
                    </div>
                </div>

                <!-- Institutional Membership -->
                <div class="bg-gradient-to-br from-purple-600 to-pink-600 rounded-3xl p-8 shadow-xl text-white relative overflow-hidden transform scale-105">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <div class="flex items-center mb-4">
                            <h3 class="text-2xl font-bold mr-3">Institutional Membership</h3>
                            <span class="bg-white/20 text-white px-3 py-1 rounded-full text-sm font-medium">Most Popular</span>
                        </div>
                        <div class="text-4xl font-bold mb-2">$299<span class="text-lg opacity-90">/year</span></div>
                        <p class="opacity-90 mb-6">Ideal for universities, research institutions, and organizations.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-white mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>30% APC discount for all authors</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-white mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Unlimited manuscript submissions</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-white mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Custom institutional branding</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-white mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Dedicated account manager</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-white mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Advanced analytics dashboard</span>
                            </li>
                        </ul>

                        <button class="w-full bg-white text-purple-600 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            Join as Institution
                        </button>
                    </div>
                </div>

                <!-- Reviewer Membership -->
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-green-400 to-green-600 rounded-full -mr-16 -mt-16 opacity-10"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Reviewer Membership</h3>
                        <div class="text-4xl font-bold text-green-600 mb-2">$29<span class="text-lg text-gray-600">/year</span></div>
                        <p class="text-gray-600 mb-6">For expert reviewers who contribute to maintaining publication quality.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600">Complimentary publications</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600">Priority reviewer assignments</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600">Certificate of recognition</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600">Professional development webinars</span>
                            </li>
                        </ul>

                        <button class="w-full bg-gradient-to-r from-green-600 to-teal-600 text-white py-3 px-6 rounded-lg font-semibold hover:shadow-lg transition-shadow">
                            Join as Reviewer
                        </button>
                    </div>
                </div>
            </div>

            <!-- Membership Benefits Overview -->
            <div class="bg-white rounded-3xl p-12 shadow-xl border border-gray-100 mb-16">
                <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Why Join Nexora Journals?</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-400 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Global Network</h3>
                        <p class="text-gray-600">Connect with researchers and institutions worldwide in our vibrant academic community.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Cost Savings</h3>
                        <p class="text-gray-600">Significant discounts on article processing charges and publication fees.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-green-400 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Priority Service</h3>
                        <p class="text-gray-600">Faster processing times and dedicated support for all your publishing needs.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-r from-orange-400 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Professional Growth</h3>
                        <p class="text-gray-600">Access to exclusive webinars, training, and networking opportunities.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-700 rounded-3xl p-12 text-white">
                <h2 class="text-3xl font-bold text-center mb-12">What Our Members Say</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white/10 rounded-2xl p-6 backdrop-blur-sm">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-semibold">DR</span>
                            </div>
                            <div>
                                <div class="font-semibold">Dr. Sarah Rodriguez</div>
                                <div class="text-sm opacity-90">University of Toronto</div>
                            </div>
                        </div>
                        <p class="text-white/90 italic">"The membership benefits have significantly reduced our publication costs while maintaining the highest quality standards. Highly recommended!"</p>
                    </div>
                    <div class="bg-white/10 rounded-2xl p-6 backdrop-blur-sm">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-semibold">PK</span>
                            </div>
                            <div>
                                <div class="font-semibold">Prof. Michael Kim</div>
                                <div class="text-sm opacity-90">Stanford University</div>
                            </div>
                        </div>
                        <p class="text-white/90 italic">"As an institutional member, we've seen tremendous value in the analytics dashboard and dedicated support. It's transformed our publishing workflow."</p>
                    </div>
                    <div class="bg-white/10 rounded-2xl p-6 backdrop-blur-sm">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                                <span class="text-white font-semibold">AL</span>
                            </div>
                            <div>
                                <div class="font-semibold">Dr. Anna Liu</div>
                                <div class="text-sm opacity-90">Reviewer Member</div>
                            </div>
                        </div>
                        <p class="text-white/90 italic">"The reviewer membership program has been incredibly rewarding. I've gained recognition for my expertise while contributing to the academic community."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection