@extends('layouts.app')

@section('title', 'Membership')

@section('content')
<section class="bg-[#f5f5f5] py-14 md:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-slate-800 md:text-5xl">Membership</h1>
            <div class="mx-auto mt-5 h-1 w-28 bg-[#1f4f9d]"></div>
            <p class="mx-auto mt-6 max-w-4xl text-base leading-8 text-slate-600 md:text-lg">
                Join our publishing community and access benefits for authors, reviewers, editorial members, and institutions.
                Our membership options are designed to support scholarly publishing, collaboration, and professional growth.
            </p>
        </div>

        <!-- Intro Text -->
        <div class="mt-12 space-y-6 text-[17px] leading-9 text-slate-700">
            <p>
                Fortune Journals welcomes researchers, academicians, clinicians, institutions, and peer reviewers to become part of our academic publishing network.
                Membership provides a structured way to engage with our journals while receiving selected publishing and professional support benefits.
            </p>

            <p>
                Members may receive publishing discounts, priority communication, reviewer recognition, and opportunities to participate more actively in the scientific community.
                Institutional members may also benefit from broader support for affiliated authors.
            </p>
        </div>

        <!-- Membership Cards -->
        <div class="mt-14 grid gap-8 md:grid-cols-2 xl:grid-cols-4">
            <div class="border border-slate-200 bg-white shadow-sm">
                <div class="bg-[#1f4f9d] px-5 py-4">
                    <h2 class="text-xl font-semibold text-white">Author Membership</h2>
                </div>
                <div class="p-6">
                    <p class="text-sm leading-7 text-slate-600">
                        Designed for researchers and authors who regularly submit manuscripts and want publishing-related support.
                    </p>

                    <ul class="mt-5 space-y-2 text-sm leading-7 text-slate-700">
                        <li>• APC discount eligibility</li>
                        <li>• Priority communication support</li>
                        <li>• Publishing updates and alerts</li>
                        <li>• Access to author resources</li>
                    </ul>

                    <a href="{{ route('contact') }}" class="mt-6 inline-block text-sm font-medium text-[#1f4f9d] hover:underline">
                        Apply for Author Membership →
                    </a>
                </div>
            </div>

            <div class="border border-slate-200 bg-white shadow-sm">
                <div class="bg-[#1f4f9d] px-5 py-4">
                    <h2 class="text-xl font-semibold text-white">Reviewer Membership</h2>
                </div>
                <div class="p-6">
                    <p class="text-sm leading-7 text-slate-600">
                        For subject experts who contribute to manuscript evaluation and help maintain editorial quality.
                    </p>

                    <ul class="mt-5 space-y-2 text-sm leading-7 text-slate-700">
                        <li>• Reviewer recognition</li>
                        <li>• Certificates of contribution</li>
                        <li>• Priority reviewer invitations</li>
                        <li>• Academic engagement opportunities</li>
                    </ul>

                    <a href="{{ route('contact') }}" class="mt-6 inline-block text-sm font-medium text-[#1f4f9d] hover:underline">
                        Apply as Reviewer →
                    </a>
                </div>
            </div>

            <div class="border border-slate-200 bg-white shadow-sm">
                <div class="bg-[#1f4f9d] px-5 py-4">
                    <h2 class="text-xl font-semibold text-white">Editorial Membership</h2>
                </div>
                <div class="p-6">
                    <p class="text-sm leading-7 text-slate-600">
                        Suitable for experienced academicians and professionals interested in serving on editorial or advisory boards.
                    </p>

                    <ul class="mt-5 space-y-2 text-sm leading-7 text-slate-700">
                        <li>• Editorial board opportunities</li>
                        <li>• Academic leadership role</li>
                        <li>• Journal development participation</li>
                        <li>• Recognition in editorial activities</li>
                    </ul>

                    <a href="{{ route('contact') }}" class="mt-6 inline-block text-sm font-medium text-[#1f4f9d] hover:underline">
                        Enquire About Editorial Roles →
                    </a>
                </div>
            </div>

            <div class="border border-slate-200 bg-white shadow-sm">
                <div class="bg-[#1f4f9d] px-5 py-4">
                    <h2 class="text-xl font-semibold text-white">Institutional Membership</h2>
                </div>
                <div class="p-6">
                    <p class="text-sm leading-7 text-slate-600">
                        Created for universities, colleges, hospitals, research centers, and academic organizations.
                    </p>

                    <ul class="mt-5 space-y-2 text-sm leading-7 text-slate-700">
                        <li>• Support for affiliated authors</li>
                        <li>• Publication discount eligibility</li>
                        <li>• Institutional collaboration</li>
                        <li>• Broader publishing coordination</li>
                    </ul>

                    <a href="{{ route('contact') }}" class="mt-6 inline-block text-sm font-medium text-[#1f4f9d] hover:underline">
                        Request Institutional Details →
                    </a>
                </div>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Membership Benefits</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                <div class="border-l-4 border-[#1f4f9d] bg-slate-100 p-6">
                    <h3 class="text-xl font-semibold text-[#1f4f9d]">Publishing Support</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-700">
                        Members receive better access to journal communication, author resources, and publishing guidance.
                    </p>
                </div>

                <div class="border-l-4 border-[#1f4f9d] bg-slate-100 p-6">
                    <h3 class="text-xl font-semibold text-[#1f4f9d]">Cost Advantages</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-700">
                        Eligible memberships may include APC discounts or institutional publishing support advantages.
                    </p>
                </div>

                <div class="border-l-4 border-[#1f4f9d] bg-slate-100 p-6">
                    <h3 class="text-xl font-semibold text-[#1f4f9d]">Academic Recognition</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-700">
                        Reviewer and editorial members may receive recognition for their contribution to scholarly publishing.
                    </p>
                </div>

                <div class="border-l-4 border-[#1f4f9d] bg-slate-100 p-6">
                    <h3 class="text-xl font-semibold text-[#1f4f9d]">Community Access</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-700">
                        Become part of an international network of researchers, reviewers, and institutions.
                    </p>
                </div>
            </div>
        </div>

        <!-- Eligibility -->
        <div class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Eligibility</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
            </div>

            <div class="mt-10 border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                <ul class="space-y-3 text-[16px] leading-8 text-slate-700">
                    <li>• Authors should be actively engaged in academic, scientific, clinical, or research work.</li>
                    <li>• Reviewers should have subject expertise and relevant publication or professional experience.</li>
                    <li>• Editorial roles may require prior academic leadership, peer review, or publishing background.</li>
                    <li>• Institutional membership is open to recognized academic or research organizations.</li>
                </ul>
            </div>
        </div>

        <!-- CTA Form -->
        <div class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Membership Enquiry</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
            </div>

            <div class="mt-10 border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                <form class="grid gap-5 md:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Full Name *</label>
                        <input type="text" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none focus:border-[#1f4f9d]">
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Email Address *</label>
                        <input type="email" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none focus:border-[#1f4f9d]">
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Membership Type *</label>
                        <select class="w-full border border-slate-300 px-4 py-3 text-sm outline-none focus:border-[#1f4f9d]">
                            <option value="">Select membership type</option>
                            <option>Author Membership</option>
                            <option>Reviewer Membership</option>
                            <option>Editorial Membership</option>
                            <option>Institutional Membership</option>
                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Institution / Organization</label>
                        <input type="text" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none focus:border-[#1f4f9d]">
                    </div>

                    <div class="md:col-span-2">
                        <label class="mb-2 block text-sm font-medium text-slate-700">Message</label>
                        <textarea rows="5" class="w-full border border-slate-300 px-4 py-3 text-sm outline-none focus:border-[#1f4f9d]" placeholder="Write your membership enquiry..."></textarea>
                    </div>

                    <div class="md:col-span-2">
                        <button type="submit" class="bg-[#1f4f9d] px-8 py-3 text-sm font-semibold text-white transition hover:bg-[#173d7c]">
                            Submit Enquiry
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="mt-16 bg-[#1f4f9d] px-6 py-10 text-center text-white md:px-10">
            <h2 class="text-3xl font-semibold md:text-4xl">Become Part of Our Academic Community</h2>
            <p class="mx-auto mt-4 max-w-4xl text-base leading-8 text-blue-50 md:text-lg">
                Connect with Fortune Journals and explore membership opportunities designed to support publishing, peer review, and academic collaboration.
            </p>
            <div class="mt-8">
                <a href="{{ route('contact') }}" class="inline-block bg-white px-8 py-3 text-sm font-semibold text-[#1f4f9d] transition hover:bg-slate-100">
                    Contact Us
                </a>
            </div>
        </div>

    </div>
</section>
@endsection