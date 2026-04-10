@extends('layouts.app')

@section('title', 'Article Processing Charges')

@section('content')
    <div class="pt-24 pb-16 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-6">Article Processing Charges</h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">Transparent pricing for open access publication. We believe in fair and sustainable publishing practices that support the global research community.</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-12 mb-16">
                <!-- APC Overview -->
                <div class="lg:col-span-2 space-y-8">
                    <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">APC Structure</h2>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-gray-200">
                                        <th class="text-left py-4 px-4 font-semibold text-gray-900">Journal</th>
                                        <th class="text-left py-4 px-4 font-semibold text-gray-900">APC</th>
                                        <th class="text-left py-4 px-4 font-semibold text-gray-900">Currency</th>
                                        <th class="text-left py-4 px-4 font-semibold text-gray-900">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-4 text-gray-900 font-medium">Journal of Advanced Research</td>
                                        <td class="py-4 px-4 text-gray-900">$299</td>
                                        <td class="py-4 px-4 text-gray-600">USD</td>
                                        <td class="py-4 px-4">
                                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Active</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-4 text-gray-900 font-medium">International Journal of Innovation</td>
                                        <td class="py-4 px-4 text-gray-900">$249</td>
                                        <td class="py-4 px-4 text-gray-600">USD</td>
                                        <td class="py-4 px-4">
                                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Active</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-4 text-gray-900 font-medium">Journal of Health Sciences</td>
                                        <td class="py-4 px-4 text-gray-900">$349</td>
                                        <td class="py-4 px-4 text-gray-600">USD</td>
                                        <td class="py-4 px-4">
                                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Active</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-4 text-gray-900 font-medium">Education Research Quarterly</td>
                                        <td class="py-4 px-4 text-gray-900">$199</td>
                                        <td class="py-4 px-4 text-gray-600">USD</td>
                                        <td class="py-4 px-4">
                                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Active</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-4 text-gray-900 font-medium">Sustainable Development Journal</td>
                                        <td class="py-4 px-4 text-gray-900">$279</td>
                                        <td class="py-4 px-4 text-gray-600">USD</td>
                                        <td class="py-4 px-4">
                                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Active</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-4 px-4 text-gray-900 font-medium">Business & Economics Review</td>
                                        <td class="py-4 px-4 text-gray-900">$229</td>
                                        <td class="py-4 px-4 text-gray-600">USD</td>
                                        <td class="py-4 px-4">
                                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Active</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">What APC Covers</h2>
                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900">Peer Review Management</h3>
                                        <p class="text-gray-600 text-sm">Coordination of expert reviewers and editorial oversight</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900">Editorial Processing</h3>
                                        <p class="text-gray-600 text-sm">Manuscript editing, formatting, and quality assurance</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900">Open Access Hosting</h3>
                                        <p class="text-gray-600 text-sm">Permanent online publication and archiving</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900">DOI Registration</h3>
                                        <p class="text-gray-600 text-sm">Digital Object Identifier for permanent citation</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900">Indexing Services</h3>
                                        <p class="text-gray-600 text-sm">Submission to academic databases and search engines</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                        <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900">Marketing & Promotion</h3>
                                        <p class="text-gray-600 text-sm">Article promotion and visibility enhancement</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">
                    <!-- Payment Options -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Payment Options</h3>
                        <div class="space-y-4">
                            <div class="flex items-center p-4 border border-gray-200 rounded-lg">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Credit/Debit Card</div>
                                    <div class="text-sm text-gray-600">Visa, MasterCard, American Express</div>
                                </div>
                            </div>
                            <div class="flex items-center p-4 border border-gray-200 rounded-lg">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Bank Transfer</div>
                                    <div class="text-sm text-gray-600">Wire transfer or direct deposit</div>
                                </div>
                            </div>
                            <div class="flex items-center p-4 border border-gray-200 rounded-lg">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">PayPal</div>
                                    <div class="text-sm text-gray-600">Secure online payment</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Waivers & Discounts -->
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-6 border border-blue-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Waivers & Discounts</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center mt-1 mr-3 flex-shrink-0">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Developing Countries</div>
                                    <div class="text-sm text-gray-600">50% waiver for authors from low-income countries</div>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center mt-1 mr-3 flex-shrink-0">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Institutional Membership</div>
                                    <div class="text-sm text-gray-600">20% discount for member institutions</div>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center mt-1 mr-3 flex-shrink-0">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Reviewers & Editors</div>
                                    <div class="text-sm text-gray-600">Complimentary publication for active contributors</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('membership') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium mt-4">
                            Learn About Membership
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Contact Support -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Need Help?</h3>
                        <p class="text-gray-600 mb-4">Our support team is here to assist you with any questions about APC or payment options.</p>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                apc@nexorajournals.com
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                +1 (555) 123-4567
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="bg-white rounded-3xl p-12 shadow-xl border border-gray-100">
                <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Frequently Asked Questions</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">When is the APC charged?</h3>
                        <p class="text-gray-600">The APC is only charged after your manuscript has been accepted for publication. There are no submission fees or hidden costs.</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Can I get a waiver?</h3>
                        <p class="text-gray-600">Yes, we offer waivers for authors from developing countries and discounts for institutional members. Contact us to learn more.</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">What if my manuscript is rejected?</h3>
                        <p class="text-gray-600">If your manuscript is not accepted, no APC will be charged. Our peer review process ensures only high-quality research is published.</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Is the APC refundable?</h3>
                        <p class="text-gray-600">APCs are non-refundable once payment is processed and publication begins. We offer clear timelines and no rush decisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection