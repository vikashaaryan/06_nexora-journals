@extends('layouts.app')

@section('title', 'Journal Details')

@section('content')
<section class="bg-[#f3f3f3] pb-16">
    <!-- Hero Banner -->
    <div class="relative overflow-hidden bg-[#b8d9ea]">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bW9sZWN1bGFyJTIwbWFya2V0fGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60"
                 alt="Journal Banner"
                 class="h-full w-full object-cover opacity-35">
        </div>

        <div class="relative mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-center text-center">
                <div class="rounded-xl bg-[#304e78]/90 px-8 py-4 shadow-lg">
                    <h1 class="text-3xl font-semibold text-white md:text-5xl">
                        Cardiology and Cardiovascular Medicine
                    </h1>
                </div>

                <div class="mt-5 rounded-xl bg-[#304e78]/90 px-8 py-3 shadow-lg">
                    <p class="text-2xl font-medium text-white md:text-4xl">
                        ISSN: 2572-9292
                    </p>
                </div>
            </div>

            <div class="mt-8 flex justify-end">
                <a href="{{ route('submit') }}"
                   class="inline-block bg-teal-600 px-6 py-3 text-base font-semibold text-white shadow hover:bg-teal-700">
                    Submit Manuscript
                </a>
            </div>
        </div>
    </div>

    <!-- Main Layout -->
    <div class="mx-auto mt-3 max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-6 lg:grid-cols-12">

            <!-- Left Sidebar -->
            <aside class="lg:col-span-3 space-y-5">
                <!-- Journal Menu -->
                <div class="overflow-hidden border border-slate-300 bg-white shadow-sm">
                    <div class="bg-[#8b005e] px-5 py-4 text-center">
                        <h3 class="text-2xl font-semibold text-white">Journal Menu</h3>
                    </div>

                    <div class="space-y-[1px] bg-slate-200">
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Home</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Aims & Scope</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Editorial Board</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Article Preparation Guidelines</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Online Submission</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Articles Early View</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Current Issue</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Archive</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Membership</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Reprints</a>
                    </div>
                </div>

                <!-- Abstracting and Indexing -->
                <div class="overflow-hidden border border-slate-300 bg-white shadow-sm">
                    <div class="bg-[#8b005e] px-5 py-4 text-center">
                        <h3 class="text-2xl font-semibold text-white">Abstracting and Indexing</h3>
                    </div>

                    <div class="space-y-[1px] bg-slate-200">
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» PubMed NLM</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Google Scholar</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Semantic Scholar</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Scilit</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» CrossRef</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» WorldCat</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» ResearchGate</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Academic Keys</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» DRJI</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Microsoft Academic</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Academia.edu</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» OpenAIRE</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Scribd</a>
                        <a href="#" class="block bg-[#1f4f9d] px-5 py-3 text-lg text-white hover:bg-[#163d7a]">» Baidu Scholar</a>
                    </div>
                </div>
            </aside>

            <!-- Center Content -->
            <main class="lg:col-span-6">
                <div class="bg-white p-6 shadow-sm">
                    <div class="text-center">
                        <h2 class="text-4xl font-semibold text-slate-800">About Journal</h2>
                        <div class="mx-auto mt-4 h-1 w-32 bg-[#1f4f9d]"></div>
                    </div>

                    <div class="mt-6 space-y-6 text-[17px] leading-9 text-slate-800">
                        <p>
                            <strong>Cardiology and Cardiovascular Medicine</strong> is a peer-reviewed, open-access journal committed to the rapid dissemination of high-quality research in the field. We welcome contributions from researchers, clinicians, and medical professionals across the globe.
                        </p>

                        <div>
                            <h3 class="text-2xl font-semibold text-slate-900">What We Publish</h3>
                            <p class="mt-3">We accept a variety of manuscript types, including:</p>
                            <ul class="mt-3 space-y-2">
                                <li>✅ <strong>Original Research Articles</strong> – Present your latest findings.</li>
                                <li>✅ <strong>Case Reports</strong> – Share unique cases that contribute to medical knowledge.</li>
                                <li>✅ <strong>Review Articles & Perspectives</strong> – Provide in-depth analysis of key topics.</li>
                                <li>✅ <strong>Clinical Trial Designs & Epidemiological Studies</strong> – Help shape the future of cardiovascular medicine.</li>
                                <li>✅ <strong>Methodological Approaches & Innovations</strong> – Showcase new diagnostic techniques and treatments.</li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-2xl font-semibold text-slate-900">Our Scope</h3>
                            <p class="mt-3">We cover a wide range of topics in cardiology and cardiovascular medicine, including but not limited to:</p>
                            <ul class="mt-3 space-y-2">
                                <li>💘 Acute Myocardial Infarction</li>
                                <li>⚡ Arrhythmias & Atrial Fibrillation</li>
                                <li>💓 Cardiomyopathy & Heart Failure</li>
                                <li>🩺 Cardiovascular Imaging & Echocardiography</li>
                                <li>🩻 Hypertension & Ischemic Heart Disease</li>
                                <li>💊 Pharmacological & Non-Pharmacological Treatments</li>
                                <li>🧬 Congenital & Valvular Heart Disease</li>
                                <li>🩸 Vascular Diseases & Stroke</li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-2xl font-semibold text-slate-900">Why Publish With Us?</h3>
                            <ul class="mt-3 space-y-2">
                                <li>✓ <strong>Global Visibility</strong> – Your work is freely accessible to readers worldwide.</li>
                                <li>✓ <strong>No Word Limits</strong> – Provide comprehensive details to enhance understanding.</li>
                                <li>✓ <strong>Fast & Transparent Peer Review</strong> – Ensuring quality and credibility.</li>
                                <li>✓ <strong>User-Friendly Submission Process</strong> – Managed through Open Journal Systems (OJS).</li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-2xl font-semibold text-slate-900">Submit Your Manuscript Today!</h3>
                            <p class="mt-3">
                                Join a community of experts shaping the future of cardiovascular medicine.
                                <strong>Submit your research online</strong> and let your work make a difference!
                            </p>

                            <div class="mt-4 space-y-2">
                                <p>📩 <strong>For inquiries, contact us at:</strong></p>
                                <p class="text-[#1f4f9d] font-medium">contact@fortunejournals.com | editor@fortunejournals.com</p>
                                <p>🚀 <strong>Advance your research. Expand your impact. Get published!</strong></p>
                            </div>
                        </div>
                    </div>

                    <!-- PubMed Indexed Articles -->
                    <div class="mt-10">
                        <div class="bg-[#1f4f9d] px-5 py-4 text-center">
                            <h3 class="text-3xl font-semibold text-white">PubMed Indexed Articles</h3>
                        </div>

                        <div class="mt-4 overflow-hidden border border-cyan-400 bg-white shadow-sm">
                            <div class="flex items-center justify-between bg-gradient-to-r from-cyan-600 to-teal-500 px-4 py-3 text-white">
                                <span class="text-lg font-semibold">Research Article</span>
                                <span class="text-lg font-semibold">USA</span>
                            </div>

                            <div class="p-4">
                                <div class="inline-block bg-slate-200 px-3 py-2 text-base font-medium text-slate-700">
                                    doi 10.26502/fccm.92920404
                                </div>

                                <h4 class="mt-4 text-[22px] leading-9 font-medium text-[#1f4f9d]">
                                    Income in Relation to Psychosocial Factors Among Stroke Survivors using Smartwatches for Atrial Fibrillation Monitoring
                                </h4>

                                <p class="mt-4 text-[17px] leading-8 text-slate-700">
                                    <strong>Authors:</strong> Syed Naeem, Tyler Jones, Joseph Daniel, Jordy Mehawjej, Andreas Filippaios, Tenes Paul, Ziyue Wang, Sakena Howard-Wilson, Darleen Lessard, Eric Ding, Edith Mensah Otabi, Kamran Noorishirazi, Apurv Soni, Jane Saczynski, Khanh-Van Tran, David McManus
                                </p>

                                <div class="mt-5 flex flex-wrap gap-2">
                                    <a href="#" class="rounded bg-slate-100 px-3 py-2 text-sm font-medium text-slate-700">Abstract</a>
                                    <a href="#" class="rounded bg-red-600 px-3 py-2 text-sm font-medium text-white">PDF</a>
                                    <a href="#" class="rounded bg-orange-500 px-3 py-2 text-sm font-medium text-white">Fulltext</a>
                                    <a href="#" class="rounded bg-emerald-500 px-3 py-2 text-sm font-medium text-white">PubMed</a>
                                    <a href="#" class="rounded bg-fuchsia-600 px-3 py-2 text-sm font-medium text-white">PMC</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Right Sidebar -->
            <aside class="lg:col-span-3 space-y-5">
                <!-- PubMed -->
                <div class="border border-slate-300 bg-white p-6 shadow-sm">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-[#2d6aa9]">
                            Pub<span class="text-[60px] font-extrabold">M</span>ed
                        </div>
                        <p class="mt-3 text-3xl text-slate-700">NLM ID</p>
                    </div>
                </div>

                <!-- Journal Statistics -->
                <div class="overflow-hidden border border-slate-300 bg-white shadow-sm">
                    <div class="bg-[#8b005e] px-5 py-4 text-center">
                        <h3 class="text-2xl font-semibold text-white">Journal Statistics</h3>
                    </div>

                    <div class="bg-teal-700 px-6 py-6 text-white">
                        <div class="space-y-6 text-[17px] leading-8">
                            <p>☼ Impact Factor: <strong>* 5.6</strong></p>
                            <p>📄 Acceptance Rate: <strong>74.36%</strong></p>
                            <p>⏱ Time to first decision: <strong>10.4 days</strong></p>
                            <p>🕘 Time from article received to acceptance: <strong>2-3 weeks</strong></p>
                            <p>Discover More: <a href="#" class="font-semibold underline">Recent Articles</a></p>
                        </div>
                    </div>
                </div>

                <!-- Grant Support Articles -->
                <div class="overflow-hidden border border-slate-300 bg-white shadow-sm">
                    <div class="bg-[#8b005e] px-5 py-4 text-center">
                        <h3 class="text-2xl font-semibold text-white">Grant Support Articles</h3>
                    </div>

                    <div class="max-h-[720px] overflow-y-auto p-3">
                        <div class="space-y-0">
                            <a href="#" class="block border-b px-2 py-4 text-[16px] leading-8 text-slate-800 hover:bg-slate-50">
                                » Cost-efficient and Accurate Risk Assessment Instruments in Type 2 Diabetics with Greatest Risk for Cardiovascular Disease
                            </a>
                            <a href="#" class="block border-b px-2 py-4 text-[16px] leading-8 text-slate-800 hover:bg-slate-50">
                                » Testosterone and Cardiovascular Health: Physiology, Pharmacokinetics and Clinical Implications
                            </a>
                            <a href="#" class="block border-b px-2 py-4 text-[16px] leading-8 text-slate-800 hover:bg-slate-50">
                                » Mortality Trends in the United States due to Concurrent Heart Failure, Atrial Fibrillation/Flutter and Sepsis
                            </a>
                            <a href="#" class="block border-b px-2 py-4 text-[16px] leading-8 text-slate-800 hover:bg-slate-50">
                                » Novel Missense Variants in TRIM37 Associated with Mulibrey Nanism and Complex Congenital Heart Disease
                            </a>
                            <a href="#" class="block border-b px-2 py-4 text-[16px] leading-8 text-slate-800 hover:bg-slate-50">
                                » Promoting Exercise as a Therapeutic Intervention in Multiple Sclerosis: Barriers, Efficacy, and Social Prescribing Strategies
                            </a>
                            <a href="#" class="block border-b px-2 py-4 text-[16px] leading-8 text-slate-800 hover:bg-slate-50">
                                » Most Effective Interventions for Improving Upper Extremity Function in Patients with Hemiparesis
                            </a>
                            <a href="#" class="block border-b px-2 py-4 text-[16px] leading-8 text-slate-800 hover:bg-slate-50">
                                » Pulse Oximetry Screening for Critical Congenital Heart Defects: Effectiveness and Implementation across Clinical Settings
                            </a>
                            <a href="#" class="block px-2 py-4 text-[16px] leading-8 text-slate-800 hover:bg-slate-50">
                                » Apolipoprotein B in the Risk Assessment of Cardiovascular Disease
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection