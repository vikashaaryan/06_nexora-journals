@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="pt-24 pb-16 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-6">Contact Us</h1>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">Get in touch with our team. We're here to help with your publishing needs, answer questions, and provide support throughout your academic journey.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                <!-- Contact Form -->
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Send us a Message</h2>
                    <form class="space-y-6">
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
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                                <option value="">Select a subject</option>
                                <option value="submission">Manuscript Submission</option>
                                <option value="review">Peer Review Process</option>
                                <option value="payment">APC & Payments</option>
                                <option value="technical">Technical Support</option>
                                <option value="membership">Membership Inquiry</option>
                                <option value="general">General Inquiry</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Institution/Organization</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Optional">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Please provide details about your inquiry..." required></textarea>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" class="mt-1 mr-3 text-blue-600 focus:ring-blue-500" required>
                            <span class="text-sm text-gray-600">I agree to the processing of my personal data for the purpose of handling my inquiry.</span>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-6 rounded-lg font-semibold hover:shadow-lg transition-shadow">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- General Inquiries -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">General Inquiries</h3>
                                <p class="text-sm text-gray-600">For general questions and information</p>
                            </div>
                        </div>
                        <div class="ml-16 space-y-2">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                info@nexorajournals.com
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                +1 (555) 123-4567
                            </div>
                        </div>
                    </div>

                    <!-- Editorial Support -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Editorial Support</h3>
                                <p class="text-sm text-gray-600">For manuscript submission and editorial questions</p>
                            </div>
                        </div>
                        <div class="ml-16 space-y-2">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                editorial@nexorajournals.com
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                +1 (555) 123-4568
                            </div>
                        </div>
                    </div>

                    <!-- Technical Support -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Technical Support</h3>
                                <p class="text-sm text-gray-600">For website and submission system issues</p>
                            </div>
                        </div>
                        <div class="ml-16 space-y-2">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                support@nexorajournals.com
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                +1 (555) 123-4569
                            </div>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-6 border border-blue-100">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Office Hours</h3>
                        <div class="space-y-2 text-sm text-gray-600">
                            <div class="flex justify-between">
                                <span>Monday - Friday:</span>
                                <span>9:00 AM - 6:00 PM EST</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Saturday:</span>
                                <span>10:00 AM - 4:00 PM EST</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sunday:</span>
                                <span>Closed</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-4">Response time: Within 24 hours for general inquiries, 48 hours for technical issues.</p>
                    </div>
                </div>
            </div>

            <!-- Office Location -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-900 text-center mb-8">Visit Our Office</h2>
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Headquarters</h3>
                        <div class="space-y-3 text-gray-600">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-400 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <div class="font-medium">Nexora Journals Inc.</div>
                                    <div>123 Academic Avenue, Suite 456</div>
                                    <div>Research City, RC 12345</div>
                                    <div>United States</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <h4 class="font-semibold text-gray-900 mb-3">Public Transportation</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li>• Metro Line 4: Academic Station (5 min walk)</li>
                                <li>• Bus Routes: 22, 45, 67 (direct service)</li>
                                <li>• Airport: Research City International (15 min drive)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-2xl h-64 flex items-center justify-center">
                        <div class="text-center text-gray-500">
                            <svg class="w-12 h-12 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                            <p>Interactive Map</p>
                            <p class="text-sm">Click to view location</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-700 rounded-3xl p-12 text-white mt-16">
                <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-3">How quickly will I receive a response?</h3>
                        <p class="opacity-90">We aim to respond to all inquiries within 24 hours during business days. Technical support issues may take up to 48 hours.</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-3">Do you offer phone support?</h3>
                        <p class="opacity-90">Yes, our support team is available by phone during office hours. For complex issues, email support is recommended for detailed documentation.</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-3">Can I schedule a meeting?</h3>
                        <p class="opacity-90">For institutional partnerships or large-scale inquiries, we offer virtual meetings. Please email us to arrange a suitable time.</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-3">Do you have international offices?</h3>
                        <p class="opacity-90">Our primary office is in the US, but we serve researchers worldwide. All our services are available internationally with 24/7 online access.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection