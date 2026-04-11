@extends('layouts.app')

@section('title', 'Guidelines')

@section('content')
<section class="bg-[#f5f5f5] py-14 md:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Page Heading -->
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-slate-800 md:text-5xl">Guidelines</h1>
            <div class="mx-auto mt-5 h-1 w-28 bg-[#1f4f9d]"></div>
            <p class="mx-auto mt-6 max-w-5xl text-base leading-8 text-slate-600 md:text-lg">
                Fortune Journals follows international open access publishing standards in all aspects of editorial work,
                publication ethics, authorship, peer review, copyright, corrections, and research integrity.
            </p>
        </div>

        <!-- Quick Navigation -->
        <div class="mt-12 border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-xl font-semibold text-slate-800">Contents</h2>

            <div class="mt-5 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                <a href="#transparency" class="text-sm font-medium text-[#1f4f9d] hover:underline">Principles of Transparency</a>
                <a href="#copyright" class="text-sm font-medium text-[#1f4f9d] hover:underline">Copyright & Intellectual Property</a>
                <a href="#author-guidelines" class="text-sm font-medium text-[#1f4f9d] hover:underline">Author Guidelines</a>
                <a href="#research-integrity" class="text-sm font-medium text-[#1f4f9d] hover:underline">Research Integrity & Misconduct</a>
                <a href="#editor-guidelines" class="text-sm font-medium text-[#1f4f9d] hover:underline">Editor Guidelines</a>
                <a href="#reviewer-guidelines" class="text-sm font-medium text-[#1f4f9d] hover:underline">Guidelines for Reviewers</a>
                <a href="#authorship-policy" class="text-sm font-medium text-[#1f4f9d] hover:underline">Authorship Policy</a>
                <a href="#corrections" class="text-sm font-medium text-[#1f4f9d] hover:underline">Corrections, Expressions of Concern & Retractions</a>
            </div>
        </div>

        <!-- Principles of Transparency -->
        <div id="transparency" class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Principles of Transparency</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
            </div>

            <div class="mt-10 border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                <div class="space-y-5 text-[16px] leading-8 text-slate-700">
                    <p><strong>Peer review process:</strong> All journals are peer reviewed and Open Access. During peer review, decisions are taken by relevant external experts and journal editorial board members.</p>
                    <p><strong>Governing Body:</strong> All journals have editorial board members whose names and affiliations are displayed on the website.</p>
                    <p><strong>Editorial team / contact information:</strong> Editorial office details and journal contacts are clearly displayed.</p>
                    <p><strong>Author fees:</strong> Publication fee information is displayed on the website of each journal.</p>
                    <p><strong>Copyright:</strong> Authors retain copyright and grant the journal a publishing license under the applicable Creative Commons model.</p>
                    <p><strong>Research misconduct handling:</strong> Editors and publishers take reasonable steps to detect plagiarism, citation manipulation, data falsification, fabrication, AI-assisted misconduct, and related issues.</p>
                    <p><strong>Ownership and management:</strong> Journal ownership and management details are clearly identified on the website.</p>
                    <p><strong>Website integrity:</strong> Journal websites do not contain misleading information or attempt to mimic another publisher.</p>
                    <p><strong>Journal identity:</strong> Each journal has a unique name and clear publication scope.</p>
                    <p><strong>Conflicts of interest:</strong> Authors, editors, and reviewers must disclose conflicts of interest where relevant.</p>
                    <p><strong>Access:</strong> All journals are Open Access with no subscription fees for readers.</p>
                    <p><strong>Archiving:</strong> Journals maintain backup and preservation planning for continued access to content.</p>
                    <p><strong>Direct marketing:</strong> Limited direct marketing may be conducted in an appropriate and non-misleading manner.</p>
                </div>
            </div>
        </div>

        <!-- Copyright & IP -->
        <div id="copyright" class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Copyright & Intellectual Property</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
            </div>

            <div class="mt-10 border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                <div class="space-y-8 text-[16px] leading-8 text-slate-700">

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Copyright Declaration Requirement</h3>
                        <ul class="mt-4 space-y-2">
                            <li>• All figures, images, tables, datasets, and screenshots must be original or reproduced with written permission.</li>
                            <li>• Necessary permissions and licenses must be provided on request.</li>
                            <li>• Submissions must not infringe any third-party intellectual property rights.</li>
                        </ul>

                        <div class="mt-4 border-l-4 border-red-600 bg-red-50 px-5 py-4 text-[15px] leading-7">
                            <strong>Important:</strong> Failure to hold valid copyright permissions may result in rejection prior to peer review or retraction after publication.
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">AI-Generated Content Policy</h3>
                        <ul class="mt-4 space-y-2">
                            <li>• AI tools such as ChatGPT, Gemini, Claude, Copilot, and similar LLMs may not be listed as authors.</li>
                            <li>• Any AI use in writing, editing, data analysis, figure generation, or literature review must be disclosed.</li>
                            <li>• AI-generated references, fake data, fabricated results, or hallucinated citations are considered misconduct.</li>
                            <li>• AI-generated images must be clearly declared and comply with licensing requirements.</li>
                        </ul>

                        <div class="mt-4 border-l-4 border-[#1f4f9d] bg-blue-50 px-5 py-4 text-[15px] leading-7">
                            <strong>Disclosure template:</strong> “During the preparation of this manuscript, the author(s) used [Tool Name] for [specific purpose]. The authors reviewed and take full responsibility for all content of this work.”
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Creative Commons Licensing</h3>
                        <div class="mt-4 overflow-hidden rounded border border-slate-200">
                            <div class="overflow-x-auto">
                                <table class="min-w-full text-left text-sm">
                                    <thead class="bg-[#d7e2ef]">
                                        <tr>
                                            <th class="px-4 py-3 font-semibold text-slate-800">License</th>
                                            <th class="px-4 py-3 font-semibold text-slate-800">What it Allows</th>
                                            <th class="px-4 py-3 font-semibold text-slate-800">Conditions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200 bg-white text-slate-700">
                                        <tr>
                                            <td class="px-4 py-3 font-medium">CC BY 4.0</td>
                                            <td class="px-4 py-3">Free reuse, adaptation, and redistribution for any purpose including commercial use</td>
                                            <td class="px-4 py-3">Attribution required</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 font-medium">CC BY-NC 4.0</td>
                                            <td class="px-4 py-3">Reuse and adaptation for non-commercial use</td>
                                            <td class="px-4 py-3">Attribution required; no commercial use</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 font-medium">CC BY-ND 4.0</td>
                                            <td class="px-4 py-3">Redistribution in original form only</td>
                                            <td class="px-4 py-3">Attribution required; no modification</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 font-medium">CC BY-NC-ND 4.0</td>
                                            <td class="px-4 py-3">Download and share in original form only</td>
                                            <td class="px-4 py-3">Non-commercial use only; no modifications</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Self-Archiving & Preprint Policy</h3>
                        <ul class="mt-4 space-y-2">
                            <li>• Authors may post preprints before submission or after publication.</li>
                            <li>• Accepted manuscripts may be deposited in institutional repositories.</li>
                            <li>• Final published PDFs may be shared under the applicable Creative Commons license.</li>
                            <li>• Authors must include citation and DOI link to the final published version wherever shared.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">DMCA Takedown & Rights Dispute Procedure</h3>
                        <ol class="mt-4 list-decimal space-y-2 pl-5">
                            <li>The claimant submits a formal written notice identifying the disputed content.</li>
                            <li>The editorial office acknowledges receipt within 5 business days and notifies the author.</li>
                            <li>The author is given 14 days to respond with evidence of authorized use.</li>
                            <li>If the claim is upheld, the office may remove content, issue correction, or retract the article.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Author Guidelines -->
        <div id="author-guidelines" class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Author Guidelines</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
            </div>

            <div class="mt-10 grid gap-8 lg:grid-cols-3">
                <div class="lg:col-span-2 border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                    <div class="space-y-8 text-[16px] leading-8 text-slate-700">
                        <div>
                            <h3 class="text-xl font-semibold text-[#1f4f9d]">General Author Instructions</h3>
                            <p class="mt-3">
                                Authors are encouraged to follow standard journal guidelines while preparing manuscripts.
                                References should be carefully checked for formatting and accuracy before final submission.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold text-[#1f4f9d]">Transfer of Manuscript to Another Journal</h3>
                            <p class="mt-3">
                                Editors may suggest transfer of a manuscript to another suitable journal where the scope is more closely aligned,
                                without restarting the entire review process.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold text-[#1f4f9d]">Peer-Review Process</h3>
                            <p class="mt-3">
                                Articles submitted are peer-reviewed by experts in the relevant field. The editorial office coordinates the review process,
                                and accepted articles are proof-edited before publication with author approval.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold text-[#1f4f9d]">Terms & Conditions</h3>
                            <ul class="mt-4 space-y-2">
                                <li>• Submission must be original and not previously published.</li>
                                <li>• Simultaneous submission to another journal is not allowed.</li>
                                <li>• Authors are responsible for obtaining permissions for third-party content.</li>
                                <li>• AI or LLM tool use must be disclosed when used in manuscript preparation.</li>
                                <li>• ORCID iD is strongly encouraged and mandatory for corresponding authors from January 2027.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="border border-slate-200 bg-white shadow-sm">
                        <div class="bg-[#1f4f9d] px-5 py-4">
                            <h3 class="text-lg font-semibold text-white">Submission Checklist</h3>
                        </div>
                        <div class="p-5">
                            <ul class="space-y-3 text-sm leading-7 text-slate-600">
                                <li>• Manuscript is original and unpublished</li>
                                <li>• Journal scope matches the manuscript topic</li>
                                <li>• Author details are complete</li>
                                <li>• References are checked and formatted</li>
                                <li>• Conflict of interest statement included</li>
                                <li>• Permissions obtained for third-party content</li>
                                <li>• AI disclosure included where applicable</li>
                            </ul>
                        </div>
                    </div>

                    <div class="border border-slate-200 bg-white shadow-sm">
                        <div class="bg-[#1f4f9d] px-5 py-4">
                            <h3 class="text-lg font-semibold text-white">Need Help?</h3>
                        </div>
                        <div class="p-5 text-sm leading-7 text-slate-600">
                            <p>For journal-specific author instructions, formatting support, or submission clarification, please contact the editorial office.</p>
                            <a href="{{ route('contact') }}" class="mt-4 inline-block font-medium text-[#1f4f9d] hover:underline">
                                Contact Us →
                            </a>
                        </div>
                    </div>

                    <div class="border border-slate-200 bg-white shadow-sm">
                        <div class="bg-[#1f4f9d] px-5 py-4">
                            <h3 class="text-lg font-semibold text-white">Templates & Resources</h3>
                        </div>
                        <div class="p-5 text-sm leading-7 text-slate-600">
                            <p>Templates, reference guidance, and journal-specific formatting instructions may be provided on journal pages.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Research Integrity -->
        <div id="research-integrity" class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Research Integrity & Misconduct</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
            </div>

            <div class="mt-10 border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                <div class="space-y-8 text-[16px] leading-8 text-slate-700">
                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Misconduct Definitions</h3>
                        <ul class="mt-4 space-y-2">
                            <li>• Fabrication</li>
                            <li>• Falsification</li>
                            <li>• Plagiarism</li>
                            <li>• AI-assisted misconduct</li>
                            <li>• Duplicate / redundant publication</li>
                            <li>• Citation manipulation</li>
                        </ul>
                        <p class="mt-4">
                            Allegations are investigated according to COPE guidance. Confirmed cases may result in rejection, retraction,
                            and notification of the author's institution.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Data Availability Policy</h3>
                        <ul class="mt-4 space-y-2">
                            <li>• Data available in a named public repository</li>
                            <li>• Data available from the corresponding author on request</li>
                            <li>• Data subject to confidentiality restrictions</li>
                            <li>• No new data generated or analysed</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Conflict of Interest Disclosure</h3>
                        <p class="mt-3">
                            All authors must disclose relevant financial, personal, or institutional conflicts that may influence the submitted work.
                            Undisclosed known conflicts may be grounds for retraction.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">ORCID iD</h3>
                        <p class="mt-3">
                            Fortune Journals strongly encourages all submitting authors to register for and provide their ORCID iD.
                            ORCID iD becomes mandatory for corresponding authors from January 2027 onwards.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Editor Guidelines -->
        <div id="editor-guidelines" class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Editor Guidelines</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
            </div>

            <div class="mt-10 border border-slate-200 bg-white p-6 shadow-sm md:p-8 text-[16px] leading-8 text-slate-700">
                <p>
                    Manuscripts are subject to a single-blind peer-review process and assigned to a specific Editor.
                    Final acceptance, revision, or rejection decisions are provided by the respective Editor.
                </p>

                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-[#1f4f9d]">Editors are responsible for:</h3>
                    <ul class="mt-4 space-y-2">
                        <li>• Ensuring all articles include a Data Availability Statement</li>
                        <li>• Verifying Conflict of Interest disclosures</li>
                        <li>• Screening manuscripts for plagiarism, duplicate publication, or AI misconduct</li>
                        <li>• Managing reviewer conflicts of interest</li>
                        <li>• Escalating misconduct cases in line with COPE guidance</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Reviewer Guidelines -->
        <div id="reviewer-guidelines" class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Guidelines for Reviewers</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
            </div>

            <div class="mt-10 border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                <div class="space-y-8 text-[16px] leading-8 text-slate-700">
                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Reviewer Responsibilities</h3>
                        <ul class="mt-4 space-y-2">
                            <li>• Follow review instructions carefully</li>
                            <li>• Declare conflicts of interest immediately</li>
                            <li>• Report ethical concerns or irregularities to the editorial office</li>
                            <li>• Avoid unnecessary delay in review submission</li>
                            <li>• Provide supported recommendations: Accept / Minor Revision / Major Revision / Reject</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Reviewer Confidentiality</h3>
                        <ul class="mt-4 space-y-2">
                            <li>• Manuscripts and correspondence are strictly confidential</li>
                            <li>• Unpublished material must not be cited or reused</li>
                            <li>• Review copies must not be retained after review</li>
                            <li>• Confidentiality continues after completion of the review process</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Reviewer Conflicts of Interest</h3>
                        <ul class="mt-4 space-y-2">
                            <li>• Current or recent collaboration with authors</li>
                            <li>• Financial relationship with authors or institutions</li>
                            <li>• Direct competition on the same topic</li>
                            <li>• Personal relationship affecting objectivity</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Review Timeframes</h3>
                        <div class="mt-4 overflow-hidden rounded border border-slate-200">
                            <div class="overflow-x-auto">
                                <table class="min-w-full text-left text-sm">
                                    <thead class="bg-[#d7e2ef]">
                                        <tr>
                                            <th class="px-4 py-3 font-semibold text-slate-800">Stage</th>
                                            <th class="px-4 py-3 font-semibold text-slate-800">Expected Timeframe</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200 bg-white text-slate-700">
                                        <tr>
                                            <td class="px-4 py-3">Initial editorial screening</td>
                                            <td class="px-4 py-3">Within 5 business days of submission</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3">Assignment to reviewers</td>
                                            <td class="px-4 py-3">Within 7 business days of passing screening</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3">Reviewer submission of comments</td>
                                            <td class="px-4 py-3">Within 21 days of accepting invitation</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3">Editorial decision to author</td>
                                            <td class="px-4 py-3">Within 35 days of submission</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3">Revised manuscript review</td>
                                            <td class="px-4 py-3">Within 14 days of resubmission</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Authorship Policy -->
        <div id="authorship-policy" class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Authorship Policy</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
            </div>

            <div class="mt-10 border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                <div class="space-y-8 text-[16px] leading-8 text-slate-700">
                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Authorship Criteria (ICMJE Standard)</h3>
                        <ol class="mt-4 list-decimal space-y-2 pl-5">
                            <li>Substantial contributions to conception/design or acquisition/analysis/interpretation of data</li>
                            <li>Drafting or critical revision of the manuscript</li>
                            <li>Final approval of the version to be published</li>
                            <li>Agreement to be accountable for all aspects of the work</li>
                        </ol>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Prohibition on Ghost, Guest & Gift Authorship</h3>
                        <ul class="mt-4 space-y-2">
                            <li>• Ghost authorship is prohibited</li>
                            <li>• Guest or honorary authorship is prohibited</li>
                            <li>• Gift authorship is prohibited</li>
                            <li>• All listed authors must give explicit consent</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Authorship Dispute Resolution</h3>
                        <ol class="mt-4 list-decimal space-y-2 pl-5">
                            <li>Disputes must be submitted in writing with supporting evidence</li>
                            <li>The editorial office contacts all authors confidentially</li>
                            <li>Evidence is reviewed using ICMJE criteria and COPE guidance</li>
                            <li>If unresolved, the matter is referred to the relevant institution</li>
                        </ol>

                        <div class="mt-4 border-l-4 border-orange-500 bg-orange-50 px-5 py-4 text-[15px] leading-7">
                            <strong>Important:</strong> Responsibility for resolving authorship disagreements lies primarily with the authors and their institutions.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Corrections & Retractions -->
        <div id="corrections" class="mt-16">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Corrections, Expressions of Concern & Retractions</h2>
                <div class="mx-auto mt-4 h-1 w-28 bg-[#1f4f9d]"></div>
            </div>

            <div class="mt-10 border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                <div class="space-y-8 text-[16px] leading-8 text-slate-700">
                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Tiered Correction Policy</h3>
                        <div class="mt-4 overflow-hidden rounded border border-slate-200">
                            <div class="overflow-x-auto">
                                <table class="min-w-full text-left text-sm">
                                    <thead class="bg-[#d7e2ef]">
                                        <tr>
                                            <th class="px-4 py-3 font-semibold text-slate-800">Type</th>
                                            <th class="px-4 py-3 font-semibold text-slate-800">When Applied</th>
                                            <th class="px-4 py-3 font-semibold text-slate-800">Action Taken</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200 bg-white text-slate-700">
                                        <tr>
                                            <td class="px-4 py-3 font-medium">Erratum</td>
                                            <td class="px-4 py-3">Minor error introduced by journal</td>
                                            <td class="px-4 py-3">Correction notice published; article updated</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 font-medium">Corrigendum / Correction</td>
                                            <td class="px-4 py-3">Author error not affecting core conclusions</td>
                                            <td class="px-4 py-3">Correction published; article updated</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 font-medium">Expression of Concern</td>
                                            <td class="px-4 py-3">Integrity issue under investigation</td>
                                            <td class="px-4 py-3">Notice published while investigation continues</td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-3 font-medium">Retraction</td>
                                            <td class="px-4 py-3">Serious misconduct or unreliable data</td>
                                            <td class="px-4 py-3">Retraction notice published; article remains online with watermark</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#1f4f9d]">Retraction Standards (COPE Compliant)</h3>
                        <ul class="mt-4 space-y-2">
                            <li>• Retracted articles remain accessible online with clear watermarking</li>
                            <li>• A separate citable retraction notice is published</li>
                            <li>• Authors are notified and given opportunity to respond</li>
                            <li>• Honest error vs misconduct is distinguished where applicable</li>
                            <li>• Appeals may be submitted in writing within 30 days</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="mt-16 bg-[#1f4f9d] px-6 py-10 text-center text-white md:px-10">
            <h2 class="text-3xl font-semibold md:text-4xl">Need Journal-Specific Instructions?</h2>
            <p class="mx-auto mt-4 max-w-4xl text-base leading-8 text-blue-50 md:text-lg">
                For manuscript formatting, submission details, or policy clarification related to a specific journal,
                please visit the relevant journal page or contact the editorial office.
            </p>
            <div class="mt-8">
                <a href="{{ route('contact') }}" class="inline-block bg-white px-8 py-3 text-sm font-semibold text-[#1f4f9d] transition hover:bg-slate-100">
                    Contact Editorial Office
                </a>
            </div>
        </div>

    </div>
</section>
@endsection