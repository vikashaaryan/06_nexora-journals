@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<section class="bg-[#f5f5f5] py-14 md:py-20">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">

        <!-- About Title -->
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-slate-800 md:text-5xl">About Fortune Journals</h1>
            <div class="mx-auto mt-5 h-1 w-28 bg-[#1f4f9d]"></div>
        </div>

        <div class="mt-10 border-t border-slate-200 pt-10 text-[17px] leading-9 text-slate-700 space-y-6">
            <p>
                Fortune Journals is an international, peer-reviewed open access publisher dedicated to the rapid dissemination of high-quality research across medicine, clinical science, life sciences, and related disciplines. We are committed to making cutting-edge scientific knowledge freely accessible to researchers, clinicians, and the global academic community — without subscription barriers.
            </p>

            <p>
                Our growing portfolio of journals covers a broad spectrum of biomedical and life science fields, each supported by a distinguished Editorial Board of globally recognized experts who uphold rigorous scientific and ethical standards. Every article published with Fortune Journals is permanently archived and freely available under the Creative Commons Attribution License (CC BY), ensuring unrestricted use and maximum visibility for authors' work.
            </p>
        </div>

        <!-- Stats Strip -->
        <div class="mt-12 overflow-hidden rounded-md bg-[#1f4f9d] text-white">
            <div class="grid grid-cols-1 divide-y divide-white/15 sm:grid-cols-2 sm:divide-y-0 lg:grid-cols-5 lg:divide-x">
                <div class="px-6 py-8 text-center">
                    <h3 class="text-4xl font-bold">30+</h3>
                    <p class="mt-2 text-sm">Peer-Reviewed Journals</p>
                </div>
                <div class="px-6 py-8 text-center">
                    <h3 class="text-4xl font-bold">PubMed</h3>
                    <p class="mt-2 text-sm">Indexed Journals</p>
                </div>
                <div class="px-6 py-8 text-center">
                    <h3 class="text-4xl font-bold">CC BY</h3>
                    <p class="mt-2 text-sm">Open Access License</p>
                </div>
                <div class="px-6 py-8 text-center">
                    <h3 class="text-4xl font-bold">Global</h3>
                    <p class="mt-2 text-sm">Author & Reader Base</p>
                </div>
                <div class="px-6 py-8 text-center">
                    <h3 class="text-4xl font-bold">Free</h3>
                    <p class="mt-2 text-sm">Permanent Article Access</p>
                </div>
            </div>
        </div>

        <!-- Mission -->
        <div class="mt-16 text-center">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Our Mission</h2>
            <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
        </div>

        <div class="mt-10 border-t border-slate-200 pt-10 text-[17px] leading-9 text-slate-700 space-y-6">
            <p>
                Our mission is to accelerate the advancement of science by providing an open, transparent, and efficient publishing platform that removes barriers to knowledge. Fortune Journals supports researchers worldwide — particularly those in developing countries and institutions with limited library resources — by ensuring that validated, peer-reviewed research is freely available to anyone, anywhere, at any time.
            </p>

            <p>
                We believe that open access is not simply a publishing model — it is a fundamental step toward democratizing science. By making research openly accessible, we help amplify the impact of every study published with us and contribute to a faster, more connected global research community.
            </p>
        </div>

        <!-- Why Publish -->
        <div class="mt-16 text-center">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Why Publish With Fortune Journals</h2>
            <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
        </div>

        <div class="mt-10 border-t border-slate-200 pt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="border-l-4 border-[#1f4f9d] bg-slate-100 p-6">
                <h3 class="text-2xl font-semibold text-[#1f4f9d]">🌍 Global Visibility</h3>
                <p class="mt-4 text-[17px] leading-8 text-slate-700">
                    Articles are indexed in PubMed, PubMed Central, and other leading databases, ensuring maximum discoverability for your research worldwide.
                </p>
            </div>

            <div class="border-l-4 border-[#1f4f9d] bg-slate-100 p-6">
                <h3 class="text-2xl font-semibold text-[#1f4f9d]">🔒 Rigorous Peer Review</h3>
                <p class="mt-4 text-[17px] leading-8 text-slate-700">
                    All submissions undergo a thorough, double-blind peer review process conducted by independent experts to ensure scientific integrity and quality.
                </p>
            </div>

            <div class="border-l-4 border-[#1f4f9d] bg-slate-100 p-6">
                <h3 class="text-2xl font-semibold text-[#1f4f9d]">⚡ Rapid Publication</h3>
                <p class="mt-4 text-[17px] leading-8 text-slate-700">
                    We are committed to timely editorial decisions and fast publication turnaround so your research reaches the community without unnecessary delay.
                </p>
            </div>

            <div class="border-l-4 border-[#1f4f9d] bg-slate-100 p-6">
                <h3 class="text-2xl font-semibold text-[#1f4f9d]">🔓 Permanent Open Access</h3>
                <p class="mt-4 text-[17px] leading-8 text-slate-700">
                    All published articles are permanently and freely accessible online under the Creative Commons CC BY license — no paywalls, ever.
                </p>
            </div>

            <div class="border-l-4 border-[#1f4f9d] bg-slate-100 p-6 md:col-span-1 xl:col-span-2">
                <h3 class="text-2xl font-semibold text-[#1f4f9d]">📄 Author Copyright Retained</h3>
                <p class="mt-4 text-[17px] leading-8 text-slate-700">
                    Authors retain full copyright of their work. The CC BY license allows anyone to share and build upon the research with appropriate attribution.
                </p>
            </div>

            <div class="border-l-4 border-[#1f4f9d] bg-slate-100 p-6 md:col-span-1 xl:col-span-2">
                <h3 class="text-2xl font-semibold text-[#1f4f9d]">✅ High Editorial Standards</h3>
                <p class="mt-4 text-[17px] leading-8 text-slate-700">
                    Our Editorial and Review Boards comprise leading scientists and clinicians committed to maintaining the highest levels of scientific rigor.
                </p>
            </div>
        </div>

        <!-- Editorial Process -->
        <div class="mt-16 text-center">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Editorial & Review Process</h2>
            <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
        </div>

        <div class="mt-10 border-t border-slate-200 pt-10">
            <p class="text-[17px] leading-9 text-slate-700">
                Fortune Journals operates a rigorous, multi-stage editorial process designed to uphold the highest standards of scientific quality, transparency, and integrity.
            </p>

            <div class="mt-8 space-y-6">
                @php
                    $steps = [
                        [
                            'no' => '1',
                            'title' => 'Initial Editorial Screening',
                            'desc' => 'Upon submission, manuscripts are reviewed by the editorial team for scope, completeness, and adherence to author guidelines. Submissions that do not meet our basic requirements are returned to authors promptly.'
                        ],
                        [
                            'no' => '2',
                            'title' => 'Peer Review Assignment',
                            'desc' => 'Manuscripts passing initial screening are assigned to independent expert reviewers selected at the discretion of the handling editor. Authors may suggest reviewers, though the editor is not obligated to use those recommendations.'
                        ],
                        [
                            'no' => '3',
                            'title' => 'Double-Blind Review',
                            'desc' => 'Reviewers assess the scientific validity, originality, methodology, and significance of the work. Authors and reviewers remain anonymous to each other throughout this process.'
                        ],
                        [
                            'no' => '4',
                            'title' => 'Editorial Decision',
                            'desc' => 'Based on reviewer feedback, the editor issues a decision: Accept, Minor Revision, Major Revision, or Reject. Authors are notified by email with detailed feedback to guide any revisions.'
                        ],
                        [
                            'no' => '5',
                            'title' => 'Galley Proof & Final Approval',
                            'desc' => 'Upon acceptance, authors receive a galley proof for final review. Authors are requested to confirm approval within 7 days to ensure timely publication.'
                        ],
                        [
                            'no' => '6',
                            'title' => 'Publication & Archiving',
                            'desc' => 'The accepted article is published online in open access format, assigned a DOI, and permanently archived. Articles are subsequently submitted to indexing databases including PubMed and PMC where applicable.'
                        ],
                    ];
                @endphp

                @foreach($steps as $step)
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-start">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#1f4f9d] text-lg font-bold text-white">
                            {{ $step['no'] }}
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-col gap-2 md:flex-row md:gap-4">
                                <h3 class="min-w-[220px] text-2xl font-semibold text-slate-800">{{ $step['title'] }}</h3>
                                <p class="text-[17px] leading-9 text-slate-700">— {{ $step['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Publication Ethics -->
        <div class="mt-16 text-center">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Publication Ethics & Integrity</h2>
            <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
        </div>

        <div class="mt-10 border-t border-slate-200 pt-10 text-[17px] leading-9 text-slate-700 space-y-6">
            <p>
                Fortune Journals is committed to the highest standards of publication ethics. We follow the guidelines established by the Committee on Publication Ethics (COPE) and expect all authors, reviewers, and editors to adhere to these principles. Plagiarism, data fabrication, duplicate submission, and inappropriate authorship are taken with zero tolerance.
            </p>

            <p>
                Submitted manuscripts may be screened for originality using plagiarism detection tools. Any confirmed misconduct will result in rejection of the manuscript or retraction of a published article, with notification to the authors' institutions where appropriate.
            </p>
        </div>

        <!-- Open Access Policy -->
        <div class="mt-16 text-center">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Open Access Policy</h2>
            <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
        </div>

        <div class="mt-10 border-t border-slate-200 pt-10 text-[17px] leading-9 text-slate-700 space-y-6">
            <p>
                All articles published in Fortune Journals are made immediately and permanently available online free of charge. There are no subscription fees, access barriers, or embargo periods. Content is distributed under the <strong>Creative Commons Attribution License (CC BY)</strong>, which allows others to freely share, adapt, and build upon published work provided the original source is properly cited.
            </p>

            <p>
                Publication costs are covered through Article Processing Charges (APCs), enabling the long-term sustainability of our open access model while keeping research freely accessible to all readers globally.
            </p>
        </div>

        <!-- CTA -->
        <div class="mt-14 rounded-md bg-[#1f4f9d] px-6 py-12 text-center text-white md:px-10">
            <h2 class="text-3xl font-semibold md:text-4xl">Ready to Submit Your Research?</h2>
            <p class="mx-auto mt-4 max-w-4xl text-lg leading-8 text-blue-50">
                Join thousands of researchers who have shared their findings with the global scientific community through Fortune Journals.
            </p>
            <div class="mt-8">
                <a href="{{ route('submit') }}"
                   class="inline-block rounded-md bg-white px-8 py-3 text-lg font-semibold text-[#1f4f9d] transition hover:bg-slate-100">
                    Submit Your Manuscript
                </a>
            </div>
        </div>

    </div>
</section>
@endsection