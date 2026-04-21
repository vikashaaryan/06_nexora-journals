<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\ManuScript;
use Illuminate\Http\Request;

class SubmitmanuscriptController extends Controller
{
    public function index(Journal $journal)
    {
        $manuscripts = ManuScript::with('journal')
            ->where('journal_id', $journal->id)
            ->latest()
            ->get();

        return view('admin.manage-submit-manu', compact('journal', 'manuscripts'));
    }

    public function show(Journal $journal, ManuScript $manuscript)
    {
        abort_if($manuscript->journal_id != $journal->id, 404);

        return view('admin.submit-manuscript-show', compact('journal', 'manuscript'));
    }

    public function destroy(Journal $journal, ManuScript $manuscript)
    {
        abort_if($manuscript->journal_id != $journal->id, 404);

        $manuscript->delete();

        return back()->with('success', 'Manuscript deleted successfully.');
    }
}