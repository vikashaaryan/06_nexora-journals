@extends('layouts.app')

@section('title', 'Editorial Process')

@section('content')
<section class="bg-[#f5f5f5] py-14 md:py-20">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">

        <!-- Page Title -->
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-slate-800 md:text-5xl">Editorial Process</h1>
            <div class="mx-auto mt-5 h-1 w-28 bg-[#1f4f9d]"></div>
        </div>

        <!-- Flowchart -->
        <div class="mt-10 text-center">
            <div class="mx-auto max-w-3xl border-[6px] border-black bg-white p-4 shadow-sm">
                <img
                    src="{{ asset('editorial_process.jpg') }}"
                    alt="Editorial Process Flowchart"
                    class="mx-auto w-full object-contain"
                >
            </div>
            <p class="mt-3 text-sm text-slate-500">
                Click image to enlarge — full editorial process flowchart
            </p>
        </div>

        <!-- Intro -->
        <div class="mt-12 space-y-6 text-[17px] leading-9 text-slate-700">
            <p>
                Fortune Journals follows a <strong>single-blind peer-review process</strong> in which reviewer identities are kept confidential from authors.
                Each manuscript submitted by an author is assigned to a handling Editor. Final acceptance, revision, or rejection decisions are provided
                by the Editor-in-Chief or another Editorial board member.
            </p>

            <ol class="list-decimal space-y-2 pl-7">
                <li>The Editor-in-Chief is mainly responsible for the scientific quality of the journal.</li>
                <li>EIC or Editorial board member should help the Editorial Office when submitting an application to any indexing services.</li>
                <li>The overall Editorial process is given in the flowchart above. A detailed breakdown of each stage is provided below.</li>
            </ol>
        </div>

        <!-- Stage 1 -->
        <div class="mt-14">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Stage 1: Submission & Pre-Review Screening</h2>
            <p class="mt-4 text-[17px] leading-9 text-slate-700">
                Every submitted manuscript undergoes a series of editorial checks before being sent for peer review.
                This stage is completed within <strong>5 business days</strong> of submission.
            </p>

            <div class="mt-8 space-y-8">
                <!-- Item -->
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">1</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Submission Receipt & Acknowledgement</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            The corresponding author receives an automatic acknowledgement email confirming receipt. A unique manuscript ID is assigned for tracking purposes.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">2</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Scope & Formatting Check</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            The Editorial Office verifies that the manuscript falls within the journal's scope and meets basic formatting requirements.
                            Manuscripts outside scope or with incomplete sections are desk-rejected at this stage with reasons provided to the author.
                        </p>

                        <ul class="mt-3 space-y-1 pl-5 text-[17px] leading-8 text-slate-700">
                            <li>Subject matter must align with the journal's scope.</li>
                            <li>Manuscript must be submitted in the required format (Word/PDF).</li>
                            <li>All required sections must be present (Abstract, Keywords, References, etc.).</li>
                        </ul>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">3</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Plagiarism & Similarity Screening</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            All manuscripts are screened using plagiarism-detection tools. Manuscripts with a similarity index above the acceptable threshold
                            are returned to the author for revision or desk-rejected depending on severity.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">4</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Ethical Compliance Check</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            The Editorial Office verifies that the following mandatory declarations are present:
                        </p>

                        <ul class="mt-3 space-y-1 pl-5 text-[17px] leading-8 text-slate-700">
                            <li>Conflict of Interest (COI) Disclosure</li>
                            <li>Data Availability Statement</li>
                            <li>AI Use Disclosure (if applicable)</li>
                            <li>Ethics committee / IRB approval (for studies involving human subjects or animals)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 2 -->
        <div class="mt-16">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Stage 2: Editorial Assignment</h2>
            <p class="mt-4 text-[17px] leading-9 text-slate-700">
                Manuscripts passing pre-review screening are assigned to a handling Editor within <strong>7 business days</strong> of submission.
            </p>

            <div class="mt-8 space-y-8">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">5</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Assignment to Handling Editor</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            The EIC or a Senior Editor assigns the manuscript to a handling Editor whose expertise aligns with the subject matter.
                            The handling Editor manages the review process and makes the final recommendation.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">6</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Reviewer Invitation</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            The handling Editor invites <strong>2 to 3 external peer reviewers</strong> with relevant expertise.
                            Reviewers are selected to avoid conflicts of interest with the authors.
                            Author-suggested reviewers may be considered but are not guaranteed to be selected.
                        </p>

                        <div class="mt-4 border-l-4 border-[#2d73b9] bg-blue-50 px-5 py-4 text-[16px] leading-8 text-slate-700">
                            <strong>Reviewer Conflicts:</strong> Reviewers who have collaborated with any author within the past 3 years,
                            hold a financial relationship with the authors, or have any personal conflict must decline the invitation and notify
                            the editorial office immediately.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 3 -->
        <div class="mt-16">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Stage 3: Peer Review</h2>
            <p class="mt-4 text-[17px] leading-9 text-slate-700">
                Fortune Journals operates a <strong>single-blind peer-review process</strong> — reviewer identities are kept confidential from authors throughout.
                Reviewers are expected to submit their comments within <strong>21 days</strong> of accepting the invitation.
            </p>

            <div class="mt-8 space-y-8">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">7</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Review Conducted</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            Each reviewer independently evaluates the manuscript against:
                        </p>

                        <ul class="mt-3 space-y-1 pl-5 text-[17px] leading-8 text-slate-700">
                            <li>Scientific soundness, originality, and validity of methodology</li>
                            <li>Clarity, structure, and presentation of the manuscript</li>
                            <li>Adequacy and accuracy of references</li>
                            <li>Significance and contribution to the field</li>
                            <li>Compliance with ethical standards</li>
                        </ul>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">8</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Reviewer Recommendation Submitted</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            Each reviewer submits a confidential recommendation to the handling Editor. Reviewer identities and comments are not disclosed to authors.
                            Recommendations are one of:
                        </p>

                        <ul class="mt-3 space-y-1 pl-5 text-[17px] leading-8 text-slate-700">
                            <li>Accept</li>
                            <li>Minor Revision</li>
                            <li>Major Revision</li>
                            <li>Reject</li>
                        </ul>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">9</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Handling of Conflicting Reviewer Opinions</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            When reviewer recommendations conflict significantly, the handling Editor may:
                        </p>

                        <ul class="mt-3 space-y-1 pl-5 text-[17px] leading-8 text-slate-700">
                            <li>Invite a third reviewer to break the deadlock, or</li>
                            <li>Make an independent editorial judgment based on the comments provided.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 4 -->
        <div class="mt-16">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Stage 4: Editorial Decision</h2>
            <p class="mt-4 text-[17px] leading-9 text-slate-700">
                Based on reviewer recommendations, the handling Editor communicates a decision to the author within
                <strong>35 days of submission</strong>. The Editor-in-Chief holds final authority over all editorial decisions.
            </p>

            <div class="mt-8 border-t border-slate-200 pt-6">
                <h3 class="text-xl font-semibold text-[#1f4f9d]">Possible Decision Outcomes</h3>

                <div class="mt-5 grid gap-4 md:grid-cols-2">
                    <div class="rounded border border-slate-300 border-t-4 border-t-green-600 bg-white p-5">
                        <h4 class="text-xl font-semibold text-green-700">✔ Accept</h4>
                        <p class="mt-3 text-[17px] leading-8 text-slate-700">
                            The manuscript is accepted for publication as submitted or with only minor editorial corrections
                            (e.g., formatting, typographical). No further review is required.
                        </p>
                    </div>

                    <div class="rounded border border-slate-300 border-t-4 border-t-blue-600 bg-white p-5">
                        <h4 class="text-xl font-semibold text-blue-700">ⓘ Minor Revision</h4>
                        <p class="mt-3 text-[17px] leading-8 text-slate-700">
                            Limited revisions are required addressing specific reviewer comments. Revised manuscripts must be resubmitted
                            within <strong>14 days</strong>. The Editor may review the revision without returning it to external reviewers.
                        </p>
                    </div>

                    <div class="rounded border border-slate-300 border-t-4 border-t-orange-500 bg-white p-5">
                        <h4 class="text-xl font-semibold text-orange-600">↻ Major Revision</h4>
                        <p class="mt-3 text-[17px] leading-8 text-slate-700">
                            Substantial revisions are required — additional experiments, data analysis, or significant rewriting may be needed.
                            Revised manuscripts must be resubmitted within <strong>30 days</strong> and are typically returned to the original reviewers.
                        </p>
                    </div>

                    <div class="rounded border border-slate-300 border-t-4 border-t-red-600 bg-white p-5">
                        <h4 class="text-xl font-semibold text-red-600">✘ Reject</h4>
                        <p class="mt-3 text-[17px] leading-8 text-slate-700">
                            The manuscript does not meet the journal's standards for scientific quality, originality, or scope.
                            Rejected manuscripts will not be reconsidered unless the author has been explicitly invited to resubmit.
                        </p>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="text-xl font-semibold text-[#1f4f9d]">Revision Resubmission Guidelines</h3>
                    <div class="mt-4 border-t border-slate-200 pt-4 text-[17px] leading-8 text-slate-700">
                        <p>Authors must submit a <strong>point-by-point response letter</strong> addressing each reviewer comment alongside the revised manuscript.</p>
                        <p>All changes in the revised manuscript must be highlighted or tracked.</p>
                        <p>Authors requiring additional time must contact the editorial office before their deadline expires. Extensions are granted at the Editor's discretion.</p>
                        <p>Manuscripts not resubmitted within the deadline without prior communication will be treated as withdrawn.</p>
                        <p>A maximum of two revision rounds is permitted. If the manuscript remains unsuitable after two rounds, it will be rejected.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 5 -->
        <div class="mt-16">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Stage 5: Production & Publication</h2>
            <p class="mt-4 text-[17px] leading-9 text-slate-700">
                Once accepted, the manuscript enters the final production stage prior to publication.
            </p>

            <div class="mt-8 space-y-8">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">10</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Copyediting and Proof Preparation</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            Accepted articles are copyedited for grammar, consistency, and journal style. A proof is generated and sent to the corresponding author for final approval.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">11</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Author Proof Approval</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            Authors must review the proof carefully and return corrections within the specified deadline. Only minor typographical or factual corrections are allowed at this stage.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2d73b9] text-lg font-bold text-white">12</div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-semibold text-[#1f4f9d]">Publication and Indexing</h3>
                        <p class="mt-2 text-[17px] leading-9 text-slate-700">
                            Published articles are submitted to relevant indexing databases and archived to ensure long-term accessibility.
                            The EIC and Editorial Board members assist the Editorial Office with indexing applications as required.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stage 6 -->
        <div class="mt-16">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Stage 6: Appeals Process</h2>
            <p class="mt-4 text-[17px] leading-9 text-slate-700">
                Authors who believe their manuscript was rejected unfairly, or that reviewer comments contain a significant factual or scientific error,
                may submit a formal appeal.
            </p>

            <div class="mt-6">
                <h3 class="border-b border-slate-200 pb-3 text-xl font-semibold text-[#1f4f9d]">Grounds for Appeal</h3>
                <div class="mt-4 text-[17px] leading-8 text-slate-700">
                    <p>The editorial decision was based on a demonstrable factual or scientific error by a reviewer.</p>
                    <p>A significant conflict of interest on the part of a reviewer has been identified.</p>
                    <p>The decision was procedurally inconsistent with the journal's stated editorial policies.</p>
                </div>

                <div class="mt-5 border-l-4 border-red-600 bg-red-50 px-5 py-4 text-[16px] leading-8 text-slate-700">
                    <strong>Please note:</strong> Disagreement with a reviewer's scientific opinion alone is not sufficient grounds for appeal.
                    Appeals submitted solely on the basis of disagreement with the decision will not be considered.
                </div>
            </div>

            <div class="mt-8">
                <h3 class="border-b border-slate-200 pb-3 text-xl font-semibold text-[#1f4f9d]">How to Submit an Appeal</h3>

                <div class="mt-4 overflow-hidden rounded border border-slate-200 bg-white">
                    <div class="grid grid-cols-1 divide-y divide-slate-200">
                        <div class="grid md:grid-cols-[120px_1fr]">
                            <div class="bg-slate-50 px-4 py-4 font-semibold text-[#1f4f9d]">Step 1</div>
                            <div class="px-4 py-4 text-[17px] leading-8 text-slate-700">
                                Submit a written appeal to the editorial office within <strong>30 days</strong> of receiving the rejection decision,
                                clearly stating the grounds and providing supporting evidence.
                            </div>
                        </div>

                        <div class="grid md:grid-cols-[120px_1fr]">
                            <div class="bg-slate-50 px-4 py-4 font-semibold text-[#1f4f9d]">Step 2</div>
                            <div class="px-4 py-4 text-[17px] leading-8 text-slate-700">
                                The Editor-in-Chief reviews the appeal and may consult an independent Editorial board member not previously involved with the manuscript.
                            </div>
                        </div>

                        <div class="grid md:grid-cols-[120px_1fr]">
                            <div class="bg-slate-50 px-4 py-4 font-semibold text-[#1f4f9d]">Step 3</div>
                            <div class="px-4 py-4 text-[17px] leading-8 text-slate-700">
                                The author will receive a final decision within <strong>30 days</strong> of submitting the appeal.
                                The EIC's decision is final.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Summary Table -->
        <div class="mt-16">
            <h2 class="text-3xl font-semibold text-slate-800 md:text-4xl">Process Summary & Timeframes</h2>

            <div class="mt-8 overflow-hidden rounded border border-slate-300 bg-white shadow-sm">
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-[#d7e2ef] text-left">
                            <tr>
                                <th class="px-4 py-4 text-[17px] font-semibold text-slate-800">Stage</th>
                                <th class="px-4 py-4 text-[17px] font-semibold text-slate-800">Action</th>
                                <th class="px-4 py-4 text-[17px] font-semibold text-slate-800">Responsible Party</th>
                                <th class="px-4 py-4 text-[17px] font-semibold text-slate-800">Expected Timeframe</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 text-[16px] text-slate-700">
                            <tr>
                                <td class="px-4 py-4"><span class="inline-flex h-8 w-8 items-center justify-center rounded bg-[#2d73b9] font-semibold text-white">1</span> Submission</td>
                                <td class="px-4 py-4">Receipt, scope & plagiarism check, ethical compliance</td>
                                <td class="px-4 py-4">Editorial Office</td>
                                <td class="px-4 py-4">Within 5 business days</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-4"><span class="inline-flex h-8 w-8 items-center justify-center rounded bg-[#2d73b9] font-semibold text-white">2</span> Assignment</td>
                                <td class="px-4 py-4">Assign handling Editor & invite reviewers</td>
                                <td class="px-4 py-4">EIC / Senior Editor</td>
                                <td class="px-4 py-4">Within 7 business days</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-4"><span class="inline-flex h-8 w-8 items-center justify-center rounded bg-[#2d73b9] font-semibold text-white">3</span> Peer Review</td>
                                <td class="px-4 py-4">External review conducted & recommendations submitted</td>
                                <td class="px-4 py-4">2–3 External Reviewers</td>
                                <td class="px-4 py-4">Within 21 days of invitation</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-4"><span class="inline-flex h-8 w-8 items-center justify-center rounded bg-[#2d73b9] font-semibold text-white">4</span> Decision</td>
                                <td class="px-4 py-4">Editorial decision communicated to author</td>
                                <td class="px-4 py-4">Handling Editor / EIC</td>
                                <td class="px-4 py-4">Within 35 days of submission</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-4"><span class="inline-flex h-8 w-8 items-center justify-center rounded bg-[#2d73b9] font-semibold text-white">5</span> Publication</td>
                                <td class="px-4 py-4">Proofing, copyediting, publication & indexing</td>
                                <td class="px-4 py-4">Production Team / Editorial Office</td>
                                <td class="px-4 py-4">After final acceptance</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-4"><span class="inline-flex h-8 w-8 items-center justify-center rounded bg-[#2d73b9] font-semibold text-white">6</span> Appeal</td>
                                <td class="px-4 py-4">Appeal submitted and final review completed</td>
                                <td class="px-4 py-4">Author / EIC</td>
                                <td class="px-4 py-4">Within 30 days</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection