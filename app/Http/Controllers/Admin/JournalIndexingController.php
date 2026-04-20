<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\Journalindexing;
use Illuminate\Http\Request;

class JournalIndexingController extends Controller
{
    public function index(Journal $journal)
    {
        $items = Journalindexing::with('journal')
            ->where('journal_id', $journal->id)
            ->latest()
            ->get();

        return view('admin.journal-indexing.index', compact('journal', 'items'));
    }

    public function create(Journal $journal)
    {
        $journalIndexing = null;

        return view('admin.journal-indexing.form', compact('journal', 'journalIndexing'));
    }

    public function store(Request $request, Journal $journal)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'required|boolean',
        ]);

        $data['journal_id'] = $journal->id;

        Journalindexing::create($data);

        return redirect()
            ->route('admin.journal.indexings.index', $journal->id)
            ->with('success', 'Indexing item created successfully.');
    }

    public function edit(Journal $journal, JournalIndexing $journalIndexing)
    {
        abort_if($journalIndexing->journal_id != $journal->id, 404);

        return view('admin.journal-indexing.form', compact('journal', 'journalIndexing'));
    }

    public function update(Request $request, Journal $journal, JournalIndexing $journalIndexing)
    {
        abort_if($journalIndexing->journal_id != $journal->id, 404);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'required|boolean',
        ]);

        $data['journal_id'] = $journal->id;

        $journalIndexing->update($data);

        return redirect()
            ->route('admin.journal.indexings.index', $journal->id)
            ->with('success', 'Indexing item updated successfully.');
    }

    public function destroy(Journal $journal, JournalIndexing $journalIndexing)
    {
        abort_if($journalIndexing->journal_id != $journal->id, 404);

        $journalIndexing->delete();

        return back()->with('success', 'Indexing item deleted successfully.');
    }
}