@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section class="bg-[#f5f5f5] py-14 md:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-slate-800 md:text-5xl">Contact Us</h1>
            <div class="mx-auto mt-5 h-1 w-28 bg-[#1f4f9d]"></div>
            <p class="mx-auto mt-6 max-w-4xl text-base leading-8 text-slate-600 md:text-lg">
                Get in touch with our team for manuscript submission support, editorial queries,
                publication charges, membership enquiries, and general assistance.
            </p>
        </div>

        <!-- Top Contact Cards -->
        <div class="mt-14 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="border border-slate-200 bg-white shadow-sm">
                <div class="bg-[#1f4f9d] px-5 py-4">
                    <h2 class="text-lg font-semibold text-white">General Enquiries</h2>
                </div>
                <div class="space-y-3 p-5 text-sm leading-7 text-slate-600">
                    <p>For general questions and publishing information.</p>
                    <p><strong>Email:</strong> info@nexorajournals.com</p>
                    <p><strong>Phone:</strong> +1 (555) 123-4567</p>
                </div>
            </div>

            <div class="border border-slate-200 bg-white shadow-sm">
                <div class="bg-[#1f4f9d] px-5 py-4">
                    <h2 class="text-lg font-semibold text-white">Editorial Office</h2>
                </div>
                <div class="space-y-3 p-5 text-sm leading-7 text-slate-600">
                    <p>For manuscript submission and editorial process support.</p>
                    <p><strong>Email:</strong> editorial@nexorajournals.com</p>
                    <p><strong>Phone:</strong> +1 (555) 123-4568</p>
                </div>
            </div>

            <div class="border border-slate-200 bg-white shadow-sm">
                <div class="bg-[#1f4f9d] px-5 py-4">
                    <h2 class="text-lg font-semibold text-white">Technical Support</h2>
                </div>
                <div class="space-y-3 p-5 text-sm leading-7 text-slate-600">
                    <p>For website, account, or submission portal issues.</p>
                    <p><strong>Email:</strong> support@nexorajournals.com</p>
                    <p><strong>Phone:</strong> +1 (555) 123-4569</p>
                </div>
            </div>

            <div class="border border-slate-200 bg-white shadow-sm">
                <div class="bg-[#1f4f9d] px-5 py-4">
                    <h2 class="text-lg font-semibold text-white">Office Hours</h2>
                </div>
                <div class="space-y-2 p-5 text-sm leading-7 text-slate-600">
                    <p><strong>Mon - Fri:</strong> 9:00 AM - 6:00 PM EST</p>
                    <p><strong>Saturday:</strong> 10:00 AM - 4:00 PM EST</p>
                    <p><strong>Sunday:</strong> Closed</p>
                    <p class="pt-2 text-slate-500">Typical response time: within 24 hours on business days.</p>
                </div>
            </div>
        </div>

        <!-- Main Section -->
        <div class="mt-16 grid gap-8 lg:grid-cols-3">
            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                    <h2 class="border-b border-slate-200 pb-4 text-2xl font-semibold text-slate-800">
                        Send Us a Message
                    </h2>

                    <form class="mt-8 grid gap-5 md:grid-cols-2">
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

                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-700">Subject *</label>
                            <select class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" required>
                                <option value="">Select a subject</option>
                                <option>Manuscript Submission</option>
                                <option>Peer Review Process</option>
                                <option>APC & Payments</option>
                                <option>Technical Support</option>
                                <option>Membership Inquiry</option>
                                <option>General Inquiry</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-700">Institution / Organization</label>
                            <input type="text" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" placeholder="Optional">
                        </div>

                        <div class="md:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-slate-700">Message *</label>
                            <textarea rows="6" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-[#1f4f9d]" placeholder="Please write your message here..." required></textarea>
                        </div>

                        <div class="md:col-span-2">
                            <label class="flex items-start gap-3">
                                <input type="checkbox" class="mt-1" required>
                                <span class="text-sm leading-7 text-slate-600">
                                    I agree to the processing of my personal data for the purpose of handling this enquiry.
                                </span>
                            </label>
                        </div>

                        <div class="md:col-span-2">
                            <button type="submit" class="bg-[#1f4f9d] px-8 py-3 text-sm font-semibold text-white transition hover:bg-[#173d7c]">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <div class="border border-slate-200 bg-white shadow-sm">
                    <div class="bg-[#1f4f9d] px-5 py-4">
                        <h3 class="text-lg font-semibold text-white">Office Address</h3>
                    </div>
                    <div class="p-5 text-sm leading-7 text-slate-600">
                        <p class="font-medium text-slate-800">Nexora Journals Inc.</p>
                        <p>123 Academic Avenue, Suite 456</p>
                        <p>Research City, RC 12345</p>
                        <p>United States</p>
                    </div>
                </div>

                <div class="border border-slate-200 bg-white shadow-sm">
                    <div class="bg-[#1f4f9d] px-5 py-4">
                        <h3 class="text-lg font-semibold text-white">Support Information</h3>
                    </div>
                    <div class="space-y-3 p-5 text-sm leading-7 text-slate-600">
                        <p>• Manuscript and editorial queries are usually answered within 24 business hours.</p>
                        <p>• Technical issues may take up to 48 hours depending on complexity.</p>
                        <p>• For journal-specific questions, mention the journal title in your message.</p>
                    </div>
                </div>

                <div class="border border-slate-200 bg-white shadow-sm">
                    <div class="bg-[#1f4f9d] px-5 py-4">
                        <h3 class="text-lg font-semibold text-white">Quick Links</h3>
                    </div>
                    <div class="space-y-3 p-5 text-sm">
                        <a href="{{ route('submit') }}" class="block text-[#1f4f9d] hover:underline">Submit Manuscript</a>
                        <a href="{{ route('apc') }}" class="block text-[#1f4f9d] hover:underline">Article Processing Charges</a>
                        <a href="{{ route('guidelines') }}" class="block text-[#1f4f9d] hover:underline">Author Guidelines</a>
                        <a href="{{ route('membership') }}" class="block text-[#1f4f9d] hover:underline">Membership</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map / Placeholder -->
        <div class="mt-16 border border-slate-200 bg-white p-6 shadow-sm md:p-8">
            <h2 class="text-center text-2xl font-semibold text-slate-800">Office Location</h2>

            <div class="mt-8 grid gap-8 lg:grid-cols-2 lg:items-center">
                <div class="text-[16px] leading-8 text-slate-700">
                    <p>
                        Our editorial and support teams assist researchers, reviewers, and institutions across multiple disciplines.
                        For office visits, appointments are recommended in advance.
                    </p>

                    <div class="mt-5 space-y-2 text-sm text-slate-600">
                        <p><strong>Metro:</strong> Academic Station (5 min walk)</p>
                        <p><strong>Bus Routes:</strong> 22, 45, 67</p>
                        <p><strong>Airport:</strong> Research City International (15 min drive)</p>
                    </div>
                </div>

                <div class="flex h-64 items-center justify-center border border-dashed border-slate-300 bg-slate-50 text-center text-slate-400">
                    <div>
                        <p class="text-lg font-medium">Map Placeholder</p>
                        <p class="mt-2 text-sm">Add Google Map or static map here</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ -->
        <div class="mt-16 border border-slate-200 bg-white p-6 shadow-sm md:p-8">
            <h2 class="text-center text-2xl font-semibold text-slate-800">Frequently Asked Questions</h2>

            <div class="mt-8 grid gap-6 md:grid-cols-2">
                <div class="border border-slate-200 p-5">
                    <h3 class="text-lg font-semibold text-slate-800">How quickly will I receive a response?</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        We aim to respond within 24 hours on working days. Technical issues may take slightly longer.
                    </p>
                </div>

                <div class="border border-slate-200 p-5">
                    <h3 class="text-lg font-semibold text-slate-800">Can I ask about journal-specific submission rules?</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        Yes. Please mention the journal name clearly so the editorial office can guide you properly.
                    </p>
                </div>

                <div class="border border-slate-200 p-5">
                    <h3 class="text-lg font-semibold text-slate-800">Do you provide phone support?</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        Yes. Phone support is available during office hours, while detailed enquiries are best handled through email.
                    </p>
                </div>

                <div class="border border-slate-200 p-5">
                    <h3 class="text-lg font-semibold text-slate-800">Can institutions contact you for collaboration?</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        Yes. Universities, research organizations, and academic groups may contact us for institutional support and collaboration enquiries.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection