<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use App\Models\Journal;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index(Journal $journal)
    {
        $issues = Issue::where('journal_id', $journal->id)
            ->latest()
            ->get();

        return view('admin.issue.index', compact('journal', 'issues'));
    }

    public function store(Request $request, Journal $journal)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'show_on_frontend' => 'nullable|boolean',
            'password' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        $data['journal_id'] = $journal->id;
        $data['show_on_frontend'] = $request->has('show_on_frontend');
        $data['is_active'] = $request->has('is_active');

        Issue::create($data);

        return redirect()
            ->route('admin.journal.issues.index', $journal->id)
            ->with('success', 'Issue created successfully.');
    }

    public function edit(Journal $journal, Issue $issue)
    {
        abort_if($issue->journal_id != $journal->id, 404);

        $issues = Issue::where('journal_id', $journal->id)
            ->latest()
            ->get();

        return view('admin.issue.index', compact('journal', 'issues', 'issue'));
    }

    public function update(Request $request, Journal $journal, Issue $issue)
    {
        abort_if($issue->journal_id != $journal->id, 404);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'show_on_frontend' => 'nullable|boolean',
            'password' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        $data['journal_id'] = $journal->id;
        $data['show_on_frontend'] = $request->has('show_on_frontend');
        $data['is_active'] = $request->has('is_active');

        $issue->update($data);

        return redirect()
            ->route('admin.journal.issues.index', $journal->id)
            ->with('success', 'Issue updated successfully.');
    }

    public function destroy(Journal $journal, Issue $issue)
    {
        abort_if($issue->journal_id != $journal->id, 404);

        $issue->delete();

        return back()->with('success', 'Issue deleted successfully.');
    }
}