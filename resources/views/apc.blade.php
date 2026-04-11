@extends('layouts.app')

@section('title', 'Article Processing Charges')

@section('content')
<section class="bg-[#f5f5f5]">
    <!-- Hero -->
    <div class="bg-[#1f57b5] py-16 text-white md:py-20">
        <div class="mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8">
            <div class="inline-flex items-center gap-2 rounded-full border border-white/30 bg-white/10 px-5 py-2 text-sm font-semibold backdrop-blur">
                🌍 Prices shown in EUR
            </div>

            <h1 class="mt-6 text-3xl font-semibold md:text-5xl">Article Processing Charges</h1>

            <p class="mx-auto mt-6 max-w-4xl text-base leading-8 text-blue-50 md:text-xl">
                Fortune Journals operates on an open access model. All accepted articles are made freely
                available worldwide. Publication costs are covered through a one-time Article Processing
                Charge (APC) paid by authors or their institutions upon acceptance.
            </p>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <!-- Top Cards -->
        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            @foreach($apcCards as $card)
                <div class="border-l-4 border-[#1f57b5] bg-slate-100 p-6">
                    <h3 class="text-xl font-semibold text-[#1f57b5]">
                        {{ $card['icon'] }} {{ $card['title'] }}
                    </h3>
                    <p class="mt-3 text-[15px] leading-8 text-slate-700">
                        {{ $card['description'] }}
                    </p>
                </div>
            @endforeach
        </div>

        <!-- Text Content -->
        <div class="mt-10 space-y-8 text-[17px] leading-9 text-slate-700">
            <p>
                Fortune Journals provides rapid publication of articles within 15-20 days, supported by a dedicated editorial team that ensures timely editorial activities.
            </p>

            <div>
                <h2 class="text-2xl font-semibold text-slate-800">Frequently Asked Questions (FAQs)</h2>

                <div class="mt-6 space-y-6">
                    <div>
                        <h3 class="font-semibold text-slate-800">1. Why does Fortune Journals charge a publication fee?</h3>
                        <p>
                            Fortune Journals is an open-access platform, meaning all articles are freely accessible to readers worldwide.
                            The Article Publication Fee covers editorial and production costs, website hosting, article formatting in HTML,
                            PDF, and XML, and submission to electronic citation databases like CrossRef, Academia.edu, ResearchGate,
                            WorldCat, DRJI, Scilit, Microsoft Academic, and Google Scholar.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-800">Our financial goals include:</h3>
                        <ul class="mt-2 space-y-1">
                            <li>Recovering production-related costs.</li>
                            <li>Generating sufficient revenue to sustain and grow our editorial activities.</li>
                            <li>Gradually reducing publication charges over time.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-800">2. Who is responsible for the Article Processing Charges?</h3>
                        <p>
                            The payment is typically made by the corresponding author, co-authors, or their affiliated university or institution upon acceptance of the article.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-800">3. When should payment be made?</h3>
                        <p>
                            Payment should be arranged by the corresponding author or their institution immediately after receiving notification of acceptance. APCs may be waived if an agreement is established prior to submission.
                        </p>
                        <p class="mt-2 italic font-semibold text-slate-800">
                            Please note that articles will not be published until the charges are settled.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-800">4. How can I make a payment?</h3>
                        <p>Payments can be made in two ways:</p>
                        <ul class="mt-2 space-y-1">
                            <li>Wire/Bank transfer</li>
                            <li>Card payment</li>
                        </ul>
                        <p class="mt-2">
                            Please note that taxes may apply according to the payee's country policies, and additional transaction fees may also be charged.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-800">5. Who is eligible for a waiver on Article Processing Charges?</h3>
                        <p>
                            Waiver requests will be considered on a case-by-case basis and must be submitted during the submission process; requests after manuscript processing will not be accepted.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-800">6. Is payment required if my manuscript is rejected?</h3>
                        <p>No, Article Processing Charges do not apply to rejected articles.</p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-800">7. Are reprints included in the Article Processing Charges (APCs)?</h3>
                        <p>No, APCs do not cover reprint costs, which are optional and must be ordered separately.</p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-slate-800">8. Are there any withdrawal charges?</h3>
                        <p>
                            Yes, if an author wishes to withdraw an accepted article, a withdrawal fee of 30% of the publication fee will apply.
                            If an article is withdrawn after payment, no refunds (full or partial) will be issued.
                        </p>
                    </div>

                    <div>
                        <p>
                            For any queries, please contact us at
                            <a href="mailto:contact@fortunejournals.com" class="font-semibold text-[#1f57b5] hover:underline">contact@fortunejournals.com</a>
                        </p>
                        <p>
                            Submit Your Article to Your
                            <a href="{{ route('journals') }}" class="font-semibold text-[#1f57b5] hover:underline">Preferred Journals.</a>
                        </p>
                    </div>

                    <div>
                        <p>
                            Please refer to the table below for Article Processing Charges for the journals. Fortune Journals offers discounts on Article Processing Charges (APCs) for papers authored by corresponding authors from middle- and low-income countries. For potential discounts, please contact the Editorial Office before submission.
                        </p>
                        <p class="mt-2">
                            <strong>Note:</strong> APCs are based on countries classified by the
                            <span class="font-semibold text-[#1f57b5]">World Bank.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- APC by Journal -->
        <div class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-[#1f57b5] md:text-4xl">APC by Journal</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f57b5]"></div>
            </div>

            <div class="mt-8 border-t border-slate-200 pt-8">
                <p class="text-[17px] text-slate-700">
                    APC tiers below follow the <span class="font-semibold text-[#1f57b5]">World Bank country income classification.</span>
                </p>

                <!-- Legend -->
                <div class="mt-5 flex flex-wrap gap-6 text-sm font-medium text-slate-700">
                    <div class="flex items-center gap-2"><span class="h-4 w-4 rounded-full bg-green-700"></span> High Income</div>
                    <div class="flex items-center gap-2"><span class="h-4 w-4 rounded-full bg-orange-600"></span> Middle Income</div>
                    <div class="flex items-center gap-2"><span class="h-4 w-4 rounded-full bg-red-600"></span> Low Income</div>
                    <div class="flex items-center gap-2"><span class="h-4 w-4 rounded-full bg-blue-600"></span> Free / Waived</div>
                </div>

                <!-- Search + Count -->
                <div class="mt-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <div class="relative w-full max-w-lg">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-4.35-4.35M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15Z" />
                            </svg>
                        </span>
                        <input
                            type="text"
                            id="journalSearch"
                            placeholder="Search journal name or ISSN..."
                            class="w-full border border-slate-300 bg-white py-3 pl-12 pr-4 text-sm outline-none focus:border-[#1f57b5]"
                        >
                    </div>

                    <div class="inline-flex items-center rounded-full bg-[#1f57b5] px-6 py-3 text-sm font-semibold text-white">
                        <span id="journalCount">{{ count($apcRows) }}</span> Journals
                    </div>
                </div>

                <!-- Table -->
                <div class="mt-5 overflow-hidden rounded-md border border-slate-200 bg-white shadow-sm">
                    <div class="overflow-x-auto">
                        <table class="min-w-full" id="apcTable">
                            <thead>
                                <tr class="bg-[#1f57b5] text-left text-white">
                                    <th class="px-4 py-4 text-sm font-semibold">Journal Name</th>
                                    <th class="px-4 py-4 text-sm font-semibold">ISSN</th>
                                    <th class="px-4 py-4 text-center text-sm font-semibold" colspan="3">Article Processing Charges (EUR)</th>
                                </tr>
                                <tr class="bg-[#2d67c4] text-white">
                                    <th class="px-4 py-3"></th>
                                    <th class="px-4 py-3"></th>
                                    <th class="px-4 py-3 text-center text-sm font-semibold">High Income</th>
                                    <th class="px-4 py-3 text-center text-sm font-semibold">Middle Income</th>
                                    <th class="px-4 py-3 text-center text-sm font-semibold">Low Income</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($apcRows as $row)
                                    <tr class="border-t border-slate-200 apc-row odd:bg-slate-50">
                                        <td class="px-4 py-4 text-[15px] font-medium text-[#1f57b5]">{{ $row['journal'] }}</td>
                                        <td class="px-4 py-4 text-[15px] text-slate-700">{{ $row['issn'] }}</td>
                                        <td class="px-4 py-4 text-center">
                                            <span class="inline-block rounded-md bg-green-100 px-4 py-1.5 text-sm font-semibold text-green-700">{{ $row['high'] }}</span>
                                        </td>
                                        <td class="px-4 py-4 text-center">
                                            <span class="inline-block rounded-md bg-amber-100 px-4 py-1.5 text-sm font-semibold text-orange-700">{{ $row['middle'] }}</span>
                                        </td>
                                        <td class="px-4 py-4 text-center">
                                            <span class="inline-block rounded-md bg-rose-100 px-4 py-1.5 text-sm font-semibold text-red-600">{{ $row['low'] }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <p class="mt-4 text-sm text-slate-500">
                    Showing <span id="visibleCount">{{ count($apcRows) }}</span> of {{ count($apcRows) }} journals
                </p>

                <!-- Bottom CTA -->
                <div class="mt-12 rounded-md bg-[#1f57b5] px-6 py-8 text-white md:flex md:items-center md:justify-between md:gap-8">
                    <div class="max-w-3xl">
                        <h3 class="text-2xl font-semibold">🆕 APC Discounts Available</h3>
                        <p class="mt-3 text-base leading-8 text-blue-50">
                            Fortune Journals offers discounts for corresponding authors from middle and low-income countries.
                            Eligible authors may apply for a partial APC discount. Please contact our editorial office before
                            submitting your manuscript to discuss eligibility.
                        </p>
                    </div>

                    <div class="mt-6 md:mt-0">
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center gap-2 rounded-full bg-white px-8 py-4 text-base font-semibold text-[#1f57b5] transition hover:bg-slate-100">
                            ✉️ Contact Editorial Office
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('journalSearch');
        const rows = document.querySelectorAll('.apc-row');
        const visibleCount = document.getElementById('visibleCount');
        const journalCount = document.getElementById('journalCount');

        if (searchInput) {
            searchInput.addEventListener('input', function () {
                const search = this.value.toLowerCase().trim();
                let count = 0;

                rows.forEach(row => {
                    const text = row.innerText.toLowerCase();
                    const match = text.includes(search);

                    row.style.display = match ? '' : 'none';

                    if (match) count++;
                });

                visibleCount.textContent = count;
                journalCount.textContent = count;
            });
        }
    });
</script>
@endsection